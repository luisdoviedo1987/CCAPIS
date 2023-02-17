<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../acceso/index.php';

require '../../_connect/database/PDOConnection.php';
$pdo = PDOConnection::instance();
$db = $pdo->getConnection();

require './model/mdl_routines.php';
$model = new mdl_routines($db);

$option =  isset($_POST["action"]) ? $_POST["action"] : null;
//unset($_POST['action']);

switch ($option) {
    case 1:
        /*Carga de informacion */ 
        $result =  $model->getTypesBody();
        echo json_encode($result);

        break;

      case 2:
        /*Carga de informacion propia */
        print_r($_POST);
                    
        break;


    default: 
        require '../../_connect/mvc/confMVC2.php';
        $smarty = new confMVC();
        $smarty->setModule("routine");
        $container = include_once('../../global/settings.php'); 

        $smarty->assign("name_user", $_SESSION["vName"]);
        $smarty->assign("version", $container['version-js']);
        $smarty->assign("appName", $container['appName']);

        $footer = $smarty->fetch("../../tpl/footer.tpl");
        $smarty->assign("footer", $footer);
  
        $smarty->assign("permisos", $_SESSION["vRol"]);
        $menu = $smarty->fetch("../../tpl/menu-user.tpl");
        $smarty->assign("menu", $menu);
         
        $smarty->display("create.tpl");

}









