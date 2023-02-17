<?php

session_start();

error_reporting(E_ALL);
set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('display_errors', 1);
ini_set('memory_limit', '-1');

ini_set('default_socket_timeout', 5000);

if(isset($_GET["dev"])){
    require '../../_connectblue/database/PDOConnection.php';
}else{
    require '../../_connect/database/PDOConnection.php';
}

$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require './model/mdl_routines_frequency.php';
$model = new mdl_routines_frequency($db);

$rutinas = $model->getRoutinesBlue();

if(count($rutinas)>0){
    foreach($rutinas as $rowRutina){
        echo  "<h1> Inicio  JSON - ".$rowRutina["name"]." - ".$rowRutina["generated_table_name"]."</h1>"; 
        echo  "<b>Iniciando....</b><br>"; 
        $sinErrores = true;
        
           /*
            * Reviso si la fecha por consumir sea menor a la actual
            */


            if ($rowRutina["start_date"] != date("Y-m-d") && strtotime($rowRutina["end_date"]) < strtotime(date("Y-m-d H:m:s")) && strtotime(date("Y-m-d H:m:s")) > strtotime(date("Y-m-d") ." 03:00:00")){

                $processing = $model->updateProcessingRutine($rowRutina["id_routine_enc"]);

                    if($processing  > 0){
          
                        /*
                        * Formato de fecha servicio
                        */
                        $apiStartDate = $rowRutina["start_date"]; 
                        $apiEndDate = $rowRutina["end_date"];
                    
                        echo "<br>";
                        echo "<b>F.Inicial: </b>". $apiStartDate; 
                        echo "<br>";
                        echo "<b>F.Final: </b>".$apiEndDate;
                        echo "<br>";


                        $existeDb = $model->tableExists($rowRutina["generated_table_name"]) ;
                    
                        /*
                        * Reviso si existe tabla del todo  en base de datos
                        */
                        if (!$existeDb){
                            $columns = array();
                            echo "<br>";
                            echo "<b>No existe la tabla - Inicia creacion</b>";

                            $response = $model->consumirServicio($rowRutina["wsdl"], array("idTask"=> $rowRutina["id_task"], "param1"=> $apiStartDate, "param2"=> $apiEndDate));

                            if(!isset($response["error"])){

                                /*
                                * Lleno la variable con la data
                                */
                                $dataNeo = json_decode($response["ExecuteTask02Result"],true);
                                $dataNeo = $dataNeo["Table"];

                                if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {    
                                    if (count($dataNeo) > 0){
                                        foreach($dataNeo[0] as $key => $row ){
                                            $column = array("title"=>$key);
                                            array_push($columns, $column);
                                        }
                                    }
                                }else{
                                    if(is_array($dataNeo)){
                                        echo $response["ExecuteTask02Result"];
                                        foreach($dataNeo as $key => $row ){
                                            $column = array("title"=>$key);
                                            array_push($columns, $column);
                                        }
                                        $sinErrores = true; 
                                    }else{
                                        $sinErrores = false; 
                                    }
                                }
                                
                                if($sinErrores){
                                    $sqlTabla = $model->createSQLTable($rowRutina["tabla"], $columns);
                            
                                    $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);
                    
                                    if(!$estadoCreacion){
                                        /*
                                        * Error creando tabla de API
                                        */
                                        echo "<br>";
                                        echo "<b>Tabla - Error creando tabla </b>";
                                        $sinErrores = false;
                                    }else{
                                        echo "<br>";
                                        echo "<b>Tabla - Creada correctamente </b>";
                                        $sinErrores = true;
                                    }
                                }
                            }else{
                                $sinErrores = false;

                                echo print_r($response);
                                echo  "<br><br><b>Error el servicio web no response, No se pudo crear la tabla .</b><br>"; 
                                echo  "<br><br><b>Se reinicia fecha de rutina.</b><br>"; 

                                $model->resetRutinaError($rowRutina["id_task"]);
                            }
                        }

                        if($sinErrores){

                            $response = $model->consumirServicio($rowRutina["wsdl"], array("idTask"=> $rowRutina["id_task"], "param1"=> $apiStartDate, "param2"=> $apiEndDate));
                            
                            if(!isset($response["error"])){

                                $dataNeo = json_decode($response["ExecuteTask02Result"],true);
                                $dataNeo = $dataNeo["Table"];

                                if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
                                    if(is_array($dataNeo)){
                                        foreach($dataNeo as $key => $row ){
                                            /*
                                            * Reviso columnas de objeto
                                            */
                                            foreach($row  as $key => $rowColumn ){
                                                $columnaExiste =  $model->revisarColumnaTabla($rowRutina["tabla"], $key);
                                                if($columnaExiste == 0){
                                                    $crearColumna = $model->ejecutarCrearColumnaTabla($rowRutina["tabla"], $key);
                                                
                                                }
                                            }
                    
                                            /*
                                            * Guardo linea del objeto
                                            */
                                            $insert =  $model->insertSQLTable($rowRutina["tabla"], $row , $dataNeo[0], "1") ;
                                    
                                            $result =  $model->executeSql($insert);
                                    
                                            if($result == 0){
                                                echo $insert;
                                            }
                                        }
                                    }
                                }else{
                                    echo $response["ExecuteTask02Result"];

                                    if(is_array($dataNeo)){
                                        /*
                                        * Reviso columnas de objeto
                                        */
                                        foreach($dataNeo  as $key => $rowColumn ){
                                            $columnaExiste =  $model->revisarColumnaTabla($rowRutina["tabla"], $key);
                                            if($columnaExiste == 0){
                                                $crearColumna = $model->ejecutarCrearColumnaTabla($rowRutina["tabla"], $key);
                    
                                            }
                                        }
                    
                                        /*
                                        * Guardo linea del objeto
                                        */
                                        $insert =  $model->insertSQLTable($rowRutina["tabla"], $dataNeo, $dataNeo, "1") ;
                                
                                        $result =  $model->executeSql($insert);
                                
                                        if($result == 0){
                                            echo $insert;
                                        }
                                    }else{
                                        echo  "<br><br><b>Sin datos....</b><br>";  
                                    }
                                }
                            }else{
                                echo print_r($response);
                                echo  "<br><br><b>Error el servicio web no response.</b><br>"; 
                                echo  "<br><br><b>Se reinicia fecha de rutina.</b><br>"; 

                                $model->resetRutinaError($rowRutina["id_task"]);

                            }
                        }else{
                            echo  "<br><br><b>Sin datos....</b><br>"; 
                        }

                        echo  "<br><br><b>Terminado....</b><br>"; 
                        echo  "<h1> Fin - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 

                        /*
                        * Fin del proceso 
                        */

                        $resultCronJobRelease = $model->manageCronjob(0, $rowRutina["id_task"], 1, 0, 1);

                    }else{
                        echo "<br>";
                        echo "<b>Error otro proceso ya se encuentra procesando la rutina...</b><br>";
                        echo  "<br><br><b>Terminado....</b><br>"; 
                        echo  "<h1> Fin - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 
                    }

            }else{
                echo "<br>";
                echo "<b>Error fecha de consulta de rutina no puede ser mayor a la actual... ".$rutina["start_date"] ." - ".$rutina["end_date"]."</b><br>";
                echo  "<br><br><b>Terminado....</b><br>"; 
                echo  "<h1> Fin - ".$rutina["id_task"]." - ".$rutina["tabla"]."</h1>"; 
            }   
    }
}else{
    echo  "<h1> No se encontraron rutinas por procesar</h1>"; 
}


