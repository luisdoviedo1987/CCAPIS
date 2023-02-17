<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../acceso/index.php';


$option = isset($_POST["action"]) ? $_POST["action"] : null;
unset($_POST['action']);

switch ($option) {
    default:
        require '../../_connect/mvc/confMVC2.php';
        $smarty = new confMVC();
        $smarty->setModule("profile");
        $container = include_once('../../global/settings.php');

        $smarty->assign("name_user", $_SESSION["vName"]);
        $smarty->assign("version", $container['version-js']);
        
        $footer = $smarty->fetch("../../tpl/footer.tpl");
        $smarty->assign("footer", $footer);

        $smarty->assign("permisos", $_SESSION["vRol"]);
        $menu = $smarty->fetch("../../tpl/menu-user.tpl");
        $smarty->assign("menu", $menu);

        $smarty->display("profile.tpl");

}









