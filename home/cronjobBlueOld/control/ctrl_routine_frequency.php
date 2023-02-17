<?php
session_start();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
set_time_limit(0);
ini_set('memory_limit', '-1');

echo "<h2>Inicio Cronjob Blue 1</h2>";

require '../../_connect/database/PDOConnection.php';
$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require './model/mdl_routines_frequency.php';
$model = new mdl_routines_frequency($db);

$container = include_once('../../global/settings.php'); 

$result = $model->getRoutinesToRefresh();

if(count($result)>0){

    echo "<h2>Generando token ZH</h2>";

    $signature_metropolitano = $model->getMetroSignature(
        $container["api-zh"]["public_key_metropolitano"] , 
        $container["api-zh"]["private_key_metropolitano"]  , 
        $container["api-zh"]["prefix_metropolitano"] , 
        $container["api-zh"]["user_type_metropolitano"] ,
        $container["api-zh"]["device_id_metropolitano"] );
  
    $headersToken = array("Authorization: Basic aG5odWVwMWp2ZjRjcHQzcDQ3OWwwMXpxZWpxb2g0eXp4M24yYWtmOWRxZ3c2eGJ5YjZwNmN2ZzJtM3BhNG1mbDQycXFhOTV2Omtld3pzcjdpbWNqenlyZ2l4aTd3dzN1M3p3Z2EweHRwendtbjkxem1lY2M1NzkwbjdxNzFsaWdiZDI0ZmF4eWZ6ZHc2NWM3ZA==");
    $body = "grant_type=client_credentials";

    $tokenResult = $model->servicio($container["api-zh"]["url_base"]."/oauth/v2/token?facility=".$container["api-zh"]["facility"], $headersToken, $body, 'POST2'); 
      
    $token = $tokenResult["content"]["access_token"];
    $headerToken = array('Authorization: Bearer '.$token);

    print_r($headerToken);

    foreach($result as $row){

        $processing = $model->updateProcessingRutine($row["id_routine_enc"]);

        if($processing  > 0){

            $url = $row["url"];
            $httpMethod = $row["method"];

            $data = $model->callRoutine($row["id_routine_enc"]);

            $routineEnc = $data["rowSets"][1];
            $routineColumns = $data["rowSets"][2];
            $routineHeader = $data["rowSets"][3];
            $routineParams = $data["rowSets"][4];
            $routineBody = $data["rowSets"][5];

            $response = $model->runService($headerToken, $routineParams, $routineHeader , $routineBody , $httpMethod , $url, $routineEnc, $routineColumns);

            echo json_encode($response);
        }else{
            echo "Error bloqueando rutina! - Se encuentra procesando por otro processo";
        }   
    }

    $processing = $model->unlockBlockedRutines();

}else{
    echo "No se encontraron rutinas";
    die;
}



      
 









