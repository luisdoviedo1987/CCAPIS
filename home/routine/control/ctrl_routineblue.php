<?php
session_start();

require '../acceso/index.php';

require '../../_connect/database/PDOConnection.php';
$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require './model/mdl_routines.php';
$model = new mdl_routines($db);

$container = include_once('../../global/settings.php'); 


$option =  isset($_POST["action"]) ? $_POST["action"] : null;
//unset($_POST['action']);

switch ($option) {
      case 1:
              $result =  $model->getTypesBody();
              echo json_encode($result);

              break;
      case 2:

              set_time_limit(0);
              ini_set('memory_limit', '-1');

              $signature_metropolitano = $model->getMetroSignature(
                  $container["api-zh"]["public_key_metropolitano"] , 
                  $container["api-zh"]["private_key_metropolitano"]  , 
                  $container["api-zh"]["prefix_metropolitano"] , 
                  $container["api-zh"]["user_type_metropolitano"] ,
                  $container["api-zh"]["device_id_metropolitano"] );
            
              $headers_metropolitano = array("Authentication: ".$signature_metropolitano ,
		                                      'Cookie: session_exists=true; facility='.$container["api-zh"]["facility"]);
		
              $headersToken = array("Authorization: Basic aG5odWVwMWp2ZjRjcHQzcDQ3OWwwMXpxZWpxb2g0eXp4M24yYWtmOWRxZ3c2eGJ5YjZwNmN2ZzJtM3BhNG1mbDQycXFhOTV2Omtld3pzcjdpbWNqenlyZ2l4aTd3dzN1M3p3Z2EweHRwendtbjkxem1lY2M1NzkwbjdxNzFsaWdiZDI0ZmF4eWZ6ZHc2NWM3ZA==");
              $body = "grant_type=client_credentials";

              
	            $tokenResult = $model->servicio($container["api-zh"]["url_base"]."/oauth/v2/token?facility=".$container["api-zh"]["facility"], $headersToken, $body, 'POST2'); 
                
              $token = $tokenResult["content"]["access_token"];
              $headerToken = array('Authorization: Bearer '.$token);
               
              $url = $_POST["url"];
              $httpMethod = $_POST["method"];

              //Load query Parameters
              $params = isset($_POST["params"]) ? $_POST["params"] : array();
              $queryParams = $model->getQueryParams($params);
             
              //Load header Parameters
              $headers = isset($_POST["headers"]) ? $_POST["headers"] : array() ;
              $headersParams = $model->getHeaderParams($headers);
              $headersParamsFinal = array_merge($headersParams, $headerToken);
             
              //Load body Parameters
              $body = isset($_POST["body"]) ? $_POST["body"] : "";
              $finalBody ="" ;
              if($body != ""){
                $finalBody = $model->getBody($_POST["body"]["typeBody"], $body);
              }
             
              $auth = isset($_POST["auth"]) ? $_POST["auth"] : array();

              $response = $model->testService($httpMethod , $url, $auth, $headersParamsFinal, $queryParams, $_POST["body"]["typeBody"] , $finalBody);

              if($response["http_code"] =="200"){
                $res["error"] = false;
                $res["content"] = $response["content"];
                $res["msg"] =$response["msg"];
                $res["token"] = $token;

              }else{
                $res["error"] = true;
                $res["content"] = $response["content"];
                $res["msg"] =$response["msg"];
                $res["token"] = $token;
              }
              echo json_encode($res);

        break;

        case 3:
              set_time_limit(0);
              ini_set('memory_limit', '-1');

              $content =  json_decode($_POST["content"], true) ;
              $index = explode("/",$_POST["index"]);
              $dataResult = array();
              
              if($index[0]!=""){
                    $result = null;
                    for($x = 0; $x < count($index); $x++){
                        if($index[$x] != ""){
                          if ($result == null){
                            $result = $content[$index[$x]];
                          }else{
                            $result = $result[$index[$x]];
                          }
                        }else{
                          $result = $result[0];
                        }
                    }
                    
                    if(isset($result[0])){
                        foreach ($result[0] as $keyColumn => $valueColumn){
                            array_push($dataResult, array("title"=> $keyColumn,"value"=>""));
                        }
                    }else{
                        foreach ($result as $keyColumn => $valueColumn){
                          array_push($dataResult, array("title"=> $keyColumn,"value"=>""));
                        }
                    }
              }else{
                  foreach ($content as $keyColumn => $valueColumn){
                    array_push($dataResult, array("title"=> $keyColumn,"value"=>""));
                  }
              }
              
              echo json_encode(array("data"=>$dataResult));

        break;

        case 4:
          set_time_limit(0);
          ini_set('memory_limit', '-1');

           $generated_table_name = "data_".$model->cleanString($_POST["routine_name"]); 

           $check = $model->getCheckRoutineName($generated_table_name);

           if(count($check) == 0){
                $resultContent = $model->getContentInsert($_POST["content"],$_POST["index"]);

                $sql_create_table = $model->createSQLTable($generated_table_name, $_POST["contentColumns"]) ;

                $result =  $model->createRoutineJson($_SESSION["vIdUser"], "1" , $generated_table_name ,$sql_create_table, $_POST["routine_name"], $_POST["method"], $_POST["url"], isset($_POST["params"]) ? $_POST["params"] : array() , isset($_POST["auth"]) ? $_POST["auth"] : array(), isset($_POST["headers"]) ? $_POST["headers"] : array() , $_POST["body"], $_POST["contentColumns"], $_POST["index"], $_POST["day"], $_POST["hour"], $_POST["minutes"], $resultContent,"1");
                
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
        $container = include_once('../../global/settings.php'); 

        $smarty->assign("name_user", $_SESSION["vName"]);
        $smarty->assign("version", $container['version-js']);
        $smarty->assign("appName", $container['appName']);

        $footer = $smarty->fetch("../../tpl/footer.tpl");
        $smarty->assign("footer", $footer);
  
        $smarty->assign("permisos", $_SESSION["vRol"]);
        $menu = $smarty->fetch("../../tpl/menu-user.tpl");
        $smarty->assign("menu", $menu);
         
        $smarty->display("createblue.tpl");

}









