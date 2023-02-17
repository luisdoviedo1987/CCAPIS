<?php

if(isset($_GET["blue"])){
    require 'control/ctrl_routineblue.php';
}else{
    require 'control/ctrl_routine.php';
}
