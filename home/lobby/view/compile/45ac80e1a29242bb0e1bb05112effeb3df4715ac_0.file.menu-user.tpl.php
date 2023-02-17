<?php /* Smarty version 3.1.27, created on 2022-06-12 13:16:42
         compiled from "/var/www/html/api/autowolkvox/tpl/menu-user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161135845762a63b9ad37616_64560990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ac80e1a29242bb0e1bb05112effeb3df4715ac' => 
    array (
      0 => '/var/www/html/api/autowolkvox/tpl/menu-user.tpl',
      1 => 1655060812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161135845762a63b9ad37616_64560990',
  'variables' => 
  array (
    'permisos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62a63b9ada04b7_88168009',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62a63b9ada04b7_88168009')) {
function content_62a63b9ada04b7_88168009 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161135845762a63b9ad37616_64560990';
?>
<div class="collapse navbar-collapse align-items-center justify-content-end"
    id="navbar_main">
    <!-- BEGIN NAVBAR LINKS -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown ">
            <a href="javascript:void(0)" class="nav-link">
                <i class="icon ion-ios-home-outline icon_nav"></i> Inicio
            </a>
        </li>
       <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1") || strstr($_smarty_tpl->tpl_vars['permisos']->value,"2")) {?> 
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon ion-ios-clock-outline icon_nav"></i> Rutinas
                </a>
                <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                    <div class="list-group rounded">
                        <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1") || strstr($_smarty_tpl->tpl_vars['permisos']->value,"2")) {?> 
                            <a href="../routine/list.php"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Listado de Rutinas
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira ver las rutinas creadas</p>
                                </div>
                            </a> 
                        <?php }?>
                        <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1") || strstr($_smarty_tpl->tpl_vars['permisos']->value,"2")) {?> 
                            <a href="../routine/"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Crear Rutina Web
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira crear una nueva rutina web</p>
                                </div>
                            </a>
                        <?php }?>
                         <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1") || strstr($_smarty_tpl->tpl_vars['permisos']->value,"2")) {?> 
                            <a href="../routine/?blue"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Crear Rutina Web Blue
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira crear una nueva rutina web Blue</p>
                                </div>
                            </a>
                        <?php }?>
                        <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1") || strstr($_smarty_tpl->tpl_vars['permisos']->value,"2")) {?> 
                            <a href="../routine/file.php"
                                class="list-group-item list-group-item-action d-flex align-items-center">
                                <div class="list-group-content">
                                    <div class="list-group-heading heading heading-6 mb-1">
                                        Crear Rutina Archivo
                                    </div>
                                    <p class="text-sm mb-0">Esta opción le permitira crear una nueva rutina archivo</p>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </li>
        <?php }?>
        <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1") || strstr($_smarty_tpl->tpl_vars['permisos']->value,"3")) {?> 
        <li class="nav-item dropdown">
             <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon ion-ios-paper-outline icon_nav"></i> Reportes
            </a>
            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                <div class="list-group rounded">
                     <a href="../report/"
                        class="list-group-item list-group-item-action d-flex align-items-center">
                        <div class="list-group-content">
                            <div class="list-group-heading heading heading-6 mb-1">
                                Generar Reporte
                            </div>
                            <p class="text-sm mb-0">Esta opción le permitira exportar la información en reportes</p>
                        </div>
                    </a> 

                </div>
            </div>
        </li>
        <?php }?>
        <?php if (strstr($_smarty_tpl->tpl_vars['permisos']->value,"1")) {?> 
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon ion-ios-settings-strong icon_nav"></i> Configuración
                </a>
                <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                    <div class="list-group rounded">
                        <a href="../users/"
                            class="list-group-item list-group-item-action d-flex align-items-center">
                            <div class="list-group-content">
                                <div class="list-group-heading heading heading-6 mb-1">
                                    Configuración de usuarios
                                </div>
                                <p class="text-sm mb-0">Esta opción le permitira ver los usuarios del sistema</p>
                            </div>
                        </a> 

                    </div>
                </div>
            </li>
        <?php }?>
        <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon ion-ios-person-outline icon_nav"></i> Mi Perfil
            </a>
            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                <div class="list-group rounded">
                     
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
</div><?php }
}
?>