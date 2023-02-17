<?php

class mdl_signin {

    public function __construct(&$db) {

        $this->db = $db;
    }


    function loginLocalUser($usuario, $pass, $ip) {

        try {
            $sql = "CALL `pr_login_user`(:vUsername, :vPassword , :vIP , @p3 ,@p4, @p5, @p6, @p7, @p8, @p9, @p10, @p11, @p12, @p13);";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("vUsername", $usuario);
            $stmt->bindParam("vPassword", $pass);
            $stmt->bindParam("vIP", $ip);
            $stmt->execute();
            $stmt->closeCursor();

            $result = $this->db->query("SELECT @p3 as vStatus, @p4 as vCode, @p5 as vMsg, @p6 as vIdUser, @p7 as vCli, @p8 as vCed, @p9 as vName, @p10 as vMail, @p11 as vStatusUser, @p12 as vPass, @p13 as vRol")->fetch();

            return $result;
        } catch (Exception $ex) {
            return null;
        }
    }

}
