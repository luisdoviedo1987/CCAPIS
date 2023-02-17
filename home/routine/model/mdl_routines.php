<?php
class mdl_routines { 

    public function __construct(&$db) {

        $this->db = $db;
    }

    function getMetroSignature($public_key ,  $private_key  ,  $prefix , $user_type , $device_id ){   
        $signature = base64_encode(hash_hmac("md5", $user_type.$device_id.gmdate('Y-m-d'),$private_key,true));
        return  $prefix.$public_key.":".$signature;
    }

    public function getCheckRoutineName($table_name){

        $sql =" SELECT * FROM `ro_routine_enc` 
        WHERE `generated_table_name` = :table_name ;";

        $stmt = $this->db->prepare($sql); 
        $stmt->bindParam("table_name", $table_name);

        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs;
    }

    function servicio($url, $headers, $params, $http) {
        try{
                $ch = curl_init();
                $agent =  isset($_SERVER['HTTP_ORIGIN']) ?$_SERVER['HTTP_ORIGIN'] :"localhost";

                curl_setopt($ch, CURLOPT_URL, $url);

                if ($http == "POST") {
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                }elseif ($http == "POST2") {
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                }else{
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $http);
                }

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_ENCODING, '');
                curl_setopt($ch, CURLOPT_MAXREDIRS, 10);        
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
                curl_setopt($ch, CURLOPT_USERAGENT, $agent);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout in seconds
                curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

                $result = curl_exec($ch);
                
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

                if(curl_error($ch)){
                    $result = array("status"=>"ERROR", "msg"=>curl_error($ch), "http_code"=>$http_code);
                    return json_decode(json_encode($result), true);
                    die;
                }
                
                curl_close($ch);

                switch ($http_code) {
                    case '200':
                        $finalresult = array("content"=> json_decode( $result, true),"http_code"=>$http_code);
                        break;
                    default:
                        $finalresult = array("content"=> json_decode($result, true),"http_code"=>$http_code);
                        break;
                }

