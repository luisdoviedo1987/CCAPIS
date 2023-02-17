<?php /* Smarty version 3.1.27, created on 2018-07-04 11:54:03
         compiled from "/usr/share/nginx/html/portal.medismart.net/client/home/view/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5815397645b3d09bbb73c64_73733623%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d69bb29dbe13940a9a0333ded5fcdf46cea17e1' => 
    array (
      0 => '/usr/share/nginx/html/portal.medismart.net/client/home/view/home.tpl',
      1 => 1530726841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5815397645b3d09bbb73c64_73733623',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3d09bbb79064_49437998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3d09bbb79064_49437998')) {
function content_5b3d09bbb79064_49437998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5815397645b3d09bbb73c64_73733623';
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
    <title class="has_page_title">Inicio | Portal Medismart</title>
    <!-- FAVICON -->
    <link href="http://via.placeholder.com/32x32" rel="icon" type="image/png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../../resources/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- JQUERY UI -->
    <link type="text/css" href="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <!-- STYLE -->
    <link id="stylesheet" type="text/css" href="../../resources/css/style.css" rel="stylesheet" media="screen">
    <!-- CUSTOM STYLE -->
    <link type="text/css" href="../../resources/css/custom.css" rel="stylesheet">
    <!--  MODERNIZR JS -->
    <?php echo '<script'; ?>
 src="../../resources/plugins/modernizr/modernizr-custom.js"><?php echo '</script'; ?>
>
    <!--  PLUGINS -->
    <link type="text/css" href="../../resources/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="../../resources/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet"/>
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
                                                    <a href="../home/" class="dropdown-item">Mis tarjetas</a>
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
                                                    <a href="sm_form_elements.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Cambiar Contraseña
                                                            </div>
                                                            <p class="text-sm mb-0">Esta opcion le permitira<br>cambiar de contraseña</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_form_plugins.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Cerrar Sesion
                                                            </div>
                                                            <p class="text-sm mb-0">Esta opcion cerrara el sistema</p>
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </li>

                                     
                                    </ul>
                                    <!-- END NAVBAR LINKS -->
                                </div>
                              
                            </div>
                        </nav>
                        <!--END NAV BAR-->
                    </div>
                    <!--END HEADER-->

                    <!-- BEGIN PAGE TITLE -->
                    <section id="transparent_menu" class="slice-xl has-bg-cover bg-size-cover"
                             style="background-image: url('http://via.placeholder.com/1980x1322'); background-position: center center;display: none;">
                        <span class="mask mask-base-1--style-1 opacity-70"></span>
                        <div class="container no-padding">
                            <div class="col-md-6">
                                <h3 class="heading heading-xl strong-400 text-normal c-white">
                                    Layouts
                                </h3>
                                <p class="lead text-normal strong-300 c-white mt-3 line-height-1_8">
                                    As an entrepreneur you keep trying things, and I try everything. I try business
                                    ideas, on our website we test everything, iterate, iterate, iterate.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- END PAGE TITLE -->

                    <!--BEGIN CONTENT-->
                    <section id="main_content" class="bg slice-sm sct-color-1">
                        <div class="container" id="container">
                            <!--BEGIN BREADCRUMB-->
                            <div class="breadcrumb-pageheader">
                                <ol class="breadcrumb sm-breadcrumb">
                                    <li class="breadcrumb-item"><a href="../home/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mis tarjetas</li>
                                </ol>
                            </div>
                            <!--END BREADCRUMB-->

                            <!--BEGIN PAGE CONTENT-->
                            <div class="sm-content dashboard_v2">
                                <div class="sm-content-box">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="sm-wrapper welcome_message">
                                                        <div class="sm-box">
                                                            <div class="sm-info no-border">
                                                                <div class="sm-info-with-icon">
                                                                    <div class="sm-info-icon">
                                                                        <p class="wi wi-night-alt-snow-thunderstorm f-s-60"></p>
                                                                        <p class="text-center m-t-10 m-b-0 text-purple">
                                                                            <span data-count="true" data-number="24"
                                                                                  id="degree"></span>
                                                                            <sup>o</sup>C</p>
                                                                        <h6 class="text-center text-purple"><span
                                                                                id="cloudy"
                                                                                data-typeit="true">cloudy</span>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="sm-info-text m-l-25">
                                                                        <h2 class="sm-inner-header m-t-0 text-purple"
                                                                            id="good_morning"
                                                                            data-typeit="true">
                                                                            Bienvenido, Andrew!
                                                                        </h2>
                                                                        <div class="sm-inner-desc text-justify m-b-10 m-l-3">
                                                                            Lorem Ipsum is simply dummy text of the
                                                                            printing and typesetting
                                                                            industry. Lorem Ipsum has been the
                                                                            industry's standard of type and
                                                                            scrambled it to make a type specimen book.
                                                                            It has survived not only
                                                                            five centuries
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>


<div class="sm-content-box">
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
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus refresh_element">
                                                            <span class="extra-tooltip">Refresh</span>
                                                            <i class="material-icons">refresh</i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus minimize_element">
                                                            <span class="extra-tooltip">Collapse / Expand</span>
                                                            <i class="material-icons">import_export</i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="tooltip_cus remove_element">
                                                            <span class="extra-tooltip">Remove</span>
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                    </div>
                                                    <h6 class="sm-header">
                                                        DataTables Default
                                                    </h6>
                                                </div>
                                                <div class="sm-box">
                                                    <div class="sm-info">
                                                        <div class="sm-info-with-icon">
                                                            <div class="sm-info-icon">
                                                                <div class="icon ion-ios-keypad-outline"></div>
                                                            </div>
                                                            <div class="sm-info-text">
                                                                <h5 class="sm-inner-header">Zero configuration</h5>
                                                                <div class="sm-inner-desc">
                                                                    DataTables is a plug-in for the jQuery Javascript
                                                                    library. It is a highly flexible tool, build upon
                                                                    the foundations of progressive enhancement, that
                                                                    adds all of these advanced features to any HTML
                                                                    table.
                                                                    <a href="https://github.com/DataTables/DataTables"
                                                                       target="_blank">Learn more about DataTables</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <table id="data-table" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td>4</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td>5</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td>5.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td>6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 7</td>
                                                            <td>Win XP SP2+</td>
                                                            <td>7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>Trident</td>
                                                            <td>AOL browser (AOL desktop)</td>
                                                            <td>Win XP</td>
                                                            <td>6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.5</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 2.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 3.0</td>
                                                            <td>Win 2k+ / OSX.3+</td>
                                                            <td>1.9</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Camino 1.0</td>
                                                            <td>OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Camino 1.5</td>
                                                            <td>OSX.3+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Netscape 7.2</td>
                                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Netscape Browser 8</td>
                                                            <td>Win 98SE+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Netscape Navigator 9</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.1</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.2</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.2</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.3</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.4</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.4</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.5</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.6</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>1.6</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.7</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td>1.7</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.8</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Seamonkey 1.1</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Epiphany 2.20</td>
                                                            <td>Gnome</td>
                                                            <td>1.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 1.2</td>
                                                            <td>OSX.3</td>
                                                            <td>125.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 1.3</td>
                                                            <td>OSX.3</td>
                                                            <td>312.8</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 2.0</td>
                                                            <td>OSX.4+</td>
                                                            <td>419.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 3.0</td>
                                                            <td>OSX.4+</td>
                                                            <td>522.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>OmniWeb 5.5</td>
                                                            <td>OSX.4+</td>
                                                            <td>420</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>iPod Touch / iPhone</td>
                                                            <td>iPod</td>
                                                            <td>420.1</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>S60</td>
                                                            <td>S60</td>
                                                            <td>413</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 7.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 7.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 8.0</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 8.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 9.0</td>
                                                            <td>Win 95+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 9.2</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 9.5</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera for Wii</td>
                                                            <td>Wii</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Nokia N800</td>
                                                            <td>N800</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Nintendo DS browser</td>
                                                            <td>Nintendo DS</td>
                                                            <td>8.5</td>
                                                            <td>C/A<sup>1</sup></td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.1</td>
                                                            <td>KDE 3.1</td>
                                                            <td>3.1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.3</td>
                                                            <td>KDE 3.3</td>
                                                            <td>3.3</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.5</td>
                                                            <td>KDE 3.5</td>
                                                            <td>3.5</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 4.5</td>
                                                            <td>Mac OS 8-9</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.1</td>
                                                            <td>Mac OS 7.6-9</td>
                                                            <td>1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.2</td>
                                                            <td>Mac OS 8-X</td>
                                                            <td>1</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Misc</td>
                                                            <td>NetFront 3.1</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Misc</td>
                                                            <td>NetFront 3.4</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>A</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Misc</td>
                                                            <td>Dillo 0.8</td>
                                                            <td>Embedded devices</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Misc</td>
                                                            <td>Links</td>
                                                            <td>Text only</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Misc</td>
                                                            <td>Lynx</td>
                                                            <td>Text only</td>
                                                            <td>-</td>
                                                            <td>X</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Misc</td>
                                                            <td>IE Mobile</td>
                                                            <td>Windows Mobile 6</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Misc</td>
                                                            <td>PSP browser</td>
                                                            <td>PSP</td>
                                                            <td>-</td>
                                                            <td>C</td>
                                                        </tr>
                                                        <tr class="gradeU">
                                                            <td>Other browsers</td>
                                                            <td>All others</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>U</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

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
                    <footer id="footer" class="footer footer-inverse">
                        <div class="footer-bottom py-3">
                            <div class="container">
                                <div class="row cols-xs-space col-sm-space align-items-center">
                                    <div class="col-md-7 col-12">
                                        <div class="text-xs-center text-sm-left">
                                            <ul class="footer-menu">
                                                <li>
                                                    <a href="index.html" class="p-l-0">Home</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.pvrtechstudio.com/">Website</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Portfolio</a>
                                                </li>
                                            </ul>

                                            <div class="copyright mt-1">
                                                <ul class="copy-links">
                                                    <li>
                                                        © 2018 <a href="http://www.pvrtechstudio.com/" target="_blank">PVR
                                                        Tech Studio</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Terms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">License</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Privacy policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="text-xs-center text-sm-right">
                                            <ul class="social-media social-media--style-1-v4">
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Github">
                                                        <i class="fa fa-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!--END FOOTER-->
                </div>
            </div>
        </div>
        <!-- END SM PUSHER -->
    </div>
    <!--END SM CONTAINER-->
</div>
<!-- END MAIN WRAPPER -->

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
 src="../../resources/plugins/countup/countUp.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/typeit/typeit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/d3/d3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/rickshaw/rickshaw.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/plugins/ResizeSensor/ResizeSensor.js"><?php echo '</script'; ?>
>

<!-- APP JS -->
<?php echo '<script'; ?>
 src="../../resources/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/js/sm_dashboard_02.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
?>