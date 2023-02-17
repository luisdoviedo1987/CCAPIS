<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(0);
ini_set('memory_limit', '-1');

require '../../_connect/database/PDOConnection.php';
$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require './model/mdl_routines_frequency.php';
$model = new mdl_routines_frequency($db);

$result = $model->getRoutinesToRefresh();

if(count($result)>0){

    foreach($result as $row){

        $processing = $model->updateProcessingRutine($row["id_routine_enc"]);

        if($processing  > 0){
                //print_r($_POST);
            $url = $row["url"];
            $httpMethod = $row["method"];

            $data = $model->callRoutine($row["id_routine_enc"]);

            $routineEnc = $data["rowSets"][1];
            $routineColumns = $data["rowSets"][2];
            $routineHeader = $data["rowSets"][3];
            $routineParams = $data["rowSets"][4];
            $routineBody = $data["rowSets"][5];

            $response = $model->runService( $routineParams  ,$routineHeader , $routineBody , $httpMethod , $url, $routineEnc, $routineColumns);

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



      
 