            return $finalresult;
        }catch(Exception $e){
            var_dump( $e);
            echo $e->get_message();
        }
   
    }


    public function selectOptions($data, $key, $value, $preselect = null, $showFirstLine = null,
                                  $firstOptionText = null, $firstLinevalue = null, $extra = null){
            $options = '';
            if(!is_null($showFirstLine)){
                $options = '<option value="'.$firstLinevalue.'">'.$firstOptionText.'</option>';
            }

            foreach ($data as $row){
                if(is_null($extra)){
                    $extra2 =  '';
                }else{
                    $extra2 =  'is_raw';
                }
                
                if(is_null($preselect)){
                    $options .= '<option value="' . $row[$key] . '" data-extra="'.$extra2.'">' . $row[$value] . '</option>';

                }else{
                    if($preselect == $row[$key]){
                        $options .= '<option value="' . $row[$key] . '" selected data-extra="'. $extra2 .'">' . $row[$value] . '</option>';

                    }else{
                        $options .= '<option value="' . $row[$key] . '" data-extra="'.$extra2 .'">' . $row[$value] . '</option>';
                    }
                }
            }
            return $options;
    }

    public function cleanString($string) {
            $string = trim($string);
            $string = str_replace(
                    array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'), array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'), $string
            );
            $string = str_replace(
                    array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'), array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'), $string
            );
            $string = str_replace(
                    array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'), array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'), $string
            );
            $string = str_replace(
                    array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'), array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'), $string
            );
            $string = str_replace(
                    array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'), array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'), $string
            );
            $string = str_replace(
                    array('ñ', 'Ñ', 'ç', 'Ç'), array('n', 'N', 'c', 'C',), $string
            );

            //Eliminar cualquier caracter extraño
            $string = str_replace(
                    array("\\", "¨", "º", "-", "~",
                "#", "@", "|", "!", "\"",
                "·", "$", "%", "&", "/",
                "(", ")", "?", "'", "¡",
                "¿", "[", "^", "`", "]",
                "+", "}", "{", "¨", "´",
                ">", "< ", ";", ",", ":",
                "."), '', $string
            );

            return str_replace(" ", "_",strtolower($string));
    }

    public function createSQLTable($table_name, $column) {
        $sql ="CREATE table $table_name(
           idRoutine INT( 11 ) AUTO_INCREMENT PRIMARY KEY,";

           foreach($column as $row){
               $sql = $sql . "  ".$this->cleanString($row["title"])." TEXT,";
           }
           $sql = substr($sql, 0, -1);
           $sql = $sql . " , `id_user` int(11) NULL
                           , `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0)
                           , `edited_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0));";

           return $sql;
   }

   public function insertHeaderSQLTable($table_name, $column) {
        $sql =" INSERT INTO ".$table_name."(";
        
           foreach($column as $row){
                $sql = $sql . "  ".$this->cleanString($row["title"])." ,";
           }

           $sql = substr($sql, 0, -1);
           $sql = $sql . ", `id_user`, `created_at`, `edited_at`) VALUES";

           return $sql;
  }

  public function insertSQLTable($generated_table_name,$contentColumns, $data,$id_user) {
        $sql =" INSERT INTO ".$generated_table_name."(";
        $sqlInsert ="( ";
        foreach($contentColumns as $row){
            $sql = $sql . "  ".$this->cleanString($row["title"])." ,";
            if(is_array($data[$row["title"]])){
                $sqlInsert .= "  '".$data[$row["title"]]["label"]." | ".$data[$row["title"]]["value"]."' ,";
            }else{
                $sqlInsert .= "  '".$data[$row["title"]]."' ,";
            }
        }

        $sql = substr($sql, 0, -1);
        $sql = $sql . ", `id_user`, `created_at`, `edited_at`) VALUES";

        $sqlInsert = substr($sqlInsert, 0, -1);
        $sqlInsert = $sqlInsert . ",'$id_user', now(), now()) ;";
        
        return $sql . $sqlInsert;
   }

   public function insertRoutineDetail($id_routine_enc,$id_type_param, $column, $value, $init_value, $is_increment, $quantity_increment, $type_increment){
        
        $sql = "INSERT INTO 
                `ro_routine_detail`(
                `id_routine_detail`, `id_routine_enc` ,`id_type_param`, `key`, `init_value`,
                `value`, `created_at`, `edited_at`, `is_increment`,
                `quantity_increment`, `type_increment`)
            VALUES (
                NULL, :id_routine_enc ,:id_type_param , :column, :init_value,
                :value, now(), now(), :is_increment, 
                :quantity_increment ,:type_increment);";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam("id_routine_enc", $id_routine_enc);
            $stmt->bindParam("id_type_param", $id_type_param);
            $stmt->bindParam("column", $column);
            $stmt->bindParam("value", $value);
            $stmt->bindParam("init_value", $init_value);
            $stmt->bindParam("is_increment", $is_increment);
            $stmt->bindParam("quantity_increment", $quantity_increment);
            $stmt->bindParam("type_increment", $type_increment);

            $stmt->execute();

            $idColumn = $this->db->lastInsertId();

            return $idColumn;
   }

   public function createRoutineJson($id_user, $id_type_routine, $generated_table_name, $sql_create_table, $routine_name, $method, $url, $params, $auth, $headers, $body, $contentColumns, $index, $day, $hour, $minutes, $content , $blue) {

            try {
                $this->db->beginTransaction();

                /*CREAR ENCABEZADO*/
                $sql = "INSERT INTO `ro_routine_enc`
                    (`id_routine_enc`, `id_type_routine`, `id_user` ,`name`, `method`, 
                    `id_body_type`, `generated_table_name`, `url`, `fk_name_value`, 
                    `day_frequency`, `minute_frequency`,`hour_frequency`, `created_at`, 
                    `edited_at` , `index`, `blue`)
                    VALUES (NULL, :id_type_routine, :id_user, UPPER(:name_routine) , :method, 
                    :id_body_type, :generated_table_name, :url, '',
                    :day_frequency, :minute_frequency, :hour_frequency, now(),
                    now(), :index ,  :blue );";

                    $stmt = $this->db->prepare($sql);

                    $stmt->bindParam("id_type_routine", $id_type_routine);
                    $stmt->bindParam("id_user", $id_user);
                    $stmt->bindParam("name_routine", $routine_name);
                    $stmt->bindParam("method", $method);
                    $stmt->bindParam("id_body_type", $body["typeBody"]);
                    $stmt->bindParam("generated_table_name", $generated_table_name);
                    $stmt->bindParam("url", $url);
                    $stmt->bindParam("day_frequency",  $day);
                    $stmt->bindParam("minute_frequency",  $minutes);
                    $stmt->bindParam("hour_frequency",  $hour);
                    $stmt->bindParam("index", $index);
                    $stmt->bindParam("blue", $blue);

                    $stmt->execute();

                    $idRoutine = $this->db->lastInsertId();
                
                        if($idRoutine == 0){
                            $this->db->rollBack();
                            $result = array("msg"=> "Error guardando enc de rutina","error"=>true, "idRoutine"=>0);
                            return $result;
                        }

                        /*CREAR COLUMNAS*/
                        foreach($contentColumns as $row){
                                $column = str_replace(" ", "_",$row["title"]);

                                $idColumn = $this->insertRoutineDetail($idRoutine,5, $column, null, null, 0, 0, 0);
                               
                                if($idColumn == 0){
                                    $this->db->rollBack();
                                    $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                    return $result;
                                    exit;
                                }
                        }

                        /*CREAR PARAMS*/
                        foreach($params as $row){

                            $idColumn = $this->insertRoutineDetail($idRoutine, 2, $row["key"], $row["value"], $row["value"], $row["concurrency"], $row["numberConcurrency"], $row["type"]);


                            if($idColumn == 0){
                                $this->db->rollBack();
                                $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                return $result;
                                exit;
                            }
                    }


                    /*CREAR HEADERS*/
                    foreach($headers as $row){

                            $idColumn = $this->insertRoutineDetail($idRoutine, 1, $row["key"], $row["value"], $row["value"], $row["concurrency"], $row["numberConcurrency"], $row["type"]);

                           
                            if($idColumn == 0){
                                $this->db->rollBack();
                                $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                return $result;
                                exit;
                            }
                    }

                    if(isset($body["inputs"])){
                            foreach($body["inputs"] as $row){
                                if(strlen($row["key"])>0){
                                    $idColumn = $this->insertRoutineDetail($idRoutine, 4, $row["key"], $row["value"], $row["value"], $row["concurrency"], $row["numberConcurrency"], $row["type"]);


                                    if($idColumn == 0){
                                        $this->db->rollBack();
                                        $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                        return $result;
                                        exit;
                                    }
                                }   
                            }
                    }else{
                            if(strlen($body["raw"])>0){
                                $idColumn = $this->insertRoutineDetail($idRoutine, 4, $body["raw"], $row["raw"], $row["raw"], 0, 0, 0);

                                if($idColumn == 0){
                                    $this->db->rollBack();
                                    $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                    return $result;
                                    exit;
                                }
                            }
                    }
                    
                    /*CREAR AUTH*/
                    if(isset($auth["typeAuth"])){
                            switch($auth["typeAuth"]){
                                    case "1":
                                        //AUTH BASIC
                                        $idColumn = $this->insertRoutineDetail($idRoutine, 1, "Authorization","Basic ".base64_encode($auth["username"].":".$auth["userpass"]), "Basic ".base64_encode($auth["username"].":".$auth["userpass"]), 0, 0, 0);
                                        
                                        if($idColumn == 0){
                                            $this->db->rollBack();
                                            $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                            return $result;
                                            exit;
                                        }
                                    break;
                                    case "2";
                                        //Auth Token
                                        $idColumn = $this->insertRoutineDetail($idRoutine, 1, "Authorization","Bearer ".$auth["authToken"], "Bearer ".$auth["authToken"], 0, 0, 0);
                                        
                                        if($idColumn == 0){
                                            $this->db->rollBack();
                                            $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                            return $result;
                                            exit;
                                        }
                                    break;

                                    case "3":
                                        $idColumn = $this->insertRoutineDetail($idRoutine, 1, "Authorization","Bearer ".$auth["barerToken"], "Bearer ".$auth["barerToken"], 0, 0, 0);
                                        
                                        if($idColumn == 0){
                                            $this->db->rollBack();
                                            $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idRoutine"=>0);
                                            return $result;
                                            exit;
                                        }
                                    break;
                            }

                    }
                    

                    /*CREAR TABLA*/
                    try {
                        $this->db->exec($sql_create_table);
                    } catch(PDOException $e) {
                        $this->db->rollBack();
                        $result = array("msg"=> "Error creando tabla dinamica","error"=>true,"idRoutine"=>0);
                        return $result;
                        exit;
                    }

                    /*CREAR HEADER DE INSERT */

                     //     /*CREAR INSERT DINAMICO */
                     foreach($content as $row){
                         try{
                            $sql = $this->insertSQLTable($generated_table_name, $contentColumns, $row,$id_user) ;

                            $stmt = $this->db->prepare($sql);
                            $stmt->execute();

                            $idInsert = $this->db->lastInsertId();

                         }catch(Exception $ex){

                         }
                     }
                    

                    $this->db->commit();
                    $result = array("msg"=> "Operacion completada","error"=>false,"idTrans"=>$idRoutine);
                    return $result;
            
            } catch (Exception $ex) {
                $result = array("msg"=> $ex->getMessage(),"error"=>true,"idTrans"=>0);
                return $result;
            }

   }

    public function getTypesBody(){
        $sql = "SELECT
            glb_type_body.id_body_type, 
            glb_type_body.`name`, 
            glb_type_body.created_at, 
            glb_type_body.edited_at,
            glb_type_body.is_raw
        FROM
            glb_type_body";

        $stmt = $this->db->prepare($sql); 
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }

    public function getQueryParams($params){
        $raw = "";
        foreach($params as $row){
            $raw .= $row["key"]."=".$row["value"]."&";
        }

        if(strlen($raw)>0){
            $raw = substr($raw, 0, -1);
        }
        return $raw;
    }

    public function getHeaderParams($headers){
        $finalHeader = array();
        foreach($headers as $row){
            array_push($finalHeader, $row["key"].":".$row["value"]);
        }
        return $finalHeader;
    }

    public function getBody($typeBody, $body){
        $finalBody = null;

        switch($typeBody){
            case "1":
                //form-data
                $finalBody = array();
                if(isset($body["inputs"])>0){
                    foreach($body["inputs"] as $row){
                        array_push($finalBody, array($row["key"]=>$row["value"]));
                    }
                 }

            break;
            case "2":
                // x-www-form-urlencoded                
                $finalBody = "";
                if(isset($body["inputs"])>0){
                    foreach($body["inputs"] as $row){
                        $finalBody .= $row["key"]."=".$row["value"]."&";
                    }
                }
                if(strlen($finalBody)>0){
                    $finalBody = substr($finalBody, 0, -1);
                }
            break;
            case "3":
                //JSON Raw
                $finalBody = $body["raw"];

            break;
            case "4":
                //XML Raw
                $finalBody = $body["raw"];
            break;
            case "5":
                //JSON
                $json = "{\n";
                if(isset($body["inputs"])>0){
                    foreach($body["inputs"] as $row){
                        $json .= '\"'.$row["key"].'\" : \"'.$row["value"].'\" ,';
                    }
                    $json = substr($json, 0, -1);
                }
                $json .= "\n}";

                $finalBody =  json_encode(json_decode($json));
            break;
        }

        return $finalBody;
    }

    public function getContentInsert($json , $index){
        $jsonlast = preg_replace_callback(
            '~\\\u[a-d0-9]{4}~iu',
                function($found){
                if(json_decode('"'.$found[0].'"')){
                    return $found[0];
                }
                return "";  //or "?"
                },
                $json
        );

        $content =  json_decode($jsonlast , true) ;
        $index = explode("/",$index);
        $dataResult = array();
        
        $result = "";
        for($x = 0; $x < count($index); $x++){
            if($index[$x] != ""){
                if ($result == null){
                    $result = $content[$index[$x]];
                }else{
                    $result = $result[$index[$x]];
                }
            }
        }
        return $result;
    }


    public function testService($http , $url,$auth, $headers, $query, $bodyType ,$body) {

        $agent =  isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : "localhost";

        $finalHeaders = array();
        $finalHeaders = $headers;

         /*CREAR AUTH*/
         if(isset($auth["typeAuth"])){
                switch($auth["typeAuth"]){
                        case "1":
                            //AUTH BASIC                        
                            array_push($finalHeaders,"Authorization: Basic ".base64_encode($auth["username"].":".$auth["userpass"]));
                        break;
                        case "2";
                            //Auth Token
                            array_push($finalHeaders,"Authorization: Bearer ".$auth["authToken"]);
                        break;
                        case "3";
                            //Auth2 Token
                            array_push($finalHeaders,"Authorization: Bearer ".$auth["barerToken"]);
                        break;
                }
        }

        try {
            switch($bodyType){
                case "1":
                    //form-data
                break;
                case "2":
                    // x-www-form-urlencoded
                    array_push($finalHeaders,"Content-Type: application/x-www-form-urlencoded");
                break;
                case "3":
                    //JSON Raw
                    array_push($finalHeaders,"Content-Type: application/json");
                break;
                case "4":
                    //XML Raw
                    array_push($finalHeaders,"Content-Type: application/xml");
                break;
                case "5":
                    //JSON
                    array_push($finalHeaders,"Content-Type: application/json");
                break;
            }

            $request = array(
                CURLOPT_URL => $url."?".$query,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $http,
                CURLOPT_USERAGENT => $agent,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_HTTPHEADER => $finalHeaders,
            );

            if($http != "GET"){
                 array_push($request,array(CURLOPT_POSTFIELDS => $body));
            }
           
            $curl = curl_init();
            curl_setopt_array($curl, $request);

            $result = curl_exec($curl);
            
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if(curl_error($curl)){
                $finalresult =  array("content"=>array(), "status"=>"ERROR", "msg"=>curl_error($curl), "errors" =>array(curl_error($curl)), "http_code"=>$http_code);
                return $finalresult;
                die;
            }
             
            curl_close($curl);

            switch ($http_code) {
                case '200':
                        $jsonlast = preg_replace_callback(
                            '~\\\u[a-d0-9]{4}~iu',
                                function($found){
                                if(json_decode('"'.$found[0].'"')){
                                    return $found[0];
                                }
                                return "";  //or "?"
                                },
                                $result
                        );
                    
                        $jsonFinal = json_decode($jsonlast, true);

                        if(json_last_error_msg() =="No Error" || json_last_error_msg() =="No error" ){
                            $finalresult = array("content"=>$jsonFinal, "msg"=>"Completed", "http_code"=>$http_code);
                        }else{
                            $finalresult = array("content"=>$jsonFinal, "status"=>"ERROR" ,"msg"=>json_last_error_msg() ." |  Response: ".json_encode($result), "http_code"=>300);
                        }
                    break;
                default:
                      $finalresult = array("content"=>$jsonFinal,"status"=>"ERROR", "msg"=>"Error de Comunicacion  WS | HTTP CODE ".$http_code, "http_code"=>$http_code);
                    break;
            }

        } catch (Exception $e) {
            $finalresult = array("content"=>array(),"status"=>"ERROR", "msg"=>$e->getMessage() ." Response: ".json_encode($result), "http_code"=>400);
        }

        return $finalresult;
    }
}