<?php
class mdl_routines_list { 

    public function __construct(&$db) {

        $this->db = $db;
    }


    public function udpateRoutine($name, $day_frequency, $minute_frequency, $hour_frequency, $id_routine_enc , $idstatus){
        
        $sql = "UPDATE `ro_routine_enc` 
                SET  `name` = :name,
                     `day_frequency` = :day_frequency, 
                     `minute_frequency` = :minute_frequency, 
                     `hour_frequency` = :hour_frequency, 
                     `edited_at` = now(), 
                     `status` = :status 
                     WHERE `id_routine_enc` = :id_routine_enc;";

        $stmt = $this->db->prepare($sql); 
        $stmt->bindParam("name", $name);
        $stmt->bindParam("day_frequency", $day_frequency);
        $stmt->bindParam("minute_frequency", $minute_frequency);
        $stmt->bindParam("hour_frequency", $hour_frequency);
        $stmt->bindParam("id_routine_enc", $id_routine_enc);
        $stmt->bindParam("status", $idstatus);

        $stmt->execute();
            
        return $stmt->rowCount();

    }
   
}