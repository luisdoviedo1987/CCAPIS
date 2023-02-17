<?php

if (!isset($_SESSION["vCli"]) || !isset($_SESSION["vName"]) ) {
    session_destroy();
    header("Location: ../../sign-in/?exp");
    die;
} else {
       

    if ((isset($_SESSION["mantenerLogin"]))) {
        $inactivo = $_SESSION["mantenerLogin"];
    } else {
        $inactivo = 3600; // 1 Hora de session
    }

    if (isset($_SESSION['tiempo'])) {
        $vida_session = time() - $_SESSION['tiempo'];
        if ($vida_session > $inactivo) {
            session_destroy();
            header("Location: ../../sign-in/?exp");
            die;
        }
    }

    $_SESSION['tiempo'] = time();

    $timeZone = 'America/Costa_Rica';  // GMT-6
    date_default_timezone_set($timeZone);

}