<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../acceso/index.php';



$option = isset($_POST["action"]) ? $_POST["action"] : null;
unset($_POST['action']);

switch ($option) {
    case 1:

    break;

    case 2:
  
    break;

    default:

		require '../../_connect/database/PDOConnection.php';

		$pdo = PDOConnection::instance();
		$db = $pdo->getConnection();

		require 'model/mdl_report.php';
		$accion = new mdl_report($db);
   
        $spRoutines="";
        $routines =  $accion->getRoutineList();
        foreach($routines as $row ){
            $spRoutines .= "<option value='".$row["id_routine_enc"]."'>".$row["name"]." </option>";
        }

        require '../../_connect/mvc/confMVC2.php';
        $smarty = new confMVC();
        $smarty->setModule("report");
        $container = include_once('../../global/settings.php');

        $smarty->assign("name_user", $_SESSION["vName"]);
        $smarty->assign("version", $container['version-js']);
        $smarty->assign("appName", $container['appName']);
        $smarty->assign("routines", $spRoutines);

        $footer = $smarty->fetch("../../tpl/footer.tpl");
        $smarty->assign("footer", $footer);

        $smarty->assign("permisos", $_SESSION["vRol"]);
        $menu = $smarty->fetch("../../tpl/menu-user.tpl");
        $smarty->assign("menu", $menu);

        $smarty->display("report.tpl");

}
