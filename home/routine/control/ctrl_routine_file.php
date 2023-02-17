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
       
          set_time_limit(0);
          ini_set('memory_limit', '-1');
          //incluimos la clase
          require_once '../../vendor/PHPExcel/Classes/PHPExcel/IOFactory.php';

          //cargamos el archivo que deseamos leer
          $objPHPExcel = PHPExcel_IOFactory::load($_POST["file"]);
          //obtenemos los datos de la hoja activa (la primera)
          $objHoja = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
          
          $sheet = $objPHPExcel->getSheet(0); 
          $highestRow = $sheet->getHighestRow(); 
          $highestColumn = $sheet->getHighestColumn();

          for ($row = $_POST["index"]; $row <= $highestRow; $row++){ 
            //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                            NULL,
                                            TRUE,
                                            FALSE);       
                
            $dataResult = array();
            foreach( $rowData[0] as $row){
              array_push($dataResult,array("title"=> $row,"value"=>""));
            }
            echo json_encode(array("data"=>$dataResult));
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


        $generated_table_name = "data_".$accion->cleanString($form["routine_name"]) ; 

        $check = $model->getCheckRoutineName($generated_table_name);

        if(count($check) == 0){
           
            parse_str($_POST["form"], $form);

            require_once '../../vendor/PHPExcel/Classes/PHPExcel/IOFactory.php';

            $objPHPExcel = PHPExcel_IOFactory::load($_POST["file"]);
            //obtenemos los datos de la hoja activa (la primera)
            $objHoja = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
            
            $sheet = $objPHPExcel->getSheet(0); 
            $highestRow = $sheet->getHighestRow(); 
            $highestColumn = $sheet->getHighestColumn();

            $dataColumns =  array();
            for ($row = $_POST["index"]; $row <= $highestRow; $row++){ 
              //  Read a row of data into an array
              $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                              NULL,
                                              TRUE,
                                              FALSE);       
              array_push($dataColumns,$rowData[0]);
            }

            $headerColumns = array_shift($dataColumns);
            $sql_create_table = $accion->createSQLTable($generated_table_name, $headerColumns) ;
            
            $result = $accion->createRoutineFile($_SESSION["vIdUser"], "2", $form["routine_name"] , isset($form["primary"][0]) ? $form["primary"][0] : null  , $generated_table_name, $headerColumns , $dataColumns,  $sql_create_table, $_POST["index"]) ;

            echo json_encode($result);

        }else{
            $result = array("msg"=> "El nombre de la rutina ya se encuentra utilizado por otra","error"=>true,"idRoutine"=>0);
                  
            echo json_encode($result);
        }
         
      break;
    default:
        require '../../_connect/mvc/confMVC2.php';
        $smarty = new confMVC();
        $smarty->setModule("routine");

        $smarty->assign("name_user", $_SESSION["vName"]);
        $smarty->assign("version", $container['version-js']);
        $smarty->assign("appName", $container['appName']);

        $footer = $smarty->fetch("../../tpl/footer.tpl");
        $smarty->assign("footer", $footer);
  
        $smarty->assign("permisos", $_SESSION["vRol"]);
        $menu = $smarty->fetch("../../tpl/menu-user.tpl");
        $smarty->assign("menu", $menu);
         
        $smarty->display("create_file.tpl");

}









