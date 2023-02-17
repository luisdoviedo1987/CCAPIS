<?php /* Smarty version 3.1.27, created on 2018-05-21 16:53:40
         compiled from "/usr/share/nginx/html/tpl/menu-context.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7073072585b034df4392f14_13029026%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e622359d5e55c6d8d905130d5ffc50b0170c93' => 
    array (
      0 => '/usr/share/nginx/html/tpl/menu-context.tpl',
      1 => 1526943126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7073072585b034df4392f14_13029026',
  'variables' => 
  array (
    'imagen_usuario' => 0,
    'nombre_usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b034df43950f0_38917031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b034df43950f0_38917031')) {
function content_5b034df43950f0_38917031 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7073072585b034df4392f14_13029026';
?>
<ul class="nav-right pull-right list-inline">
    <li class="dropdown nav-profile">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen_usuario']->value;?>
" alt="" class="0 size-30x30"> </a>
        <ul class="dropdown-menu pull-right" role="menu">
            <li>
                <div class="user-info">
                    <div class="user-name"><?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</div>
                    <div class="user-position online">Disponible</div>
                </div>
            </li>
            <li>
                <a href="../users/" role="button" tabindex="0">
                <i class="fa fa-user"></i>Usuarios</a>
            </li>
            <li>
                <a href="../pass/" role="button" tabindex="0">
                <i class="fa fa-key"></i>Cambiar Contraseña</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="../lock/" role="button" tabindex="0">
                <i class="fa fa-lock"></i>Bloquear</a>
            </li>
            <li>
                <a href="../../logout/" role="button" tabindex="0">
                <i class="fa fa-sign-out"></i>Cerrar Sesion</a>
            </li>
        </ul>
    </li>
</ul><?php }
}
?>