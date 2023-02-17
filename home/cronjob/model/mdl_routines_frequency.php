<?php
class mdl_routines_frequency { 

    public function __construct(&$db) {

        $this->db = $db;
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

    public function getRoutinesToRefresh(){

        $sql =" SELECT * FROM (SELECT
                    ro_routine_enc.id_routine_enc, 
                    ro_routine_enc.`name`, 
                    ro_routine_enc.day_frequency, 
                    ro_routine_enc.hour_frequency, 
                    ro_routine_enc.minute_frequency, 
                    ro_routine_enc.method, 
                    ro_routine_enc.id_body_type, 
                    ro_routine_enc.generated_table_name, 
                    ro_routine_enc.url,
                    ro_routine_enc.last_run_at,
                    IFNULL(
                        ro_routine_enc.last_run_at,
                    ro_routine_enc.created_at) AS date, 
                    DATE_ADD(
                        DATE_ADD(
                            DATE_ADD(
                                IFNULL(
                                    ro_routine_enc.last_run_at,
                                ro_routine_enc.created_at),
                                INTERVAL ro_routine_enc.day_frequency DAY 
                            ),
                            INTERVAL ro_routine_enc.hour_frequency HOUR 
                        ),
                        INTERVAL ro_routine_enc.minute_frequency MINUTE 
                    ) AS final_date,
                    ro_routine_enc.processing
                FROM
                    ro_routine_enc
                WHERE
                    `status` = 1 AND id_type_routine =1 AND ro_routine_enc.processing = 0 AND blue = 0) t 
                    WHERE  now() > final_date ;";

        $stmt = $this->db->prepare($sql); 

        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs;
    }

    public function updateProcessingRutine($id_routine_enc){
        try {
            $sql = "UPDATE `ro_routine_enc` SET  `processing` = 1 , edited_at = now()  WHERE `id_routine_enc` = :id_routine_enc;";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("id_routine_enc", $id_routine_enc);
          
            $stmt->execute();
            
            return $stmt->rowCount();

        } catch (Exception $ex) {
            return null;
        }
    } 


    public function unlockBlockedRutines(){
        try {
            $sql = "UPDATE `ro_routine_enc` SET  `processing` = 0 WHERE `processing` = 1 AND TIMESTAMPDIFF(MINUTE,edited_at,now()) > 30";

            $stmt = $this->db->prepare($sql);          
            $stmt->execute();
        
            return $stmt->rowCount();
        } catch (Exception $ex) {
            return null;
        }
    } 

