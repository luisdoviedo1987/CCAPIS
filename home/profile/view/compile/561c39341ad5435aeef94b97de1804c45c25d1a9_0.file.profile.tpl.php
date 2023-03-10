<?php /* Smarty version 3.1.27, created on 2018-07-04 23:47:22
         compiled from "/usr/share/nginx/html/portal.medismart.net/user/profile/view/profile.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2744210155b3db0ea901f48_70688451%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561c39341ad5435aeef94b97de1804c45c25d1a9' => 
    array (
      0 => '/usr/share/nginx/html/portal.medismart.net/user/profile/view/profile.tpl',
      1 => 1530769508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2744210155b3db0ea901f48_70688451',
  'variables' => 
  array (
    'menu' => 0,
    'name_user' => 0,
    'footer' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3db0ea907574_10331230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3db0ea907574_10331230')) {
function content_5b3db0ea907574_10331230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2744210155b3db0ea901f48_70688451';
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
        <title class="has_page_title">Inicio | Portal Medismart</title>
        <link rel="stylesheet" href="../../resources/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <!-- JQUERY UI -->
        <link type="text/css" href="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <!-- STYLE -->
        <link id="stylesheet" type="text/css" href="../../resources/css/style.css" rel="stylesheet" media="screen">
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
                                style="background-image: url('http://via.placeholder.com/1980x1322'); background-position: center center;display: none;">
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
                                            <li class="breadcrumb-item active" aria-current="page">Mi Carnet Vitual</li>
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
                                                            <div class="sm-wrapper welcome_message">
                                                                <div class="sm-box">
                                                                    <div class="sm-info no-border">
                                                                        <div class="sm-info-with-icon">
                                                                            
                                                                            <div class="sm-info-text m-l-25">
                                                                                <h2 class="sm-inner-header m-t-0 text-purple"
                                                                                id="good_morning"
                                                                                data-typeit="true">
                                                                                Bienvenido(a), <?php echo $_smarty_tpl->tpl_vars['name_user']->value;?>
!
                                                                                </h2>
                                                                                <div class="sm-inner-desc text-justify m-b-8 m-l-3">
                                                                                    Como afiliado a MediSmart, disfrutar de todas las coberturas en especialidades y servicios m??dicos presentado tu carnet vitual de afiliado
                                                                                </div>
                                                                                <button id="btn-my-card" name="btn-my-card" class="btn btn-success ">Ver m?? carnet virtual</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
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
                                                                Listado de Asociados
                                                                </h6>
                                                            </div>
                                                            <div class="sm-box">
                                                                <div id="div-beneficiarios">
                                                                    <div class="sm-info">
                                                                        <div class="sm-info-with-icon">
                                                                            <div class="sm-info-icon">
                                                                                <div class="icon ion-ios-people"></div>
                                                                            </div>
                                                                            <div class="sm-info-text">
                                                                                <h5 class="sm-inner-header">Beneficiarios</h5>
                                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                          <table id="dataTables-beneficiarios" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Estado</th>
                                                                                    <th>Numero Cliente</th>
                                                                                    <th>Numero Beneficiaro</th>
                                                                                    <th>Cedula</th>
                                                                                    <th>Nombre</th>
                                                                                    <th>Titular</th>
                                                                                    <th>Cobertura</th>
                                                                                    <th>Oncosmart</th>
                                                                                    <th></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div id="div-mascotas">
                                                                    <div class="sm-info">
                                                                        <div class="sm-info-with-icon">
                                                                            <div class="sm-info-icon">
                                                                                <div class="icon ion-ios-paw"></div>
                                                                            </div>
                                                                            <div class="sm-info-text">
                                                                                <h5 class="sm-inner-header">Mascotas</h5>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="table-responsive">
                                                                        <table id="dataTables-mascotas" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Estado</th>
                                                                                    <th>Numero Cliente</th>
                                                                                    <th>Nombre Titular</th>
                                                                                    <th>Numero Mascota</th>
                                                                                    <th>Nombre</th>
                                                                                    <th>Cli</th>
                                                                                    <th></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div id="div-bebes">
                                                                    <div class="sm-info">
                                                                        <div class="sm-info-with-icon">
                                                                            <div class="sm-info-icon">
                                                                                <div class="icon ion-happy"></div>
                                                                            </div>
                                                                            <div class="sm-info-text">
                                                                                <h5 class="sm-inner-header">Bebes</h5>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table id="dataTables-bebes" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Estado</th>
                                                                                    <th>Numero Cliente</th>
                                                                                    <th>Nombre Titular</th>
                                                                                    <th>Numero Bebe</th>
                                                                                    <th>Nombre</th>
                                                                                    <th>Nombre Madre</th>
                                                                                    <th>Fecha Nacimiento</th>
                                                                                    <th>Fecha Fin Cortesia</th>
                                                                                    <th></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
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

        <div id="login_modal" class="modal effect-flip-horizontal fade">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
                    <div class="modal-body p-0">
                            <div class="card" id="badge-content">
                                <div class="card-img-top view view-first" style="background-color: #789656;">

                                           <center><img id="qr-badge" src="QRLogo.php?data=1" alt="" height="80px" style="margin-top: 25px;margin-bottom: 25px"></center>  

                                    </div>
                                <div class="card-body">
                                        <center> 
                                            <img src="../../resources/img/logo-medismart.png" class="" alt="" height="80px" style="margin: 10px"></center>

                                  </div>
                                <div class="card-body" style="background-color: #003749;">
                                    <div class="card-title text-white fontbold" id="name-badge" style="font-size: 16px">XXXXXXX XXXXXX XXXXXXX XXXXX</div>
                                    <div class="card-text text-white fontlight" style="margin-top: -13px ;font-size: 12px">Titular</div>
                                    <div class="card-title text-white fontnormal" id="cli-badge">XXXXXXXXX</div>
                                    <div class="card-text text-white fontlight" style="margin-top: -13px ;font-size: 12px" id="status-badge">XXXXXX</div>

                                    <div class="card-text" style="margin-top: 20px " >
                                        <center>
                                             <div class="card-text text-white fontlight"> www.medismart.net<br>
                                             <font size="1.5" class="fontlight" style="margin-top: -5px">Presente su carnet vitual al utilizar los servicios</font>
                                          

                                                 <button type="button" id="btn-save-badge" class="btn btn-wd btn-warning ladda-button m-t-10 text-white" data-style="zoom-in" data-spinner-color="#FFF">
                                                        <span class="ladda-label">Guardar</span>
                                                        <span class="ladda-spinner"></span>
                                                    <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 140px;"></div></button>  
                                            </div>
                                             
                                            
                                            <center>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


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
 src="../../resources/plugins/typeit/typeit.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../resources/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../resources/plugins/ResizeSensor/ResizeSensor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../resources/plugins/DataTables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../resources/plugins/DataTables/media/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../resources/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
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

        <!-- APP JS -->
        <?php echo '<script'; ?>
 src="../../resources/js/app.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/home.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>