//Revision de rutinas
echo  "<hr><h1> -------------------- Inicio Review data Neotel - Reconsultas ----------------- </h1>"; 

$rutinasReview = $model->getRoutinesNeotelReviewJson();


if(count($rutinasReview)>0){
    foreach($rutinasReview as $rowRutina){
        echo  "<h1> Inicio  JSON - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]." - FK ".$rowRutina["primary_key_review"]."</h1>"; 
        echo  "<b>Iniciando....</b><br>"; 
        $sinErrores = true;
        
           /*
            * Reviso si la fecha por consumir sea menor a la actual
            */
           $rutina =  $model->getRutinaIdNeotelReview($rowRutina["id_task"], $rowRutina["days_review"]);


            if ($rutina["date_last_review"] != date("Y-m-d") &&  $rutina["start_date"] != date("Y-m-d") && strtotime($rutina["end_date"]) < strtotime(date("Y-m-d H:m:s")) && strtotime(date("Y-m-d H:m:s")) > strtotime(date("Y-m-d") ." 04:00:00")){

                    $resultCronJob = $model->manageCronjobReview(1, $rowRutina["id_task"], 1, 1, 1);

                    if($resultCronJob["vHasBeenUpdated"] == "1"){
          
                        /*
                        * Formato de fecha servicio
                        */
                        if($rowRutina["date_format"] == "d/m/Y"){
                            $apiStartDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vStartDate"])->format('Y-m-d') ;
                            $apiEndDate = DateTime::createFromFormat('d/m/Y', $resultCronJob["vEndDate"])->format('Y-m-d'); 
                        }else{
                            $apiStartDate = $resultCronJob["vStartDate"]; 
                            $apiEndDate = $resultCronJob["vEndDate"];
                        }
                    
                        echo "<br>";
                        echo "<b>F.Inicial: </b>". $apiStartDate; 
                        echo "<br>";
                        echo "<b>F.Final: </b>".$apiEndDate;
                        echo "<br>";


                        $existeDb = $model->tableExists($rowRutina["tabla"]) ;
                    
                        /*
                        * Reviso si existe tabla del todo  en base de datos
                        */
                        if (!$existeDb){
                            $columns = array();
                            echo "<br>";
                            echo "<b>No existe la tabla - Inicia creacion</b>";

                            $response = $model->consumirServicio($rowRutina["wsdl"], array("idTask"=> $rowRutina["id_task"], "param1"=> $apiStartDate, "param2"=> $apiEndDate));

                            if(!isset($response["error"])){

                                /*
                                * Lleno la variable con la data
                                */
                                $dataNeo = json_decode($response["ExecuteTask02Result"],true);
                                $dataNeo = $dataNeo["Table"];

                                if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {    
                                    if (count($dataNeo) > 0){
                                        foreach($dataNeo[0] as $key => $row ){
                                            $column = array("title"=>$key);
                                            array_push($columns, $column);
                                        }
                                    }
                                }else{
                                    if(is_array($dataNeo)){
                                        echo $response["ExecuteTask02Result"];
                                        foreach($dataNeo as $key => $row ){
                                            $column = array("title"=>$key);
                                            array_push($columns, $column);
                                        }
                                        $sinErrores = true; 
                                    }else{
                                        $sinErrores = false; 
                                    }
                                }
                                
                                if($sinErrores){
                                    $sqlTabla = $model->createSQLTable($rowRutina["tabla"], $columns);
                            
                                    $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);
                    
                                    if(!$estadoCreacion){
                                        /*
                                        * Error creando tabla de API
                                        */
                                        echo "<br>";
                                        echo "<b>Tabla - Error creando tabla </b>";
                                        $sinErrores = false;
                                    }else{
                                        echo "<br>";
                                        echo "<b>Tabla - Creada correctamente </b>";
                                        $sinErrores = true;
                                    }
                                }
                            }else{
                                $sinErrores = false;

                                echo print_r($response);
                                echo  "<br><br><b>Error el servicio web no response, No se pudo crear la tabla .</b><br>"; 
                                echo  "<br><br><b>Se reinicia fecha de rutina.</b><br>"; 

                                $model->resetRutinaError($rowRutina["id_task"]);
                            }
                        }

                        if($sinErrores){

                            $response = $model->consumirServicio($rowRutina["wsdl"], array("idTask"=> $rowRutina["id_task"], "param1"=> $apiStartDate, "param2"=> $apiEndDate));
                            
                            if(!isset($response["error"])){

                                $dataNeo = json_decode($response["ExecuteTask02Result"],true);
                                $dataNeo = $dataNeo["Table"];

                                if (strpos($response["ExecuteTask02Result"], '{"Table":[{') !== false) {
                                    if(is_array($dataNeo)){
                                        foreach($dataNeo as $key => $row ){
                                            /*
                                            * Reviso columnas de objeto
                                            */
                                            foreach($row  as $key => $rowColumn ){
                                                $columnaExiste =  $model->revisarColumnaTabla($rowRutina["tabla"], $key);
                                                if($columnaExiste == 0){
                                                    $crearColumna = $model->ejecutarCrearColumnaTabla($rowRutina["tabla"], $key);
                                                
                                                }
                                            }
                    
                                            /*
                                            * Realizo Update linea del objeto
                                            */
                                            $update =  $model->updateSQLTable($rowRutina["tabla"], $row , $dataNeo[0], "1", $rowRutina["primary_key_review"] ) ;
                                                                        
                                            $result =  $model->executeUpdateSql($update);
                                
                                            if($result == 0){
                                                //No existe el registro se inserta
                                                echo "No existe el registro se inserta data #1<br>";
                                                echo $update."<br>";
                                                    /*
                                                    * Guardo linea del objeto
                                                    */
                                                    $insert =  $model->insertSQLTable($rowRutina["tabla"], $row, $dataNeo[0], "1") ;
                                            
                                                    $result =  $model->executeSql($insert);
                                            
                                                    if($result == 0){
                                                        echo $insert;
                                                    }

                    
                                            }
                                        }
                                    }
                                }else{
                                    echo $response["ExecuteTask02Result"];

                                    if(is_array($dataNeo)){
                                        /*
                                        * Reviso columnas de objeto
                                        */
                                        foreach($dataNeo  as $key => $rowColumn ){
                                            $columnaExiste =  $model->revisarColumnaTabla($rowRutina["tabla"], $key);
                                            if($columnaExiste == 0){
                                                $crearColumna = $model->ejecutarCrearColumnaTabla($rowRutina["tabla"], $key);
                    
                                            }
                                        }
                    
                                        /*
                                        * Realizo Update linea del objeto
                                        */
                                        $update =  $model->updateSQLTable($rowRutina["tabla"], $dataNeo, $dataNeo, "1", $rowRutina["primary_key_review"]) ;
                                
                                        
                                        $result =  $model->executeUpdateSql($update);
                                
                                        if($result == 0){
                                            //No existe el registro se inserta
                                            echo "No existe el registro se inserta data #2<br>";
                                            echo $update."<br>";
                                                 /*
                                                * Guardo linea del objeto
                                                */
                                                $insert =  $model->insertSQLTable($rowRutina["tabla"], $dataNeo, $dataNeo, "1") ;
                                        
                                                $result =  $model->executeSql($insert);
                                        
                                                if($result == 0){
                                                    echo $insert;
                                                }
                                        }
                                    }else{
                                        echo  "<br><br><b>Sin datos....</b><br>";  
                                    }
                                }
                            }else{
                                echo print_r($response);
                                echo  "<br><br><b>Error el servicio web no response.</b><br>"; 
                                echo  "<br><br><b>Se reinicia fecha de rutina.</b><br>"; 

                                $model->resetRutinaError($rowRutina["id_task"]);

                            }
                        }else{
                            echo  "<br><br><b>Sin datos....</b><br>"; 
                        }

                        echo  "<br><br><b>Terminado....</b><br>"; 
                        echo  "<h1> Fin - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 

                        /*
                        * Fin del proceso 
                        */

                        $resultCronJobRelease = $model->manageCronjobReview(0, $rowRutina["id_task"], 1, 0, 1);

                    }else{
                        echo "<br>";
                        echo "<b>Error otro proceso ya se encuentra procesando la rutina...</b><br>";
                        echo  "<br><br><b>Terminado....</b><br>"; 
                        echo  "<h1> Fin - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 
                    }

            }else{
                echo "<br>";
                echo "<b>Error fecha de consulta de rutina no puede ser mayor a la actual... ".$rutina["start_date"] ." - ".$rutina["end_date"]."</b><br>";
                echo  "<br><br><b>Terminado....</b><br>"; 
                echo  "<h1> Fin - ".$rutina["id_task"]." - ".$rutina["tabla"]."</h1>"; 
            }   
    }
}else{
    echo  "<h1> No se encontraron rutinas por procesar</h1>"; 
}




