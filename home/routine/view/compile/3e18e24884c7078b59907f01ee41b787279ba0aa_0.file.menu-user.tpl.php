<?php /* Smarty version 3.1.27, created on 2020-06-21 17:05:00
         compiled from "/usr/share/nginx/html/wolkbox.ulemus.com/tpl/menu-user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2759921855eefe79c1061e1_08393391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e18e24884c7078b59907f01ee41b787279ba0aa' => 
    array (
      0 => '/usr/share/nginx/html/wolkbox.ulemus.com/tpl/menu-user.tpl',
      1 => 1592780665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2759921855eefe79c1061e1_08393391',
  'variables' => 
  array (
    'permisos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5eefe79c113344_77994360',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5eefe79c113344_77994360')) {
function content_5eefe79c113344_77994360 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2759921855eefe79c1061e1_08393391';
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