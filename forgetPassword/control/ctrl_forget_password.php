<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';


session_start();

$container = include_once('../global/settings.php');

 $option = isset($_POST["action"]) ? $_POST["action"] : null;
    unset($_POST['action']);

    switch ($option) {
        case 1:
			
            $email_user = $_POST["email_user"] ;
            
            require '../_connect/database/PDOConnection.php';
            $pdo = PDOConnection::instance();
            $db = $pdo->getConnection();


            require './model/mdl_forget_password.php';
            $accion = new mdl_forget_password($db);

            require_once './Auth.php';
            $auth = new Auth();

            $user = $accion->checkEmailExist($email_user);

            if ($user != null) {

               $jwt_token = $auth->SignIn([
               					"id_user"=>$user["id_user"],
                                "namefull_user" => $user["namefull_user"],
                                "email" =>  $user["email"],
                                "cli_user" =>  $user["cli_user"]
                                ]);

                
            	$html =  $accion->crearCuerpoCorreo($user["namefull_user"] , $jwt_token  );

	            $mailconfig =[
				    "host"=>"mail.smtp2go.com",
				    "encryption"=>"ssl",
				    "port"=>465,
				    "username"=>"info@medismart.net",
				    "password"=>"bHV5M3lsMXdoMzAw",
				    "from-mail-mask"=>"info@medismart.net",
				    "mail-mask"=>"no-reply"
				];

            	$send = $accion->sendEmailForgetPassword($mailconfig, "Solicitud para restablecer la contraseña ", array($user["email"] =>$user["namefull_user"]), $html) ;

            	if($send >0){
            			$result["error"] = false;
               			$result["mensaje"] = 'Hemos enviado la restauracion de contraseña al email del usuario';

               			echo json_encode($result);
            	}else{
            			$result["error"] = true;
                		$result["mensaje"] = 'Lo sentimos ocurrio un error enviando el correo de restauracion de contraseña';

                		echo json_encode($result);
            	}

            }else{
                $result["error"] = true;
                $result["mensaje"] = 'Lo sentimos no encontramos el email no se encuentra registrado';

                echo json_encode($result);
            } 
           

            
        break;
        
        default:
            require '../_connect/mvc/confMVC.php';
            
            $smarty = new confMVC();
            $smarty->setModule("forgetPassword");
            $smarty->assign("version", $container['version-js']);
            $smarty->assign("appName", $container['appName']);

            $smarty->display("forget-password.tpl");
    }


    