    public function callRoutine($idRoutine){
        try {
    
                $result = [];
                $sql = "CALL `pr_routine_web_info`(
                            :pIdRoutine ,
                            @p1 ,
                            @p2)";
    
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam("pIdRoutine", $idRoutine);
    
                $stmt->execute();
    
                $count  = 1;
                while ($stmt->columnCount()) {
                    $data =  $count == 1 ?  $stmt->fetch() : $stmt->fetchAll();
                    $result["rowSets"][$count] = $data ;
                    $stmt->nextRowset();
                    $count++;
    
                }
            
                $stmt->closeCursor();
                $result["result"] = $this->db->query("SELECT  @p1 AS error, @p2 AS  message;")->fetch();
    
                return $result;

            } catch (Exception $ex) {
                print_r($ex); die;
                return null;
            }
            
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
            $sql = $sql . "  ".$this->cleanString($row["key"])." ,";
            $sqlInsert .= "  '".$data[$row["key"]]."' ,";
        }

        $sql = substr($sql, 0, -1);
        $sql = $sql . ", `id_user`, `created_at`, `edited_at`) VALUES";

        $sqlInsert = substr($sqlInsert, 0, -1);
        $sqlInsert = $sqlInsert . ",'$id_user', now(), now()) ;";
        
        return $sql . $sqlInsert;
   }

   public function insertRoutineDetail($id_routine_enc,$id_type_param, $column, $value, $init_value, $is_increment, $quantity_increment){
        
        $sql = "INSERT INTO 
                `ro_routine_detail`(
                `id_routine_detail`, `id_routine_enc` ,`id_type_param`, `key`, `init_value`,
                `value`, `created_at`, `edited_at`, `is_increment`,
                `quantity_increment`)
            VALUES (
                NULL, :id_routine_enc ,:id_type_param , :column, :init_value,
                :value, now(), now(), :is_increment, 
                :quantity_increment);";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam("id_routine_enc", $id_routine_enc);
            $stmt->bindParam("id_type_param", $id_type_param);
            $stmt->bindParam("column", $column);
            $stmt->bindParam("value", $value);
            $stmt->bindParam("init_value", $init_value);
            $stmt->bindParam("is_increment", $is_increment);
            $stmt->bindParam("quantity_increment", $quantity_increment);

            $stmt->execute();

            $idColumn = $this->db->lastInsertId();

            return $idColumn;

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

    public function updateIncrementValue($id_routine_detail , $value_inc){
        try {
            $sql = "UPDATE `ro_routine_detail` SET `value` = :value_inc, `edited_at` = now() WHERE `id_routine_detail` = :id_routine_detail;";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("id_routine_detail", $id_routine_detail);
            $stmt->bindParam("value_inc", $value_inc);
            
            $stmt->execute();
            
            return $stmt->rowCount();

        } catch (Exception $ex) {
            return null;
        }
    }  

    public function updateIncrementDateValue($id_routine_detail, $horas){
        try {
            $sql = "UPDATE `ro_routine_detail` SET `value` = (`value` + `quantity_increment`), `edited_at` = now() WHERE `id_routine_detail` = :id_routine_detail;";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("id_routine_detail", $id_routine_detail);
          
            $stmt->execute();
            
            return $stmt->rowCount();

        } catch (Exception $ex) {
            return null;
        }
    }


    public function updateLastRunRoutine($id_routine_enc , $last_response , $processing){
        try {
            $sql = "UPDATE `ro_routine_enc` 
                    SET  `last_run_at` = now() , 
                    last_response =:last_response , 
                    processing = :processing 
                    WHERE `id_routine_enc` = :id_routine_enc;";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("id_routine_enc", $id_routine_enc);
            $stmt->bindParam("last_response", $last_response);
            $stmt->bindParam("processing", $processing);

            $stmt->execute();
            
            return $stmt->rowCount();

        } catch (Exception $ex) {
            return null;
        }
    } 

    public function getQueryParams($params){        
        $raw = "";
        foreach($params as $row){
            if($row["is_increment"] =="0"){
                $raw .= $row["key"]."=".$row["value"]."&";
            }else{
                $this->updateIncrementValue($row["id_routine_detail"],$row["value"]);
                $raw .= $row["key"]."=".$row["value"]."&";
            }
        }

        if(strlen($raw)>0){
            $raw = substr($raw, 0, -1);
        }
        return $raw;
    }

    public function getHeaderParams($headers){
        $finalHeader = array();
        foreach($headers as $row){
            if($row["is_increment"] == "0"){
                array_push($finalHeader, $row["key"].":".$row["value"]);
            }else{
                $this->updateIncrementValue($row["id_routine_detail"],$row["value"]);
                array_push($finalHeader, $row["key"].":".$row["value"]);
            }
        }
        return $finalHeader;
    }

    public function getBody($typeBody, $body){
        $finalBody = null;

        switch($typeBody){
            case "1":
                //form-data
                $finalBody = array();
                if(count($body)>0){
                    foreach($body as $row){
                        if($row["is_increment"] =="0"){
                            array_push($finalBody, array($row["key"]=>$row["value"]));
                        }else{
                            $this->updateIncrementValue($row["id_routine_detail"],$row["value"]);
                            array_push($finalBody, array($row["key"]=>$row["value"]));
                        }
                    }
                 }

            break;
            case "2":
                // x-www-form-urlencoded                
                $finalBody = "";
                if(isset($body)>0){
                    foreach($body as $row){
                        if($row["is_increment"] =="0"){
                            $finalBody .= $row["key"]."=".$row["value"]."&";
                        }else{
                            $this->updateIncrementValue($row["id_routine_detail"],$row["value"]);
                            $finalBody .= $row["key"]."=".$row["value"]."&";
                        }
                    }
                }
                if(strlen($finalBody)>0){
                    $finalBody = substr($finalBody, 0, -1);
                }
            break;
            case "3":
                //JSON Raw
                $finalBody = $body[0]["value"];

            break;
            case "4":
                //XML Raw
                $finalBody = $body[0]["value"];
            break;
            case "5":
                //JSON
                $json = "{\n";
                if(isset($body)>0){
                    foreach($body as $row){
                        if($row["is_increment"] =="0"){
                            $json .= '\"'.$row["key"].'\" : \"'.$row["value"].'\" ,';
                        }else{
                            $this->updateIncrementValue($row["id_routine_detail"], $row["value"]);
                            $json .= '\"'.$row["key"].'\" : \"'.$row["value"].'\" ,';
                        }

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

        $content =  json_decode($jsonlast, true) ;
        $index = explode("/",$index);
        $dataResult = array();
        
        if(is_array($content)){
            return $content;
        }elseif($index[0]!=""){
              $result = "";
              foreach($index as $row){
                  if($result==""){
                    $result = $content[$row];
                  }else{
                    $result = $result[0][$row];
                  }
              }
              return $result;
        }else{
           return $content;
        }
        return $dataResult;
    }

    function clean($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     
        return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
     }


    public function runService($routineParams  ,$routineHeader , $routineBody , $http , $url , $routine , $columns) {

        try {

                $this->db->beginTransaction();

                //Load query Parameters
                $queryParams = $this->getQueryParams($routineParams);

                //Load header Parameters
                $headersParams = $this->getHeaderParams($routineHeader);

                //Load body Parameters
                $finalBody = $this->getBody($routine["id_body_type"],  $routineBody);


                $agent =  isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : "localhost";

                $finalHeaders = array();
                $finalHeaders = $headersParams;

                try {
                    switch($routine["id_body_type"]){
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
                        CURLOPT_URL => $url."?".$queryParams,
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
                        array_push($request,array(CURLOPT_POSTFIELDS =>  $finalBody));
                    }
                
                    $curl = curl_init();
                    curl_setopt_array($curl, $request);

                    $result = curl_exec($curl);
                    
                    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

                    if(curl_error($curl)){
                        $finalresult =  array("content"=>array(), "error"=>true, "msg"=>curl_error($curl), "errors" =>array(curl_error($curl)), "http_code"=>$http_code);
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

                                $finalresult = array("content"=>json_decode($jsonlast,true), "msg"=>"Completed", "http_code"=>$http_code);

                               // echo $jsonlast;
                                var_dump(json_last_error_msg());
                                echo "<br>";

                                try{

                                        $content = $this->getContentInsert($result, $routine["index"]);
                                        
                                        foreach($content as $row){
                                            try{
                                                $sql = $this->insertSQLTable($routine["generated_table_name"], $columns, $row, 1);
                                                $stmt = $this->db->prepare($sql);
                                                $stmt->execute();
                    
                                                $idInsert = $this->db->lastInsertId();
                    
                                            }catch(Exception $e){

                                            }                            
                                        }

                                        $lastRun = $this->updateLastRunRoutine($routine["id_routine_enc"], json_encode($result), 0);
                                        if($lastRun == 0){
                                            $this->db->rollBack();
                                            $result = array("msg"=> "Error actualizando fecha ultima ejecucion","error"=>true);
                                            return $result;
                                        }

                                        $this->db->commit();
                                        $result = array("msg"=> "Operacion completada","error"=>false);
                                        return $result;

                            }catch(Exception $e){
                               
                                $lastRun = $this->updateLastRunRoutine($routine["id_routine_enc"], $result, 0);
                                if($lastRun == 0){
                                    $this->db->rollBack();
                                    $result = array("msg"=> "Error actualizando fecha ultima ejecucion","error"=>true);
                                    return $result;
                                }

                                $this->db->commit();
                                $result = array("msg"=> "Error de comunicacion con el servicio WEB as","error"=>false);
                                return $result;

                            }  
                            
            
                            break;
                        default:
                                echo $http_code;
                                $this->db->rollBack();

                                $lastRun = $this->updateLastRunRoutine($routine["id_routine_enc"], $result, 0);
                                if($lastRun == 0){
                                    $this->db->rollBack();
                                    $result = array("msg"=> "Error actualizando fecha ultima ejecucion","error"=>true);
                                    return $result;
                                }

                                $this->db->commit();
                                $result = array("msg"=> "Error de comunicacion con el servicio WEB as","error"=>false);
                                return $result;
                        
                            break;
                    }

                } catch (Exception $e) {
                    $result = array("msg"=> "Error de comunicacion con el servicio WEB |".$e->getMessage(),"error"=>true);

                    $lastRun = $this->updateLastRunRoutine($routine["id_routine_enc"], json_encode($result), 0);
                    if($lastRun == 0){
                        $this->db->rollBack();
                        $result = array("msg"=> "Error actualizando fecha ultima ejecucion","error"=>true);
                        return $result;
                    }

                    $this->db->commit();
                    return $result;

                }

        } catch (Exception $ex) {
            $this->db->rollBack();

            $lastRun = $this->updateLastRunRoutine($routine["id_routine_enc"], json_encode($result), 0);
            if($lastRun == 0){
                $this->db->rollBack();
                $result = array("msg"=> "Error actualizando fecha ultima ejecucion","error"=>true);
                return $result;
            }

            $result = array("msg"=> $ex->getMessage(),"error"=>true);
            return $result;
        }
    }
}