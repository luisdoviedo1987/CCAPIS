<?php

class mdl_routines_frequency { 

    public function __construct(&$db) {

        $this->db = $db;
    }

    function resetRutinaError($id_task){
        
        $sql ="UPDATE `system_cron_jobs`
         SET `start_date` = DATE_ADD( `start_date`, INTERVAL -1 DAY), `end_date` = DATE_ADD( `end_date`, INTERVAL -1 DAY)
          WHERE `id_task` = :id_task;";

        $stmt = $this->db->prepare($sql); 
        $stmt->bindParam("id_task", $id_task);

        $stmt->execute();

        return $rs;
    }

    function tableExists($table) {
        try {
            $sql ="SELECT * FROM $table LIMIT 1;";

            $stmt = $this->db->prepare($sql); 

            $stmt->execute();
            $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return true;
       
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function createSQLTable($table_name, $column) {
        $sql ="CREATE table $table_name(
           id_data INT( 11 ) AUTO_INCREMENT PRIMARY KEY,";

           foreach($column as $row){
               $sql = $sql . "  ".str_replace("-","",str_replace(" ", "_", $row["title"])) ." TEXT,";
           }
           $sql = substr($sql, 0, -1);
           $sql = $sql . " , `id_user` int(11) NULL
                           , `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0)
                           , `edited_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0));";

           return $sql;
   }

   public function ejecutarCrearTabla($tabla){
        try {
            $this->db->exec($tabla);
            return true;
        } catch(Exception $e) {
            echo 'Connection : ' . $e->getMessage();
            return false;
        }
        return false;
   }

   public function ejecutarCrearColumnaTabla($tabla , $columna){
        try {
            $sql ="ALTER TABLE `$tabla` 
                        ADD COLUMN `".str_replace("-","",str_replace(" ", "_", $columna))."` text";

            $this->db->exec($sql);
            return true;
        } catch(Exception $e) {
            echo 'Connection : ' . $e->getMessage();
            return false;
        }
        return false;
    }

   public function revisarColumnaTabla($tabla , $columna) {      
        $query  = $this->db->prepare("SHOW COLUMNS FROM `$tabla` LIKE '".str_replace("-","",str_replace(" ", "_", $columna))."'");  
        try{            
            $query->execute();                                          
                if($query->fetchColumn()) { 
                    return 1;
                }else{
                    return 0;
                }
        }catch(Exception $e){
            echo 'Connection : ' . $e->getMessage();
            return 0;
        }     
    }