// $rutinasXml = $model->getRoutinesNeotelXML();


// if(count($rutinasXml)>0){


//     foreach($rutinasXml as $rowRutina){

//         echo  "<h1> Inicio  XML - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 
//         echo  "<b>Iniciando....</b><br>"; 
//         $sinErrores = true;

//         /*
//         * Reviso si la fecha por consumir sea menor a la actual
//         */
//         $rutina =  $model->getRutinaIdNeotel($rowRutina["id_task"]);


//         if ($rutina["start_date"] != date("Y-m-d") && strtotime($rutina["end_date"]) < strtotime(date("Y-m-d H:m:s")) && strtotime(date("Y-m-d H:m:s")) > strtotime(date("Y-m-d") ." 03:00:00")){

//                 $resultCronJob = $model->manageCronjob(1, $rowRutina["id_task"], 1, 1, 1);

//                 if($resultCronJob["vHasBeenUpdated"] == "1"){

//                     $existeDb = $model->tableExists($rowRutina["tabla"]);

//                     $fichero = file_get_contents('./data-mes.xml', true);
//                     $data = simplexml_load_string($fichero);

                
//                     //$data = $model->consumirServicioXML("https://canales.medismart.net/NEOAPI/WEBSERVICE.ASMX?wsdl", array("idTask"=>$rowRutina["id_task"]));

