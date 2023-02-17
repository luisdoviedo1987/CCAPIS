<?php /* Smarty version 3.1.27, created on 2020-07-06 00:02:57
         compiled from "/var/www/html/api/autowolkvox/forgetPassword/view/forget-password.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19311768635f02b08196dd53_58667233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e29983e7cec6a2974805b6df89c46af7375382' => 
    array (
      0 => '/var/www/html/api/autowolkvox/forgetPassword/view/forget-password.tpl',
      1 => 1592496668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19311768635f02b08196dd53_58667233',
  'variables' => 
  array (
    'appName' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f02b0819c7a72_39380012',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f02b0819c7a72_39380012')) {
function content_5f02b0819c7a72_39380012 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19311768635f02b08196dd53_58667233';
?>
<!DOCTYPE html>
<html lang="es" class="js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="../resources/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../resources/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../resources/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../resources/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../resources/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../resources/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../resources/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../resources/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../resources/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../resources/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../resources/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../resources/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../resources/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../resources/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../resources/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#003749">
    <title class="has_page_title">Olvido Contraseña | <?php echo $_smarty_tpl->tpl_vars['appName']->value;?>
</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../resources/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- JQUERY UI -->
    <link type="text/css" href="../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
    <!-- STYLE -->
    <link id="stylesheet" type="text/css" href="../resources/css/style.css" rel="stylesheet" media="screen">
    <!-- CUSTOM STYLE -->
    <link type="text/css" href="../resources/css/custom.css" rel="stylesheet">
    <link type="text/css" href="../resources/css/toastr.css" rel="stylesheet"  >
    <!--  MODERNIZR JS -->
    <?php echo '<script'; ?>
 src="../resources/plugins/modernizr/modernizr-custom.js"><?php echo '</script'; ?>
>
    <!--  PLUGINS -->
    <link type="text/css" href="../resources/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <style type="text/css">
                * {
                -webkit-overflow-scrolling: touch;
            }
        .form-card--style-2 .form-header {
            position: relative;
            padding: 0.3rem 0;
            background-color: #ffffff;
        }
        .sm_bg_6 {
          background-image: url(../resources/img/cover/5.png) !important;
          background-color: transparent;
          background-repeat: no-repeat;
          background-size: auto;
          background-position: 45% 30% !important;
          color: #ffffff;
      }
    </style>
</head>
<body class="">

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!-- END PRELOADER -->

<div class="login-cover">
    <div class="login-cover-image"><img src="../resources/img/cover/background_init.png" data-id="login-cover-image" alt=""/></div>
    <div class="login-cover-bg"></div>
</div>

<!-- BEGIN MAIN WRAPPER -->
<div class="body-wrap sm_bg_transparent">
    <section class="slice fullvh">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card form-card form-card--style-2 border-0 animated fadeInDown">
                        <div class="form-header text-center sm_bg_6">
                            <div class="form-header-icon" style="margin-top: 10px">
                                <img src="../resources/img/logo-medismart.png" alt="" class="img-responsive" height="100px">
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="text-center px-2">
                                <h4 class="heading heading-4 strong-400 mb-0" style="margin-top:-10px">Olvidaste tu contraseña</h4>
                            </div>
                                <input type="hidden" id="cli-user" name="cli-user">
                                        <br>
                                        Te enviaremos un link al correo electrónico que registraste para cambiar tu contraseña.<br>

                            <form class="form-default mt-4" >
                                <div class="row mb-3">

                                    <div class="col-lg-12 sm-form-design" >
                                        <input type="text" class="form-control h5-email"
                                               placeholder="Por favor ingresá tu correo electronico" id="email-user" name="email-user">
                                               <label class="control-label">Email</label>
                                    </div>
                                </div>

                                <a href="javascript:void(0)" id="button-forget-password" name="button-forget-password"
                                        class="btn btn-styled btn-base-1 mt-4  border-0 text-white pull-right" style="background-color: #003749;">
                                    Solicitar Contraseña
                                </a>
                            </form>

                             <div class="m-t-20 f-s-12">
                                 <center> Ya tienes cuenta? Haz click <a href="../sign-in/">aquí</a> para ingresar.</center>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END MAIN WRAPPER -->


<!-- CORE JS -->
<?php echo '<script'; ?>
 src="../resources/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/popper/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/js/slidebar/slidebar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/js/classie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/js/side_menu.js"><?php echo '</script'; ?>
>

<!-- PLUGINS -->
<?php echo '<script'; ?>
 src="../resources/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/smooth-scrollbar/smooth-scrollbar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/plugins/placeholders/placeholders.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/js/toastr.min.js"><?php echo '</script'; ?>
>

<!-- APP JS -->
<?php echo '<script'; ?>
 src="../resources/js/app.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/forget-password.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
?>