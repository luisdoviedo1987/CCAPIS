<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../acceso/index.php';



$option = isset($_POST["action"]) ? $_POST["action"] : null;
unset($_POST['action']);

switch ($option) {
    case 1:
        /*Carga de informacion */

        /*
         * Datatable Usuario
         */

        include '../../_connect/database/params.php';

        $table = 'sec_users';
        $primaryKey = 'id_user';

        $columns = array(
            array('db' => 'id_user', 'dt' => 0),
            array('db' => 'id_rol', 'dt' => 1),
            array('db' => 'cli_user', 'dt' => 2),
            array('db' => 'ced_user', 'dt' => 3),
            array('db' => 'namefull_user', 'dt' => 4),
            array('db' => 'email', 'dt' => 5),
            array('db' => 'phone_user', 'dt' => 6),
            array('db' => 'created_at', 'dt' => 7),
            array('db' => 'modified_at', 'dt' => 8),
            array('db' => 'status_user', 'dt' => 9),
            array('db' => 'phone_user', 'dt' => 10)

        );

        require('ssp.php');

        $conn = array("db_host" => $db_host, "db_user" => $db_user, "db_pass" => $db_pass, "db_name" => $db_name);

        $dt = SSP::complex($_POST, $conn, $table, $primaryKey, $columns, null, array("status_user <> '3'"));

        echo json_encode(
                $dt
        );

        break;

        case 2:
         	// Update info cliente
            require '../../_connect/database/PDOConnection.php';

            $pdo = PDOConnection::instance();
            $db = $pdo->getConnection();

            require 'model/mdl_home.php';
            $accion = new mdl_home($db);
    

            $result = $accion->updateInfoUsuario($_POST["idRol"], $_POST["cliUser"], $_POST["cedUser"], $_POST["nameFullUser"], $_POST["emailUser"], $_POST["phoneUser"], $_POST["statusUser"], $_POST["idUser"]);

            if($result >0){
                echo json_encode(array("status"=>"SUCCESS"));

            }else{
                echo json_encode(array("status"=>"SUCCESS","msg"=>"Ocurrio un error actualizando informacion del usuario"));

            }

      	break;

        case 3:
            // crear cliente 
           require '../../_connect/database/PDOConnection.php';
           
           $pdo = PDOConnection::instance();
           $db = $pdo->getConnection();

           require 'model/mdl_home.php';
           $accion = new mdl_home($db);
   
           $result = $accion->crearUsuario($_POST["idRol"], $_POST["cedUser"], $_POST["nameFullUser"], $_POST["emailUser"], $_POST["phoneUser"], $_POST["pass"]);

           if($result >0){
               echo json_encode(array("status"=>"SUCCESS"));
           }else{
               echo json_encode(array("status"=>"SUCCESS","msg"=>"Ocurrio un error actualizando informacion del usuario"));
           }

         break;
    default:

		require '../../_connect/database/PDOConnection.php';

		$pdo = PDOConnection::instance();
		$db = $pdo->getConnection();

		require 'model/mdl_home.php';
		$accion = new mdl_home($db);
   
		$roles = $accion->getRolUser();
		$sRoles="";
		foreach ($roles  as $row) {
            $sRoles .='<option value="'.$row["id_rol"].'">'.$row["name"].'</option>';
        }

        require '../../_connect/mvc/confMVC2.php';
        $smarty = new confMVC();
        $smarty->setModule("users");
        $container = include_once('../../global/settings.php');

        $smarty->assign("name_user", $_SESSION["vName"]);
        $smarty->assign("version", $container['version-js']);
        $smarty->assign("roles", $sRoles);

        $footer = $smarty->fetch("../../tpl/footer.tpl");
        $smarty->assign("footer", $footer);

        $smarty->assign("permisos", $_SESSION["vRol"]);
        $menu = $smarty->fetch("../../tpl/menu-user.tpl");
        $smarty->assign("menu", $menu);

        $smarty->display("home.tpl");

}









