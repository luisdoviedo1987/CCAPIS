<?php
class mdl_routines_frequency { 

    public function __construct(&$db) {

        $this->db = $db;
    }

    public function consumirServicio($wsdl_url, $params) {
        try {
            $arrContextOptions=array("ssl"=>array( "verify_peer"=>false, "verify_peer_name"=>false,'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT));
            $options = array(
                    'connection_timeout' => 900,
                    'soap_version'=>SOAP_1_1,
                    'exceptions'=>true,
                    'trace'=>1,
                    'cache_wsdl'=>WSDL_CACHE_NONE,
                    'stream_cotext' => stream_context_create($arrContextOptions)
            );

            $client = new \SOAPClient($wsdl_url,$options);
                        
            $return = $client->ExecuteTask02($params);
    
            return json_decode(json_encode($return), true);
            
        } catch (Exception $e) {
            return array("ExecuteTask02Result" => "");
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


  public function insertSQLTable($generated_table_name,$contentColumns, $data,$id_user) {
        $sql =" INSERT INTO ".$generated_table_name."(";
        $sqlInsert ="( ";
        foreach($contentColumns as $row => $key){
            $sql = $sql . "  `".$row."` ,";
            $sqlInsert .= "  '".$key."' ,";
        }

        $sql = substr($sql, 0, -1);
        $sql = $sql . ", `id_user`, `created_at`, `edited_at`) VALUES";

        $sqlInsert = substr($sqlInsert, 0, -1);
        $sqlInsert = $sqlInsert . ",'$id_user', now(), now()) ;";
        
        return $sql . $sqlInsert;
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
}