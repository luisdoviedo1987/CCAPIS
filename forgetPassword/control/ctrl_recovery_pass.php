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
		
            require_once './Auth.php';
            $auth = new Auth();

            try {
                require '../_connect/database/PDOConnection.php';
                $pdo = PDOConnection::instance();
                $db = $pdo->getConnection();

                require './model/mdl_forget_password.php';
                $accion = new mdl_forget_password($db);

                $jwt_token = $auth->GetData($_POST["token-user"]);

                $update = $accion->updatePasswordUser($jwt_token["id_user"] , $_POST["pass-user"]);

                if($update > 0){
                    $result["error"] = false;
                    $result["mensaje"] = 'Su contraseña ha sido actualizada!';

                    echo json_encode($result);
                }else{
                    $result["error"] = true;
                    $result["mensaje"] = 'Ocurrio un error actualizando su contraseña';

                    echo json_encode($result);
                }
            } catch (Exception $e) {
                $result["error"] = true;
                $result["mensaje"] = 'Lo sentimos ocurrio el link ya se encuentra vencido';

                echo json_encode($result);
            }
            
        break;
        
        default:

            $token = $_GET["hash"];

            require_once './Auth.php';
            $auth = new Auth();

            try {

                $jwt_token = $auth->GetData( $token);
                               
                require '../_connect/mvc/confMVC.php';
            
                $smarty = new confMVC();
                $smarty->setModule("forgetPassword");
                $smarty->assign("version", $container['version-js']);
                $smarty->assign("nombre_usuario", $jwt_token["namefull_user"]);
                $smarty->assign("id_usuario", $jwt_token["id_user"]);
                $smarty->assign("token_usuario", $token);
                $smarty->assign("appName", $container['appName']);


                $smarty->display("recovery-password.tpl");

            } catch (Exception $e) {
                require '../_connect/mvc/confMVC.php';

                $smarty = new confMVC();
                $smarty->setModule("forgetPassword");
                $smarty->assign("version", $container['version-js']);
                $smarty->assign("appName", $container['appName']);

                $smarty->display("token-expired-password.tpl");
            }
     
    }


    

