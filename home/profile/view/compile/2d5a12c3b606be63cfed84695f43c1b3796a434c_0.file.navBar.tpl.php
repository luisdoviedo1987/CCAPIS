<?php /* Smarty version 3.1.27, created on 2018-06-20 23:07:53
         compiled from "/usr/share/nginx/html/tpl/navBar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7470420235b2b32a96ab369_84531346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d5a12c3b606be63cfed84695f43c1b3796a434c' => 
    array (
      0 => '/usr/share/nginx/html/tpl/navBar.tpl',
      1 => 1529557666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7470420235b2b32a96ab369_84531346',
  'variables' => 
  array (
    'imagen_usuario' => 0,
    'nombre_usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b2b32a96ada48_68989255',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b2b32a96ada48_68989255')) {
function content_5b2b32a96ada48_68989255 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7470420235b2b32a96ab369_84531346';
?>
<div id="header" class="header navbar navbar-default navbar-fixed-top">


    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
            <a href="../home/" class="navbar-brand"><span class="navbar-logo"></span> Digital Trainer</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right">
           
            <li class="dropdown navbar-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['imagen_usuario']->value;?>
" alt="">
                    <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                   <li><a href="../empresas/" >Empresas</a></li>
                   <li><a href="../../sign-in/chooseCompany.php" >Cambiar Empresa</a></li>
                   <li class="divider"></li>
                   <li><a href="javascript:;" id="closeSession">Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
        <!-- begin header navigation right -->
        <!-- end header navigation right -->
    </div>
    <!-- end container-fluid -->
</div><?php }
}
?>