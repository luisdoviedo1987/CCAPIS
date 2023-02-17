<?php /* Smarty version 3.1.27, created on 2018-07-06 16:58:06
         compiled from "/usr/share/nginx/html/portal.medismart.net/tpl/menu-user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2976096945b3ff3fe061597_13987460%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6652e2af930e90fe26ec17b7e8cf5a1353dc17a' => 
    array (
      0 => '/usr/share/nginx/html/portal.medismart.net/tpl/menu-user.tpl',
      1 => 1530769772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2976096945b3ff3fe061597_13987460',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3ff3fe062736_84369369',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3ff3fe062736_84369369')) {
function content_5b3ff3fe062736_84369369 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2976096945b3ff3fe061597_13987460';
?>
<div class="collapse navbar-collapse align-items-center justify-content-end"
    id="navbar_main">
    <!-- BEGIN NAVBAR LINKS -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown active">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                data-toggle="dropdown">
                <i class="icon ion-ios-home-outline icon_nav"></i> Inicio
            </a>
            <ul class="dropdown-menu sm_p_t_b">
                <li class="nav-item">
                    <a href="../home/" class="dropdown-item">Mi Carnet</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon ion-ios-briefcase-outline icon_nav"></i> Mi Perfil
            </a>
            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                <div class="list-group rounded">
                    <!-- <a href="../profile/?pass"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="list-group-content">
                            <div class="list-group-heading heading heading-6 mb-1">
                                Cambiar Contraseña
                            </div>
                            <p class="text-sm mb-0">Esta opción le permitira<br>cambiar de contraseña</p>
                        </div>
                    </a> -->
                    <a href="../../logout/"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="list-group-content">
                            <div class="list-group-heading heading heading-6 mb-1">
                                Cerrar Sesion
                            </div>
                            <p class="text-sm mb-0">Esta opción cerrara el sistema</p>
                        </div>
                    </a>
                    
                </div>
            </div>
        </li>
        
    </ul>
    <!-- END NAVBAR LINKS -->
</div><?php }
}
?>