<?php /* Smarty version 3.1.27, created on 2020-06-29 13:07:05
         compiled from "/var/www/html/api/autowolkvox/home/report/view/report.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14589452165efa3bd9a84295_64089051%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308257de3f775e630ea5d859979d60018c80620e' => 
    array (
      0 => '/var/www/html/api/autowolkvox/home/report/view/report.tpl',
      1 => 1592676086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14589452165efa3bd9a84295_64089051',
  'variables' => 
  array (
    'appName' => 0,
    'version' => 0,
    'menu' => 0,
    'routines' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5efa3bd9a90941_79481998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5efa3bd9a90941_79481998')) {
function content_5efa3bd9a90941_79481998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14589452165efa3bd9a84295_64089051';
?>
<!DOCTYPE html>
<html lang="es" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="apple-touch-icon" sizes="57x57" href="../../resources/img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../../resources/img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../../resources/img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../../resources/img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../../resources/img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../../resources/img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../../resources/img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../../resources/img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../../resources/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../../resources/img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../resources/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../../resources/img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../resources/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../../resources/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../resources/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#003749">
        <title class="has_page_title">Reportes | <?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
</title>
        <link rel="stylesheet" href="../../resources/plugins/bootstrap/css/bootstrap.min.css?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <!-- JQUERY UI -->
        <link type="text/css" href="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <!-- STYLE -->
        <link id="stylesheet" type="text/css" href="../../resources/css/style.css?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" rel="stylesheet" media="screen">
        <link href="../../resources/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

        <!-- CUSTOM STYLE -->
        <link type="text/css" href="../../resources/css/custom.css" rel="stylesheet">
        <link type="text/css" href="../../resources/css/toastr.css" rel="stylesheet"  >

        <!--  MODERNIZR JS -->
        <?php echo '<script'; ?>
 src="../../resources/plugins/modernizr/modernizr-custom.js"><?php echo '</script'; ?>
>
        <!--  PLUGINS -->
        <link type="text/css" href="../../resources/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
        <link href="../../resources/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
        <link href="../../resources/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
        <style type="text/css">
        .fontbold{
        font-family: 'Lato', sans-serif;
        font-style: normal;
        font-variant: normal;
        font-weight: 700;
        }
        .fontlight{
        font-family: 'Lato', sans-serif;
        font-weight: 100;
        font-style: normal;
        }
        .fontnormal{
        font-family: 'Lato', sans-serif;
        font-weight: 100;
        font-style: normal;
        }
        @media only screen and (max-width: 2500px) {
        #medismart-logo-badge {
        height:  100px;
        margin: 5px;
        }
        }
        @media only screen and (max-width: 1500px) {
        #medismart-logo-badge {
        height:  100px;
        margin: 5px;
        }
        }
        @media only screen and (max-width: 570px) {
        #medismart-logo-badge {
        height:  140px;
        margin-left: -8px;
        }
        }
        @media only screen and (max-width: 370px) {
        #medismart-logo-badge {
        height:  125px;
        margin-left: -8px;
        }
        }
        
        
        </style>
    </head>
    <body class="pace-done ">
        <!-- BEGIN PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div>
        <!-- END PRELOADER -->
        <!-- BEGIN MAIN WRAPPER -->
        <div class="body-wrap  all-wrapper">
            <!--BEGIN SM CONTAINER-->
            <div id="sm-container" class="sm-container">
                
                
                <!-- BEGIN SM PUSHER -->
                <div class="sm-pusher">
                    <div class="sm-content">
                        <div class="sm-content-inner">
                            <!-- BEGIN HEADER -->
                            <div class="header">
                                
                                
                                <!-- BEGIN NAVBAR -->
                                <nav id="header"
                                    class="navbar navbar-expand-lg navbar--bold navbar-light bg-default navbar--bb-1px">
                                    <!--navbar-inverse bg-dark-->
                                    <div class="container navbar-container">
                                        <!-- BEGIN LOGO -->
                                        <a class="navbar-brand" href="../">
                                            <img src="../../resources/img/logo-medismart.png" class="" alt="" height="80px" style="margin: 5px">
                                        </a>
                                        <!--END LOGO-->
                                        <div class="d-inline-block">
                                            <!-- BEGIN NAVBAR TOGGLER  -->
                                            <button class="navbar-toggler hamburger hamburger-js hamburger--spring"
                                            type="button" data-toggle="collapse" data-target="#navbar_main">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                            </button>
                                            <!-- END NAVBAR TOGGLER  -->
                                        </div>
                                        
                                        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

                                        
                                    </div>
                                </nav>
                                <!--END NAV BAR-->
                            </div>
                            <!--END HEADER-->
                            <!-- BEGIN PAGE TITLE -->
                            <section id="transparent_menu" class="slice-xl has-bg-cover bg-size-cover"
                                style="background-image: url('../../resources/img/1980x1322.png'); background-position: center center;display: none;">
                                
                                <span class="mask mask-base-1--style-1 opacity-70"></span>
                                
                            </section>
                            <!-- END PAGE TITLE -->
                            <!--BEGIN CONTENT-->
                            <section id="main_content" class="bg slice-sm sct-color-1">
                                <div class="container" id="container">
                                    <!--BEGIN BREADCRUMB-->
                                    <div class="breadcrumb-pageheader">
                                        <ol class="breadcrumb sm-breadcrumb">
                                            <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Reportes</li>
                                        </ol>
                                    </div>
                                    <!--END BREADCRUMB-->
                                    <!--BEGIN PAGE CONTENT-->
                                    <div class="sm-content dashboard_v2">
                                        <div class="sm-content-box">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="sm-wrapper">
                                                                <div class="title_box sm-header-style-1">
                                                                    <div class="sm-actions">
                                                                        <a href="javascript:void(0)"
                                                                            class="tooltip_cus fullscreen_element">
                                                                            <span class="extra-tooltip">Fullscreen</span>
                                                                            <i class="material-icons">fullscreen</i>
                                                                        </a>
                                                                    </div>
                                                                    <h6 class="sm-header">
                                                                    Generar Reporte
                                                                    </h6>
                                                                </div>
                                                                <div class="sm-box">
                                                                    <div id="div-beneficiarios">
                                                                        <div class="sm-info">
                                                                            <div class="sm-info-with-icon">
                                                                                <div class="sm-info-icon">
                                                                                    <div class="icon ion-ios-paper-outline"></div>
                                                                                </div>
                                                                                <div class="sm-info-text">
                                                                                    <h5 class="sm-inner-header">Reporte</h5>
                                                                                    <div class="sm-inner-desc">
                                                                                        Complete toda la informacion que se le solicita
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                      <form class="form-default" action="generate.php" autocomplete="off" method="POST">
                                                                            <div class="form-group row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="username_1" class="col-sm-3 col-form-label">Seleccione la rutina</label>
                                                                                        <select class="form-control selectpicker" name="id_routine" id="id_routine" data-placeholder="Buscar por Nombre">
                                                                                            <?php echo $_smarty_tpl->tpl_vars['routines']->value;?>

                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row" style="margin-top:-15px">
                                                                            <div class="col-md-12">
                                                                                <label for="username_1" class="col-sm-3 col-form-label">Fecha inicio</label>
                                                                                    <div class="input-group date input-group--style-1">
                                                                                        <input type="text" class="form-control date-time-picker-component" id="start_date" name="start_date" placeholder="Seleccione la fecha" autocomplete="off" required="true">
                                                                                        <span class="input-group-addon date_time_pick">
                                                                                            <i class="ion-ios-calendar-outline"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                 </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-md-12">
                                                                                    <label for="password_1" class="col-sm-3 col-form-label">Fecha Final</label>
                                                                                    <div class="input-group date input-group--style-1">
                                                                                        <input type="text" class="form-control date-time-picker-component" id="final_date" name="final_date" placeholder="Seleccione la fecha" autocomplete="off" required="true">
                                                                                        <span class="input-group-addon date_time_pick">
                                                                                            <i class="ion-ios-calendar-outline"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                 </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                 <div class="col-md-12">
                                                                                     <button type="submit" class="btn btn-primary">Generar reporte</button>    
                                                                                 </div>                                                                            
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--END CONTENT-->
                            <!-- BEGIN FOOTER -->
                            <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

                            <!--END FOOTER-->
                        </div>
                    </div>
                </div>
                <!-- END SM PUSHER -->
            </div>
            <!--END SM CONTAINER-->
        </div>
        <!-- END MAIN WRAPPER -->
    </div>

    <img src="" class="" alt=""  id="image-generated"></center>
    <!-- TO TOP -->
    <a href="javascript:void(0)" class="back-to-top btn-back-to-top sm_bg_1"></a>
    <!-- CORE JS -->
    <?php echo '<script'; ?>
 src="../../resources/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/popper/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/js/slidebar/slidebar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/js/classie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/js/side_menu.js"><?php echo '</script'; ?>
>
    <!-- PLUGINS -->
    <?php echo '<script'; ?>
 src="../../resources/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/smooth-scrollbar/smooth-scrollbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/placeholders/placeholders.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/ResizeSensor/ResizeSensor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/plugins/select2/js/select2.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="../../resources/js/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/js/html2canvas.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/js/canvas2image.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../resources/js/jquery.quickfit.js"><?php echo '</script'; ?>
>
    <!-- APP JS -->
    <?php echo '<script'; ?>
 src="../../resources/js/app.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/report.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>