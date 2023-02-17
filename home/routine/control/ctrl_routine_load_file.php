<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../acceso/index.php';
$container = include_once('../../global/settings.php');

$option = isset($_REQUEST["action"]) ? $_REQUEST["action"] : null;
unset($_REQUEST['action']);

switch ($option) {
    case 1:
        /*Carga de archivo */

        $path = $_FILES['doc']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);

        $uploadfile = $container["tempRoute"] . basename($_FILES['doc']['tmp_name']).".".$ext;
        $result = move_uploaded_file($_FILES['doc']['tmp_name'], $uploadfile);

        if($result){
          $res["error"] = false;
          $res["file"] = $uploadfile;
          $res["name"] = basename($_FILES['doc']['name'],".".$ext);
          $res["msg"] = "Archivo cargado correctamente!";
        }else{
          $res["error"] = true;
          $res["file"] = null;
          $res["name"] = null;
          $res["msg"] = "Ocurrio en error cargando el archivo";
        }
        
        echo json_encode($res);

        break;

      case 2:
          /*Carga de informacion propia */

          $pass = true;

          set_time_limit(0);
          ini_set('memory_limit', '-1');

          require '../../_connect/database/PDOConnection.php';

          $pdo = PDOConnection::instance();
          $db = $pdo->getConnection();
      
          require 'model/mdl_routine_file.php';
          $accion = new mdl_routine_file($db);

          $idRoutine = $_POST["idRoutine"];

          //incluimos la clase
          require_once '../../vendor/PHPExcel/Classes/PHPExcel/IOFactory.php';

          //cargamos el archivo que deseamos leer
          $objPHPExcel = PHPExcel_IOFactory::load($_POST["file"]);
          //obtenemos los datos de la hoja activa (la primera)
          $objHoja = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
          
          $sheet = $objPHPExcel->getSheet(0); 
          $highestRow = $sheet->getHighestRow(); 
          $highestColumn = $sheet->getHighestColumn();

          for ($row = 1; $row <= $highestRow; $row++){ 
            //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);       
                
              $dataResult = array();
              foreach( $rowData[0] as $row){
                  $result = $accion->getCheckColumsDocument($idRoutine , str_replace(" ", "_",$row));
                  if($result != null){
                      array_push($dataResult,array("title"=> str_replace(" ", "_",$row) ,"value"=>$result["key"]));
                  }else{
                      array_push($dataResult,array("title"=> str_replace(" ", "_",$row) ,"value"=>"No Encontrada!"));
                      $pass == false;
                  }
              }

              echo json_encode(array("data"=>$dataResult,"pass" =>$pass));
              die;                 //  Insert row data array into your database of choice here
          }

       break;

      case 3:

          set_time_limit(0);
          ini_set('memory_limit', '-1');

          require '../../_connect/database/PDOConnection.php';

          $pdo = PDOConnection::instance();
          $db = $pdo->getConnection();
      
          require 'model/mdl_routine_file.php';
          $accion = new mdl_routine_file($db);

          $idRoutine = $_POST["idRoutine"];
          $routineInfo = $accion->getRoutineInfo($idRoutine);

          require_once '../../vendor/PHPExcel/Classes/PHPExcel/IOFactory.php';

          $objPHPExcel = PHPExcel_IOFactory::load($_POST["file"]);
          //obtenemos los datos de la hoja activa (la primera)
          $objHoja = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
          
          $sheet = $objPHPExcel->getSheet(0); 
          $highestRow = $sheet->getHighestRow(); 
          $highestColumn = $sheet->getHighestColumn();

          $dataColumns =  array();
          for ($row = 1; $row <= $highestRow; $row++){ 
            //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);       
            array_push($dataColumns,$rowData[0]);
          }

          $headerColumns = array_shift($dataColumns);
     
          $result= $accion->insertAllInformation($routineInfo["generated_table_name"],  $headerColumns, $dataColumns, $_SESSION["vIdUser"]);

          echo json_encode($result);
         
      break;
    default:

      if(isset($_GET["id"])){
            require '../../_connect/mvc/confMVC2.php';
            $smarty = new confMVC();
            $smarty->setModule("routine");

            $smarty->assign("name_user", $_SESSION["vName"]);
            $smarty->assign("version", $container['version-js']);
            $smarty->assign("appName", $container['appName']);
            $smarty->assign("idRoutine", $_GET["id"]);

            
            $footer = $smarty->fetch("../../tpl/footer.tpl");
            $smarty->assign("footer", $footer);
      
            $smarty->assign("permisos", $_SESSION["vRol"]);
            $menu = $smarty->fetch("../../tpl/menu-user.tpl");
            $smarty->assign("menu", $menu);
            
            $smarty->display("create_load_file.tpl");

      }else{
          header("location: ./list.php");
      }
}









