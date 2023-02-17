<?php

class mdl_home {

    public function __construct(&$db) {

        $this->db = $db;
    }

    function getRolUser() {
        try {
            $sql = "SELECT id_rol, name FROM `sec_rol` WHERE status='1'";

            $stmt = $this->db->prepare($sql);
           
            $stmt->execute();
            
             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $ex) {
            return null;
        }
    }

    function crearUsuario($id_rol, $ced_user, $namefull_user, $email, $phone_user, $passwordtext) {
        try {
            $sql = "INSERT INTO `sec_users`(`id_user`, `id_rol`, `cli_user`, 
            `ced_user`, `namefull_user`, `email`, 
            `phone_user`, `password`, `created_at`, 
            `modified_at`, `status_user`)
             VALUES (NULL, :id_rol, '',
              :ced_user, :namefull_user, :email,
              :phone_user, PASSWORD(:passwordtext),now(), 
               now(), 1);";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("id_rol", $id_rol);
            $stmt->bindParam("ced_user", $ced_user);
            $stmt->bindParam("namefull_user", $namefull_user);
            $stmt->bindParam("email", $email);
            $stmt->bindParam("phone_user", $phone_user);
            $stmt->bindParam("passwordtext", $passwordtext);

            $stmt->execute();
            
            $idInsert = $this->db->lastInsertId();

            return $idInsert;
        } catch (Exception $ex) {
            return null;
        }
    }

    function updateInfoUsuario($id_rol, $cli_user, $ced_user, $namefull_user, $email, $phone_user, $status_user, $id_user){

        try {
            $sql = "UPDATE `sec_users` SET `id_rol` = :id_rol, `cli_user` = :cli_user, `ced_user` = :ced_user, `namefull_user` = :namefull_user, `email` = :email, `phone_user` = :phone_user,  `status_user` = :status_user WHERE `id_user` = :id_user;";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("id_rol", $id_rol);
            $stmt->bindParam("cli_user", $cli_user);
            $stmt->bindParam("ced_user", $ced_user);
            $stmt->bindParam("namefull_user", $namefull_user);
            $stmt->bindParam("email", $email);
            $stmt->bindParam("phone_user", $phone_user);
            $stmt->bindParam("status_user", $status_user);
            $stmt->bindParam("id_user", $id_user);

            $stmt->execute();
            
            return $stmt->rowCount();

        } catch (Exception $ex) {
            return null;
        }
    }  
}
