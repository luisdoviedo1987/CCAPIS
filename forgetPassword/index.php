<?php

if(isset($_GET["hash"])){
	require 'control/ctrl_recovery_pass.php';
}else{
	require 'control/ctrl_forget_password.php';
}
