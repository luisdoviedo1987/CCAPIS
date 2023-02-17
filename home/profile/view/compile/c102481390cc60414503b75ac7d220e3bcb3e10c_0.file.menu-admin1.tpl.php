<?php /* Smarty version 3.1.27, created on 2018-06-09 18:04:28
         compiled from "/usr/share/nginx/html/tpl/menu-admin1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18997071855b1c6b0c4c8759_60629033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c102481390cc60414503b75ac7d220e3bcb3e10c' => 
    array (
      0 => '/usr/share/nginx/html/tpl/menu-admin1.tpl',
      1 => 1528587457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18997071855b1c6b0c4c8759_60629033',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b1c6b0c4c9108_82004019',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b1c6b0c4c9108_82004019')) {
function content_5b1c6b0c4c9108_82004019 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18997071855b1c6b0c4c8759_60629033';
?>
<div id="controls">
    <aside id="leftmenu">
        <div id="leftmenu-wrap">
            <div class="panel-group slim-scroll" role="tablist">
                <div class="panel panel-default">
                    <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                            <!--  NAVIGATION Content -->
                            <ul id="navigation">
                                <li class="active open">
                                    <a href="../home/">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="../sesion/">
                                        <i class="fa fa-arrow-right"></i>
                                        <span>Sesiones</span>
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-list"></i>
                                        <span>Configuracion</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="../categories/">
                                            <i class="fa fa-angle-right"></i> Partes del cuerpo</a>
                                        </li>
                                        <li>
                                            <a href="../exercise/">
                                            <i class="fa fa-angle-right"></i> Ejercicios</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                            <!--/ NAVIGATION Content -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </aside>
</div><?php }
}
?>