<?php
/**
 * Created by IntelliJ IDEA.
 * User: chanto
 * Date: 13/6/18
 * Time: 09:42
 */

session_start();
$action = isset($_POST["action"]) ? $_POST["action"] : null;

unset($_POST['action']);


switch ($action) {

    case 1:

        /*PROCESO DE LOGOUT DEL USUARIO A NIVEL SESSION PHP*/
        $result = array();
        session_destroy();

        if(!session_id()){
            $result["error"] = false;
            $result["message"] = 'cerrando la session.';
            $result["url"] = '../../sign-in/';
        }else{
            $result["error"] = true;
            $result["message"] = '¡Ha ocurrido un error al cerrar sesion.!.';


        }

        echo json_encode($result);

        break;


    default:




}

