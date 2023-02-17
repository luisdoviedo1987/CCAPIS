<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$container = include_once('../global/settings.php');

if (isset($_GET["exp"])) {
    session_destroy();
    session_start();

    echo"<script type=\"text/javascript\">alert('Lo sentimos su sesión ha expirado por favor ingrese de nuevo! ');</script>";

    $msjcuerpo = '<div class="alert alert-danger"><center>Su sesión ha expirado! </center></div>';

    require '../_connect/mvc/confMVC.php';

    $smarty = new confMVC();
    $smarty->setModule("sign-in");
    $smarty->assign("mensaje", $msjcuerpo);
    $smarty->assign("appName", $container['appName']);
    $smarty->assign("version", $container['version-js']);

    $smarty->display("login.tpl");

} else if (isset($_GET["ip"])) {

    session_destroy();
    session_start();

    echo"<script type=\"text/javascript\">alert('Se detecto un cambio de dirección IP en su sesión por favor ingrese de nuevo! ');</script>";

    $msjcuerpo = '<div class="alert alert-warning"><center>Se detecto un cambio de dirección IP en su sesión por favor ingrese de nuevo!</center></div>';

    require '../_connect/mvc/confMVC.php';

    $smarty = new confMVC();
    $smarty->setModule("sign-in");
    $smarty->assign("mensaje", $msjcuerpo);
    $smarty->assign("appName", $container['appName']);
    $smarty->assign("version", $container['version-js']);

    $smarty->display("login.tpl");

} else {

    $option = isset($_POST["action"]) ? $_POST["action"] : null;
    unset($_POST['action']);

    switch ($option) {
        case 1:

            require '../_connect/database/PDOConnection.php';
            $pdo = PDOConnection::instance();
            $db = $pdo->getConnection();

            require './model/mdl_signin.php';
            $accion = new mdl_signin($db);

            $user = $accion->loginLocalUser($_POST["username"], $_POST["password"], $ip);

            if ($user != null) {

                if($user["vStatus"]=="SUCCESS"){

                        if ($_POST['remenber'] == true ) {
                             $_SESSION["mantenerLogin"] = 14400; // 4 Horas de session
                        }

                        $_SESSION["vIdUser"] = $user["vIdUser"];
                        $_SESSION["vCli"] = $user["vCli"];
                        $_SESSION["vName"] = $user["vName"];
                        $_SESSION["vCed"] = $user["vCed"];
                        $_SESSION["vRol"] = $user["vRol"];

                        $result["url"] = '../home/';
                        $result["error"] = false;
                        $result["mensaje"] = 'Bienvenido! por favor espere...';
                    
                }else{
                    $result["url"] = '../user/';
                    $result["error"] = true;
                    $result["mensaje"] = $user["vMsg"];
                }
            }else{
                $result["url"] = '../user/';
                $result["error"] = true;
                $result["mensaje"] = 'No se pudo procesar su solicitud por favor intente de nuevo!';
            }

            echo json_encode($result);
        break;

        default:
            require '../_connect/mvc/confMVC.php';
            
            $smarty = new confMVC();
            $smarty->setModule("sign-in");
            $smarty->assign("mensaje", "");
            $smarty->assign("appName", $container['appName']);
            $smarty->assign("version", $container['version-js']);

            $smarty->display("login.tpl");
    }
}

    

