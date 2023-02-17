<?php

use \Firebase\JWT\JWT;

class mdl_forget_password {

    public function __construct(&$db) {

        $this->db = $db;
    }

      function checkEmailExist($vMail) {

        try {
            $sql = "SELECT id_user ,namefull_user, email, cli_user FROM sec_users WHERE email=:email AND status_user <> '3' ";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("email", $vMail);
        
            $stmt->execute();

            $data = $stmt->fetch();

            return $data;

        } catch (Exception $ex) {
            return null;
        }
    }

    function updatePasswordUser($idUser , $password) {

        try {
            $sql = "UPDATE `sec_users` 
                    SET  `password` = PASSWORD(:pass), 
                    `modified_at` = now()
                    WHERE `id_user` = :id_user";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam("pass", $password);
            $stmt->bindParam("id_user", $idUser);

            $stmt->execute();

            $data = $stmt->rowCount();

            return $data;

        } catch (Exception $ex) {
            return null;
        }
    }


     function sendEmailForgetPassword($mailConfig, $asunto, $destinatarios, $cuerpo) {
        try{
         
                
              $transport = (new Swift_SmtpTransport($mailConfig["host"], $mailConfig["port"], $mailConfig["encryption"]))
                ->setUsername($mailConfig["username"])
                ->setPassword($mailConfig["password"]);

                $mailer = new Swift_Mailer($transport);

              // Create a message
              $message = (new Swift_Message($asunto))
                ->setFrom(array($mailConfig["from-mail-mask"] => $mailConfig["mail-mask"]))
                ->setTo($destinatarios)
                ->setBody($cuerpo, 'text/html');
              $message->setPriority(2);

             $result =  $mailer->send($message);

            return $result; 
        }catch(Exception $e){
                return $e->getMessage();
        }catch(Exception $e){
                return $e->getMessage();
        }  
    }


    public function crearCuerpoCorreo($nombre ,$token ){
        
      $template = file_get_contents(__DIR__ . '/template_email.html');

      $html = $template;
      $html = preg_replace("/{NOMBRE_USUARIO}/", $nombre , $html);
      $html = preg_replace("/{TOKEN_USUARIO}/", $token, $html);

      return $html;

    }  

   
}
