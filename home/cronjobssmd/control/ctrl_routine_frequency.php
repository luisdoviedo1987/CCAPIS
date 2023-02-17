<?php

session_start();

error_reporting(E_ALL);
set_time_limit(0);
ini_set('max_execution_time', 0);
ini_set('display_errors', 1);
ini_set('memory_limit', '-1');

ini_set('default_socket_timeout', 5000);


require '../../_connectsmd/database/PDOConnection.php';

$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require './model/mdl_routines_frequency.php';
$model = new mdl_routines_frequency($db);


try {
	echo "<h1>--- INICIO --- Obtener informacion SMD ---</h1>";

	echo "<h2>--- Bloqueando Servicio ---</h2>";


	$resultCronJob = $model->manageCronjob(1, 1, 0, 1, 1);


    if($resultCronJob["vHasBeenUpdated"] == "1"){

        echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        echo "<h2>--- Obteniendo Monitorings ---</h2>";

        $monitoringRun = true;
        $tableName = "monitorings_smd";
        $urlNext = "http://api-smd.kenwin.net/monitorings";
        $sinErrores = true;
        while($monitoringRun){
            
            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    
            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }

            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }

        }
       

        echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        $monitoring =   $model->getMonitoringPendingInfo();

        foreach($monitoring as $rowData){
            echo "<h2>--- Obteniendo  Detalle Monitorings ". $rowData["id"]." ---</h2>";

            $monitoringRun = true;
            $tableName = "monitorings_detail_smd";
            $urlNext = "http://api-smd.kenwin.net/monitoring-details/".$rowData["id"]."/";
            $sinErrores = true;
            while($monitoringRun){

                echo $urlNext."<br>";

                $headers = array(
                    "Authorization: Bearer ".$tokenResult["body"]["access"]
                );
                $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
                
                $body = $monitoring["body"];
        

                $existeDb = $model->tableExists($tableName) ;

                if (!$existeDb){
                    $columns = array();
                    echo "<br>";
                    echo "<b>No existe la tabla - Inicia creacion</b>";

                    foreach($body["results"][0] as $key => $row ){
                        $column = array("title"=>$key);
                        array_push($columns, $column);
                    }

                    $sqlTabla = $model->createSQLTable($tableName, $columns);
                                
                    $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                    if(!$estadoCreacion){
                        echo "<br>";
                        echo "<b>Tabla - Error creando tabla </b>";
                        $sinErrores = false;
                    }else{
                        echo "<br>";
                        echo "<b>Tabla - Creada correctamente </b>";
                    }
                }

                if($sinErrores){

                        echo "<br>";
                        echo "<b>Inicia  - Insercion de informacion </b>";


                        foreach($body["results"] as $key => $row ){
                            /*
                            * Reviso columnas de objeto
                            */
                            foreach($row  as $key => $rowColumn ){
                                $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                                if($columnaExiste == 0){
                                    $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                                
                                }
                            }

                            /*
                            * Guardo linea del objeto
                            */
                            $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                    
                            $result =  $model->executeSql($insert);
                    
                            if($result == 0){
                                echo $insert;
                            }
                        }

                
                        if($body["next"] == null){
                            $monitoringRun = false;
                        }else{
                            $urlNext = $body["next"];
                        }

                        $update = $model->updateMonitoring($rowData["id"]);
                        echo $update;
                        
                }else{

                    echo "<br>";
                    echo "<b>Se encontro un error para continuar </b>";
                    $sinErrores = false;
                    $monitoringRun = false;
                }

            }
        }

         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];


        echo "<h2>--- Obteniendo Forms ---</h2>";

        $monitoringRun = true;
        $tableName = "forms_smd";
        $urlNext = "http://api-smd.kenwin.net/forms";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    

            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }

            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }

        }

         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        $forms =  $model->getFormPendingInfo();

        foreach($forms as $rowData){

            echo "<h2>--- Obteniendo Detalle form ". $rowData["id"]." ---</h2>";

            $monitoringRun = true;
            $tableName = "forms_detail_smd";
            $urlNext = "http://api-smd.kenwin.net/form-details/".$rowData["id"]."/";
            $sinErrores = true;
            while($monitoringRun){
    
                echo $urlNext."<br>";

                $headers = array(
                    "Authorization: Bearer ".$tokenResult["body"]["access"]
                );
                $formdetail = $model->consumirServicioGET($urlNext, array() , $headers); 
                
                $body = $formdetail["body"];
        
                $existeDb = $model->tableExists($tableName) ;

                if (!$existeDb){
                    $columns = array();
                    echo "<br>";
                    echo "<b>No existe la tabla - Inicia creacion</b>";

                    foreach($body["results"][0] as $key => $row ){
                        $column = array("title"=>$key);
                        array_push($columns, $column);
                    }

                    $sqlTabla = $model->createSQLTable($tableName, $columns);
                                
                    $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                    if(!$estadoCreacion){
                        echo "<br>";
                        echo "<b>Tabla - Error creando tabla </b>";
                        $sinErrores = false;
                    }else{
                        echo "<br>";
                        echo "<b>Tabla - Creada correctamente </b>";
                    }
                }

                if($sinErrores){

                        echo "<br>";
                        echo "<b>Inicia  - Insercion de informacion </b>";


                        foreach($body["results"] as $key => $row ){
                            /*
                            * Reviso columnas de objeto
                            */
                            foreach($row  as $key => $rowColumn ){
                                $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                                if($columnaExiste == 0){
                                    $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                                
                                }
                            }

                            /*
                            * Guardo linea del objeto
                            */
                            $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                    
                            $result =  $model->executeSql($insert);
                    
                            if($result == 0){
                                echo $insert;
                            }
                        }

                
                        if($body["next"] == null){
                            $monitoringRun = false;
                        }else{
                            $urlNext = $body["next"];
                        }

                        $update = $model->updateFormDetail($rowData["id"]);

                        echo $update;
                }else{

                    echo "<br>";
                    echo "<b>Se encontro un error para continuar </b>";
                    $sinErrores = false;
                    $monitoringRun = false;
                }

            }
        }

         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        echo "<h2>--- Obteniendo Calibration ---</h2>";

        $monitoringRun = true;
        $tableName = "calibration_smd";
        $urlNext = "http://api-smd.kenwin.net/calibration";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    
            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }

            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }
        }


         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        $forms =  $model->getCalibrationPendingInfo();

        foreach($forms as $rowData){

            echo "<h2>--- Obteniendo Detalle Calibration ". $rowData["id"]." ---</h2>";

            $monitoringRun = true;
            $tableName = "calibration_detail_smd";
            $urlNext = "http://api-smd.kenwin.net/calibration-detail/".$rowData["id"]."/";
            $sinErrores = true;
            while($monitoringRun){

                echo $urlNext."<br>";

                $headers = array(
                    "Authorization: Bearer ".$tokenResult["body"]["access"]
                );
                $formdetail = $model->consumirServicioGET($urlNext, array() , $headers); 
                
                $body = $formdetail["body"];
        
                $existeDb = $model->tableExists($tableName) ;

                if (!$existeDb){
                    $columns = array();
                    echo "<br>";
                    echo "<b>No existe la tabla - Inicia creacion</b>";

                    foreach($body["results"][0] as $key => $row ){
                        $column = array("title"=>$key);
                        array_push($columns, $column);
                    }

                    $sqlTabla = $model->createSQLTable($tableName, $columns);
                                
                    $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                    if(!$estadoCreacion){
                        echo "<br>";
                        echo "<b>Tabla - Error creando tabla </b>";
                        $sinErrores = false;
                    }else{
                        echo "<br>";
                        echo "<b>Tabla - Creada correctamente </b>";
                    }
                }

                if($sinErrores){

                        echo "<br>";
                        echo "<b>Inicia  - Insercion de informacion </b>";


                        foreach($body["results"] as $key => $row ){
                            /*
                            * Reviso columnas de objeto
                            */
                            foreach($row  as $key => $rowColumn ){
                                $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                                if($columnaExiste == 0){
                                    $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                                
                                }
                            }

                            /*
                            * Guardo linea del objeto
                            */
                            $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                    
                            $result =  $model->executeSql($insert);
                    
                            if($result == 0){
                                echo $insert;
                            }
                        }

                        if($body["next"] == null){
                            $monitoringRun = false;
                        }else{
                            $urlNext = $body["next"];
                        }

                        $update = $model->updateCalibrationDetail($rowData["id"]);

                        echo $update;
                }else{

                    echo "<br>";
                    echo "<b>Se encontro un error para continuar </b>";
                    $sinErrores = false;
                    $monitoringRun = false;
                }

            }
        }


         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        echo "<h2>--- Obteniendo Calibration Type ---</h2>";

        $monitoringRun = true;
        $tableName = "calibration_types_smd";
        $urlNext = "http://api-smd.kenwin.net/calibration-types";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    

            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }
            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }
        }

         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        echo "<h2>--- Obteniendo Calibration Transaction ---</h2>";

        $monitoringRun = true;
        $tableName = "calibration_transaction_smd";
        $urlNext = "http://api-smd.kenwin.net/calibration-transaction";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    

            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }
            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }
        }

         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];

        echo "<h2>--- Obteniendo Calibration Session ---</h2>";

        $monitoringRun = true;
        $tableName = "calibration_session_smd";
        $urlNext = "http://api-smd.kenwin.net/calibration-session";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    

            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }
            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }
        }


        echo "<h2>--- Obteniendo Business Intelligence Answer ---</h2>";

        $monitoringRun = true;
        $tableName = "business_intelligence_answer_smd";
        $urlNext = "http://api-smd.kenwin.net/business-intelligence-answers";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    

            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }

            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }
        }


         echo "<h2>--- Obteniendo token ---</h2>";
        echo "<br>";
        $tokenResult = $model->getAccessToken();
        echo "Token :". $tokenResult["body"]["access"];


        echo "<h2>--- Obteniendo Users ---</h2>";

        $monitoringRun = true;
        $tableName = "users_smd";
        $urlNext = "http://api-smd.kenwin.net/smd-users/";
        $sinErrores = true;
        while($monitoringRun){

            echo $urlNext."<br>";

            $headers = array(
                "Authorization: Bearer ".$tokenResult["body"]["access"]
            );
            $monitoring = $model->consumirServicioGET($urlNext, array() , $headers); 
            
            $body = $monitoring["body"];
    

            $existeDb = $model->tableExists($tableName) ;

            if (!$existeDb){
                $columns = array();
                echo "<br>";
                echo "<b>No existe la tabla - Inicia creacion</b>";

                foreach($body["results"][0] as $key => $row ){
                    $column = array("title"=>$key);
                    array_push($columns, $column);
                }

                $sqlTabla = $model->createSQLTable($tableName, $columns);
                            
                $estadoCreacion = $model->ejecutarCrearTabla($sqlTabla);

                if(!$estadoCreacion){
                    echo "<br>";
                    echo "<b>Tabla - Error creando tabla </b>";
                    $sinErrores = false;
                }else{
                    echo "<br>";
                    echo "<b>Tabla - Creada correctamente </b>";
                }
            }

            if($sinErrores){

                    echo "<br>";
                    echo "<b>Inicia  - Insercion de informacion </b>";


                    foreach($body["results"] as $key => $row ){
                        /*
                        * Reviso columnas de objeto
                        */
                        foreach($row  as $key => $rowColumn ){
                            $columnaExiste =  $model->revisarColumnaTabla($tableName, $key);
                            if($columnaExiste == 0){
                                $crearColumna = $model->ejecutarCrearColumnaTabla($tableName, $key);
                            
                            }
                        }

                        /*
                        * Guardo linea del objeto
                        */
                        $insert =  $model->insertSQLTable($tableName, $row , $body["results"][0], "1") ;
                
                        $result =  $model->executeSql($insert);
                
                        if($result == 0){
                            echo $insert;
                        }
                    }

            
                    if($body["next"] == null){
                        $monitoringRun = false;
                    }else{
                        $urlNext = $body["next"];
                    }

            }else{

                echo "<br>";
                echo "<b>Se encontro un error para continuar </b>";
                $sinErrores = false;
                $monitoringRun = false;
            }
        }

    
        $resultCronJobRealese = $model->manageCronjob(0, 1, 1, 0, 1);


    }else{
        echo "<br>";
        echo "<b>Error otro proceso ya se encuentra procesando la rutina...</b><br>";
        echo  "<br><br><b>Terminado....</b><br>"; 
    }


	echo "<h1>FIN PROCESO </h1>";

	 
}catch(Exception $e){ 
    echo 'Caught exception: ',  $e->getMessage(), "\n";
	$resultCronJobRealese = $model->manageCronjob(0, 1, 0, 1, 1);
}
