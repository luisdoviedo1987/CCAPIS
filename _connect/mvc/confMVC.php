<?php

include_once '../resources/libs/smarty/libs/Smarty.class.php';

class confMVC extends Smarty{
    
    public function __construct() {
        parent::__construct();
        
        
        $this->template_dir="";
        $this->compile_dir="";
        $this->config_dir="../_connect/mvc";
         $this->allow_php_templates = TRUE;
        
    }
    
    
    
    function setModule($modulo){
        
       
        $this->template_dir="../$modulo/view";
        $this->compile_dir="../$modulo/view/compile";

        
    }
    
    
}


?>
