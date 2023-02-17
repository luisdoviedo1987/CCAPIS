<?php

class mdl_routine_file {

    public function __construct(&$db) {

        $this->db = $db;
    }
    
    function cleanString($string) {
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


    function createSQLTable($table_name, $column) {

         $sql ="CREATE table $table_name(
            id_routine INT( 11 ) AUTO_INCREMENT PRIMARY KEY,";

            for($x =0; $x < count($column) ; $x++){
                $sql = $sql . "  ".str_replace(" ", "_",$column[$x])." VARCHAR( 500 ),";
            }

            $sql = substr($sql, 0, -1);
            $sql = $sql . " , `id_user` int(11) NULL
                            , `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0)
                            , `edited_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0));";

            return $sql;
    }

    function insertHeaderSQLTable($table_name, $column) {

        $sql =" INSERT INTO ".$table_name."(";
            for($x =0; $x < count($column) ; $x++){
                $sql .= "  ".str_replace(" ", "_",$column[$x])." ,";
            }
            $sql = substr($sql, 0, -1);
            $sql = $sql . ", `id_user`, `created_at`, `edited_at`) VALUES";

            return $sql;
   }

   function insertValuesSQLTable($values, $id_user) {
        
        $sql ="(";
            for($x =0; $x < count($values) ; $x++){
                $sql .= "  '".$values[$x]."' ,";
            }
            $sql = substr($sql, 0, -1);
            $sql = $sql . ",'$id_user', now(), now()) ;";
            return $sql;
    }


    function createRoutineFile($id_user, $id_type_routine, $name_routine , $fk_name_value , $generated_table_name, $columns , $data ,  $sql_create_table) {
        try {
            $this->db->beginTransaction();

            /*CREAR ENCABEZADO*/

            $sql = "INSERT INTO `ro_routine_enc`
                (`id_routine_enc`, `id_type_routine`, `id_user` ,`name`, `method`, 
                `id_body_type`, `generated_table_name`, `url`, `fk_name_value`, 
                `day_frequency`, `minute_frequency`,`hour_frequency`, `created_at`, 
                `edited_at`)
                VALUES (NULL, :id_type_routine, :id_user, :name_routine , NULL, 
                NULL, :generated_table_name, NULL, :fk_name_value,
                 0, 0, 0, now(),
                  now());";

                $stmt = $this->db->prepare($sql);

                $stmt->bindParam("id_user", $id_user);
                $stmt->bindParam("id_type_routine", $id_type_routine);
                $stmt->bindParam("name_routine", $name_routine);
                $stmt->bindParam("generated_table_name", $generated_table_name);
                $stmt->bindParam("fk_name_value",  $fk_name_value);

                $stmt->execute();

                $idRoutine = $this->db->lastInsertId();
            
                if($idRoutine == 0){
                    $this->db->rollBack();
                    $result = array("msg"=> "Error guardando enc de rutina","error"=>true,"idTrans"=>0);
                    return $result;
                }

                /*CREAR COLUMNAS*/
                for ($x =0 ;  $x < count($columns) ;$x++ ) {

                    $column = str_replace(" ", "_",$columns[$x]);

                    $sql = "INSERT INTO 
                                `ro_routine_detail`(
                                `id_routine_detail`, `id_routine_enc` ,`id_type_param`, `key`,
                                `value`, `created_at`, `edited_at`, `is_increment`,
                                `quantity_increment`)
                            VALUES (
                                NULL, :id_routine_enc ,5, :column, 
                                NULL, now(), now(),
                                0, 0);";
    
                    $stmt = $this->db->prepare($sql);
    
                    $stmt->bindParam("column", $column);
                    $stmt->bindParam("id_routine_enc", $idRoutine);
    
                    $stmt->execute();
    
                    $idColumn = $this->db->lastInsertId();

                    if($idColumn == 0){
                        $this->db->rollBack();
                        $result = array("msg"=> "Error guardando columna de rutina","error"=>true,"idTrans"=>0);
                        return $result;
                        exit;
                    }
                }

                /*CREAR TABLA*/
                try {
                    $this->db->exec($sql_create_table);
                } catch(PDOException $e) {
                    $this->db->rollBack();
                    $result = array("msg"=> "Error creando tabla dinamica","error"=>true,"idTrans"=>0);
                    return $result;
                    exit;
                }

                /*CREAR HEADER DE INSERT */
               $insertHeader =  $this->insertHeaderSQLTable($generated_table_name, $columns) ;

                /*CREAR INSERT DINAMICO */
                foreach($data as $rowData){                    
                    $sql = $insertHeader .$this->insertValuesSQLTable($rowData, $id_user) ;

                    $stmt = $this->db->prepare($sql);
                    $stmt->execute();
    
                    $idInsert = $this->db->lastInsertId();

                    if($idInsert == 0){
                        $this->db->rollBack();
                        $result = array("msg"=> "Error guardando informacion del archivo","error"=>true,"idTrans"=>0);
                        return $result;
                        exit;
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


    
}
