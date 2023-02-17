<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../acceso/index.php';

$option = isset($_POST["action"]) ? $_POST["action"] : null;
unset($_POST['action']);

switch ($option) {
    case 1:
        /*
         * Datatable routines
         */

        include '../../_connect/database/params.php';

        $table = 'view_routine_enc';
        $primaryKey = 'id_routine_enc';

        $columns = array(
            array('db' => 'id_routine_enc', 'dt' => 0),
            array('db' => 'name', 'dt' => 1),
            array('db' => 'name_type_routine', 'dt' => 2),
            array('db' => 'day_frequency', 'dt' => 3),
            array('db' => 'hour_frequency', 'dt' => 4),
            array('db' => 'minute_frequency', 'dt' => 5),
            array('db' => 'last_run_at', 'dt' => 6),
            array('db' => 'namefull_user', 'dt' => 7),
            array('db' => 'status', 'dt' => 8),
            array('db' => 'status', 'dt' => 9),
            array('db' => 'id_type_routine', 'dt' => 10),

        );

        require('ssp.php');

        $conn = array("db_host" => $db_host, "db_user" => $db_user, "db_pass" => $db_pass, "db_name" => $db_name);

        $dt = SSP::complex($_POST, $conn, $table, $primaryKey, $columns, null, array("status <> 3"));

        echo json_encode(
                $dt
        );
        
            
        break;

      case 2:
        /* Update datos */
        require '../../_connect/database/PDOConnection.php';
        $pdo = PDOConnection::instance();
        $db = $pdo->getConnection();
        
        require './model/mdl_routines_list.php';
        $model = new mdl_routines_list($db);

        $res = $model->udpateRoutine($_POST["name"], $_POST["day_frequency"], $_POST["minute_frequency"], $_POST["hour_frequency"], $_POST["id_routine_enc"], $_POST["status"]);
       
        if($res>0){
            echo json_encode(array("error" => false ,"mensaje"=> "Rutina actualizada correctamente"));
        }else{
            echo json_encode(array("error" => true ,"mensaje"=> "Error actualizando rutina"));
        }
                    
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
         
        $smarty->display("list.tpl");

}