//                     /*
//                     * Reviso si existe tabla del todo  en base de datos
//                     */
//                     if (!$existeDb){
//                         $columns = array();
//                         echo "<br>";
//                         echo "<b>No existe la tabla - Inicia creacion</b>";

//                         /*
//                         * Lleno la variable con la data
//                         */
//                         $dataNeo = $data["TABLA"]["REGISTRO"];

//                         if(is_array($dataNeo)){
//                             foreach($dataNeo[0] as $key => $row ){
//                                 $column = array("title"=>$key);
//                                 array_push($columns, $column);
//                             }
//                             $sinErrores = true; 
//                         }else{
//                             $sinErrores = false; 
//                         }
                        
//                         print_r($columns);

//                         if($sinErrores){
//                             $sqlTabla = $model->createSQLTable($rowRutina["tabla"], $columns);
                    
//                             $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

//                             if(!$estadoCreacion){
//                                 /*
//                                 * Error creando tabla de API
//                                 */
//                                 echo "<br>";
//                                 echo "<b>Tabla - Error creando tabla </b>";
//                                 $sinErrores = false;
//                             }else{
//                                 echo "<br>";
//                                 echo "<b>Tabla - Creada correctamente </b>";
//                                 $sinErrores = true;
//                             }
//                         }
                        