    public function manageCronjob($vAction, $VIdCronJob, $vStatus, $vNewStatus, $vCommit){

        $result = []; 

        try {
            $sql = "CALL `pr_manage_cron_job`(:vAction, :VIdCronJob,:vStatus, :vNewStatus,
                            :vCommit, @p5, @p6, @p7, @p8);";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("vAction", $vAction);
            $stmt->bindParam("VIdCronJob", $VIdCronJob);
            $stmt->bindParam("vStatus", $vStatus);  
            $stmt->bindParam("vNewStatus", $vNewStatus);   
            $stmt->bindParam("vCommit", $vCommit);
            $stmt->execute(); 
            $stmt->closeCursor(); 
            $result = $this->db->query("SELECT @p5 as vStartDate, @p6 as vEndDate, @p7 as vHasBeenUpdated, @p8 as vMsg;")->fetch();

            return $result;
        } catch (Exception $ex) { 
            var_dump($ex); die;
            return null;
        }   
    }


    public function manageCronjobReview($vAction, $VIdCronJob, $vStatus, $vNewStatus, $vCommit){

        $result = []; 

        try {
            $sql = "CALL `pr_manage_cron_job_review`(:vAction, :VIdCronJob,:vStatus, :vNewStatus,
                            :vCommit, @p5, @p6, @p7, @p8);";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("vAction", $vAction);
            $stmt->bindParam("VIdCronJob", $VIdCronJob);
            $stmt->bindParam("vStatus", $vStatus);  
            $stmt->bindParam("vNewStatus", $vNewStatus);   
            $stmt->bindParam("vCommit", $vCommit);
            $stmt->execute(); 
            $stmt->closeCursor(); 
            $result = $this->db->query("SELECT @p5 as vStartDate, @p6 as vEndDate, @p7 as vHasBeenUpdated, @p8 as vMsg;")->fetch();

            return $result;
        } catch (Exception $ex) { 
            var_dump($ex); die;
            return null;
        }   
    }

    public function getRoutinesNeotelXML(){

        $sql ="SELECT * FROM `system_cron_jobs` WHERE `status` = '1' AND `format` ='xml';";

        $stmt = $this->db->prepare($sql); 

        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs;
    }
    

    public function getRoutinesNeotelJson(){

        $sql ="SELECT * FROM `system_cron_jobs` WHERE `status` = '1' AND `format` ='json';";

        $stmt = $this->db->prepare($sql); 

        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs;
    }

    public function getRoutinesNeotelReviewJson(){

        $sql ="SELECT
                    system_cron_jobs.id_cron_job, 
                    system_cron_jobs.`name`, 
                    system_cron_jobs.wsdl, 
                    system_cron_jobs.id_task, 
                    DATE_SUB(system_cron_jobs.start_date, INTERVAL 1 DAY) as start_date, 
                    DATE_SUB(system_cron_jobs.end_date, INTERVAL 1 DAY) as end_date, 
                    system_cron_jobs.tabla, 
                    system_cron_jobs.created_at, 
                    system_cron_jobs.updated_at, 
                    system_cron_jobs.`status`, 
                    system_cron_jobs.ejecucion, 
                    system_cron_jobs.date_format, 
                    system_cron_jobs.format, 
                    system_cron_jobs.status_review, 
                    system_cron_jobs.days_review, 
                    system_cron_jobs.primary_key_review, 
                    system_cron_jobs.ejecucion_review, 
                    system_cron_jobs.date_last_review
                FROM
                    system_cron_jobs
                WHERE
                    status_review = '1' AND
                    format = 'json';";

        $stmt = $this->db->prepare($sql); 

        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs;
    }

    public function getRutinaIdNeotel($id_task){

        $sql ="SELECT
                    id_cron_job, 
                    `name`, 
                    wsdl, 
                    id_task, 
                    DATE(DATE_ADD( start_date, INTERVAL 1 DAY)) as start_date ,
                    DATE(DATE_ADD( end_date, INTERVAL 1 DAY)) as end_date,
                    tabla, 
                    `status`, 
                    ejecucion, 
                    date_format
                FROM
                    system_cron_jobs
                WHERE
                    id_task  = :id_task  ;";

        $stmt = $this->db->prepare($sql); 
        $stmt->bindParam("id_task", $id_task);

        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);

        return $rs;
    }

    public function getRutinaIdNeotelReview($id_task , $days){

        $sql ="SELECT
                    id_cron_job, 
                    `name`, 
                    wsdl, 
                    id_task, 
                    DATE(DATE_ADD( start_date, INTERVAL -".$days." DAY)) as start_date ,
                    DATE(DATE_ADD( end_date, INTERVAL 1 DAY)) as end_date,
                    tabla, 
                    `status_review`, 
                    ejecucion_review, 
                    date_format,
                    DATE(date_last_review) as date_last_review
                FROM
                    system_cron_jobs
                WHERE
                    id_task  = :id_task  ;";

        $stmt = $this->db->prepare($sql); 
        $stmt->bindParam("id_task", $id_task);

        $stmt->execute();
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);

        return $rs;
    }


    public function consumirServicio($wsdl_url, $params) {
        try {
            $arrContextOptions=array(
                'http' =>
                     array(
                        "timeout" => 5000,
                    ),
                "ssl"=>
                    array(
                    "verify_peer"=>false, 
                    "verify_peer_name"=>false,
                    'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT)
                );
            $options = array(
                    'trace' => true, 
                    'keep_alive' => true,
                    'connection_timeout' => 5000,
                    'compression'   => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | SOAP_COMPRESSION_DEFLATE,
                    'soap_version'=>SOAP_1_1,
                    'exceptions'=>true,
                    'cache_wsdl'=>WSDL_CACHE_NONE,
                    'stream_cotext' => stream_context_create($arrContextOptions)
            );

            $client = new \SOAPClient($wsdl_url,$options);
                        
            $return = $client->ExecuteTask02($params);
    
            return json_decode(json_encode($return), true);
            
        } catch (Exception $e) {
            echo $e->getMessage();
            return array("ExecuteTask02Result" => "" , "error"=>true , "msg"=> $e->getMessage());
        }
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

        return str_replace(" ", "_",$string);
    }

   public function updateSQLTable($generated_table_name, $contentColumns, $data, $id_user , $primary) {
        $sql =" UPDATE ".$generated_table_name." SET ";
        $sqlUpdate =" ";
        foreach($contentColumns as $row => $key){
            if($primary == str_replace("-","",str_replace(" ", "_", $row))){
                $valueFkUpdate = str_replace("'","",str_replace("`", "", $key));
            }
            $sql = $sql . "  `".str_replace("-","",str_replace(" ", "_", $row))."` = '".str_replace("'","",str_replace("`", "", $key))."',";
        }

        $sql = $sql . " edited_at = now() WHERE `".$primary."` = '".$valueFkUpdate."' LIMIT 1";

        return $sql ;
   }

  public function insertSQLTable($generated_table_name, $contentColumns, $data, $id_user) {
        $sql =" INSERT INTO ".$generated_table_name."(";
        $sqlInsert ="( ";
        foreach($contentColumns as $row => $key){
            $sql = $sql . "  `".str_replace("-","",str_replace(" ", "_", $row))."` ,";
            $sqlInsert .= "  '".str_replace("'","",str_replace("`", "", $key))."' ,";
        }

        $sql = substr($sql, 0, -1);
        $sql = $sql . ", `id_user`, `created_at`, `edited_at`) VALUES";

        $sqlInsert = substr($sqlInsert, 0, -1);
        $sqlInsert = $sqlInsert . ",'$id_user', now(), now()) ;";
        
        return $sql . $sqlInsert;
   }
   
   public function executeUpdateSql($sql){
    try{
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $update = $stmt->rowCount();

        return $update;
    }catch(Exception $e){
        return 0;
    }    
}

   public function executeSql($sql){
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $idInsert = $this->db->lastInsertId();

            return $idInsert;
        }catch(Exception $e){
            return 0;
        }    
   }

   public function consumirServicioXML($wsdl_url,$params) {
        try {
            $arrContextOptions=array("ssl"=>array( "verify_peer"=>false, "verify_peer_name"=>false,'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT));
            $options = array(
                'encoding' => 'UTF-8',
                'verifypeer' => false,
                'verifyhost' => false,
                'soap_version' => SOAP_1_2,
                'trace' => 1,
                'exceptions' => 1,
                'connection_timeout' => 180,
            );

            $client = new \SOAPClient($wsdl_url,$options);        
            $result = $client->ExecuteTask00($params);

            return json_decode(json_encode((array)simplexml_load_string($result->ExecuteTask00Result)),true);

        } catch (Exception $e) {
            return  array("error"=> true, "any"=>$e->getMessage());
        }
    }
}