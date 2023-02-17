<?php

class mdl_report {

    public function __construct(&$db) {

        $this->db = $db;
    }

    function getRoutineList() {
        try {
            $sql = "SELECT
                        *
                    FROM
                        view_routine_enc
                    WHERE
                        `status` = '1'";

            $stmt = $this->db->prepare($sql);
           
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $ex) {
            return null;
        }
    }

    function getRoutineInfo($pIdRoutine) {
        try {
    
             $result = [];
             $sql = "CALL `pr_routine_info`(
                            :pIdRoutine ,
                            @p1 ,
                            @p2)";
    
             $stmt = $this->db->prepare($sql);
             $stmt->bindParam("pIdRoutine", $pIdRoutine);
    
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
     
     public function getDataTable($table , $start_date , $final_date){

        $sql = "SELECT * 
                FROM $table
                 WHERE `created_at` BETWEEN '$start_date' AND '$final_date';";

        $stmt = $this->db->prepare($sql); 
     
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }

}