//                     }           
//                     /*
//                     * Lleno la variable con la data
//                     */
//                     $dataNeo = $data["TABLA"]["REGISTRO"];
//                     if(is_array($dataNeo)){
//                         /*
//                         * Reviso columnas de objeto
//                         */
//                         foreach($dataNeo  as $key => $rowColumn ){
//                             $columnaExiste =  $model->revisarColumnaTabla($rowRutina["tabla"], $key);
//                             if($columnaExiste == 0){
//                                 $crearColumna = $model->ejecutarCrearColumnaTabla($rowRutina["tabla"], $key);
//                             }
//                         }

//                         /*
//                         * Guardo linea del objeto
//                         */
//                         $insert =  $model->insertSQLTable($rowRutina["tabla"], $dataNeo, $dataNeo, "1") ;
                
//                         $result =  $model->executeSql($insert);
                
//                         if($result == 0){
//                             echo $insert;
//                         }
//                     }else{
//                         echo  "<br><br><b>Sin datos....</b><br>";  
//                     }
                    
//                     echo  "<br><br><b>Terminado....</b><br>"; 
//                     echo  "<h1> Fin - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 
//                     /*
//                     * Fin del proceso 
//                     */
//                     $resultCronJobRelease = $model->manageCronjob(0, $rowRutina["id_task"], 1, 0, 1);
//             }else{
//                 echo "<br>";
//                 echo "<b>Error otro proceso ya se encuentra procesando la rutina...</b><br>";
//                 echo  "<br><br><b>Terminado....</b><br>"; 
//                 echo  "<h1> Fin - ".$rowRutina["id_task"]." - ".$rowRutina["tabla"]."</h1>"; 
//             }
//         }else{
//             echo "<br>";
//             echo "<b>Error fecha de consulta de rutina no puede ser mayor a la actual... ".$rutina["start_date"] ." - ".$rutina["end_date"]."</b><br>";
//             echo  "<br><br><b>Terminado....</b><br>"; 
//             echo  "<h1> Fin - ".$rutina["id_task"]." - ".$rutina["tabla"]."</h1>"; 
//         } 
//     }
// }else{
//     echo  "<h1> No se encontraron rutinas por procesar XML</h1>"; 
// }
