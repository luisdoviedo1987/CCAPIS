<?php /* Smarty version 3.1.27, created on 2018-07-02 12:49:52
         compiled from "/usr/share/nginx/html/tpl/menu-admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8447448225b3a73d093d034_45049394%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3fce9f73ce8d95e3bef191eb0ba677a7dd9f7fa' => 
    array (
      0 => '/usr/share/nginx/html/tpl/menu-admin.tpl',
      1 => 1530557376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8447448225b3a73d093d034_45049394',
  'variables' => 
  array (
    'imagen_usuario' => 0,
    'nombre_usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3a73d093f7e3_04652685',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3a73d093f7e3_04652685')) {
function content_5b3a73d093f7e3_04652685 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8447448225b3a73d093d034_45049394';
?>
<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['imagen_usuario']->value;?>
" alt="" /></a>
                </div>
                <div class="info">
                   <?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>

                    <small>Bienvenido</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li><a href="../home"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="../agencias"><i class="fa fa-building-o"></i><span>Gimnasios</span></a></li>
            <li><a href="../sesion"><i class="fa fa-clock-o"></i><span>Ejercicios</span></a></li>
            <li><a href="../notificaciones"><i class="fa fa-bell"></i><span>Notificaciones</span></a></li>
            <li><a href="../categories"><i class="fa fa-male"></i><span>Grupos musculares</span></a></li>
            <li><a href="../exercise"><i class="fa fa-bicycle"></i><span>Creación y Edición de ejercicios</span></a></li>

                


        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar --><?php }
}
?>