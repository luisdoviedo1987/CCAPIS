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


// Tabla Conducta
// 4 - Tabla Conducta - idTask

$resultCronJob = $model->manageCronjob(1, 4, 0, 1, 1);

echo  "<h1> 4 - Tabla Conducta - idTask</h1>"; 
echo  $resultCronJob["vStartDate"]; 
echo "<br>";
echo $resultCronJob["vEndDate"];

$apiStartDate = $resultCronJob["vStartDate"];
$apiEndDate = $resultCronJob["vEndDate"]; 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "4","param1"=> $apiStartDate, "param2"=> $apiEndDate));

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_conducta_4",$row , $dataNeo[0],"1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_estadistica_5",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}

$resultCronJobRealese = $model->manageCronjob(0, 4, 1, 0, 1);



//Tabla Estadisticas
//5 - Tabla Estadisticas - idTask
$resultCronJob = $model->manageCronjob(1, 5, 0, 1, 1);
print_r($resultCronJob);

echo  "<h1> 5 - Tabla Estadisticas - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "5","param1"=> $apiStartDate, "param2"=> $apiEndDate));

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
   
    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){
    
            $insert =  $model->insertSQLTable("data_neoapi_estadistica_5",$row , $dataNeo[0], "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_estadistica_5",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 5, 1, 0, 1);




// Tabla Descansos
// 6 - Tabla Descansos - idTask
$resultCronJob = $model->manageCronjob(1, 6, 0, 1, 1);

echo  "<h1> 6 - Tabla Descansos - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "6","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_descansos_6",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_descansos_6",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 6, 1, 0, 1);


//Tabla Operativos
//7 - Tabla Operativos - idTask
$resultCronJob = $model->manageCronjob(1, 7, 0, 1, 1);

echo  "<h1> 7 - Tabla Operativos - idTask</h1>"; 
echo  $resultCronJob["vStartDate"]; 
echo "<br>";
echo $resultCronJob["vEndDate"];

$apiStartDate = $resultCronJob["vStartDate"];
$apiEndDate = $resultCronJob["vEndDate"]; 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "7","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_operativos_7",$row , $dataNeo[0],"1") ;
        
            $result =  $model->executeSql($insert);
        
            if($result == 0){
                echo $insert;
            }
        }
    }

}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_operativos_7",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}

$resultCronJobRealese = $model->manageCronjob(0, 7, 1, 0, 1);



// Tabla Login
// 8 - Tabla Login - idTask
$resultCronJob = $model->manageCronjob(1, 8, 0, 1, 1);

echo  "<h1> 8 - Tabla Login - idTask</h1>"; 
echo  $resultCronJob["vStartDate"]; 
echo "<br>";
echo $resultCronJob["vEndDate"];

$apiStartDate = $resultCronJob["vStartDate"];
$apiEndDate = $resultCronJob["vEndDate"]; 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "8","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_login_8",$row , $dataNeo[0],"1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }

}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_login_8",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}

$resultCronJobRealese = $model->manageCronjob(0, 8, 1, 0, 1);



// Resultados Inbound 
// 13 - Resultados Inbound - idTask
$resultCronJob = $model->manageCronjob(1, 13, 0, 1, 1);

echo  "<h1> 13 - Resultados Inbound  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "13","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_inbound_13",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_inbound_13",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 13, 1, 0, 1);



//Resultados Outbound
//14 - Resultados Outbound - idTask
$resultCronJob = $model->manageCronjob(1, 14, 0, 1, 1);

echo  "<h1> 14 - Resultados Outbound  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "14","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_outbound_14",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }

}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_outbound_14",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 14, 1, 0, 1);




// //Resultados Colas
// //15 - Resultados Colas - idTask
$resultCronJob = $model->manageCronjob(1, 15, 0, 1, 1);

echo  "<h1> 15 - Resultados Colas  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "15","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_colas_15",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_colas_15",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 15, 1, 0, 1);



// //Tabla Visitas
// //16 - Tabla Visitas - idTask
$resultCronJob = $model->manageCronjob(1, 16, 0, 1, 1);

echo  "<h1> 16 - Tabla Visitas  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "16","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_visitas_16",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_visitas_16",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 16, 1, 0, 1);


// //Conteo y Permanencia en Nodos
// //17 - Conteo y Permanencia en Nodos- idTask
$resultCronJob = $model->manageCronjob(1, 17, 0, 1, 1);

echo  "<h1> 17 - Conteo y Permanencia en Nodos  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "17","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_conteo_permanecia_nodos_17",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_conteo_permanecia_nodos_17",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 17, 1, 0, 1);


//Productividad de campaña de social media
//18 - Productividad de campaña de social media
$resultCronJob = $model->manageCronjob(1, 18, 0, 1, 1);

echo  "<h1> 18 - Productividad de campaña de social media  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "18","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_prod_campana_social_media_18",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_prod_campana_social_media_18",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 18, 1, 0, 1);



//Productividad de usuarios de social media
//19 - Productividad de usuarios de social media
$resultCronJob = $model->manageCronjob(1, 19, 0, 1, 1);

echo  "<h1> 19 - Productividad de usuarios de social media  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "19","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {

    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_prod_usuarios_social_media_19",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_prod_usuarios_social_media_19",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 19, 1, 0, 1);


//20 - Tickets de social media
$resultCronJob = $model->manageCronjob(1, 20, 0, 1, 1);

echo  "<h1> 20 - Tickets de social media  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "20","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_tickets_social_media_20",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){ 
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_tickets_social_media_20",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 20, 1, 0, 1);



//21 - Encuesta de satisfaccion
$resultCronJob = $model->manageCronjob(1, 21, 0, 1, 1);

echo  "<h1> 21 - Encuesta de satisfaccion  - idTask</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "21","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_encuesta_satisfaccion_21",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{

    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
           
            $insert =  $model->insertSQLTable("data_neoapi_encuesta_satisfaccion_21",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
        
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 21, 1, 0, 1);


//23 - AHT - ATT / IN - OUT
$resultCronJob = $model->manageCronjob(1, 23, 0, 1, 1);

echo  "<h1> 23 - AHT - ATT / IN - OUT</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "23","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_aht_att_in_out_23",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{
    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
            $insert =  $model->insertSQLTable("data_neoapi_aht_att_in_out_23",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 23, 1, 0, 1);




//24 - Tickets x APP
$resultCronJob = $model->manageCronjob(1, 24, 0, 1, 1);

echo  "<h1> 24 - Tickets x APP- OUT</h1>"; 
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d');  
echo "<br>";
echo  DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d');

$apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
$apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 

$response = $model->consumirServicio("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=> "24","param1"=> $apiStartDate, "param2"=> $apiEndDate));

$dataNeo = json_decode($response["ExecuteTask02Result"],true);
$dataNeo = $dataNeo["Table"];

if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
    if (is_array($dataNeo)){
        foreach($dataNeo as $key => $row ){

            $insert =  $model->insertSQLTable("data_neoapi_tickets_x_app_24",$row , $dataNeo[0], "1") ;

            $result =  $model->executeSql($insert);

            if($result == 0){
                echo $insert;
            }
        }
    }
}else{
    $dataNeo = json_decode($response["ExecuteTask02Result"],true);
    $dataNeo = $dataNeo["Table"];
    
    if (is_array($dataNeo)){
            $insert =  $model->insertSQLTable("data_neoapi_tickets_x_app_24",$dataNeo , $dataNeo, "1") ;
    
            $result =  $model->executeSql($insert);
    
            if($result == 0){
                echo $insert;
            }
    }
}
$resultCronJobRealese = $model->manageCronjob(0, 24, 1, 0, 1);