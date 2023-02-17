<?php /* Smarty version 3.1.27, created on 2018-06-20 11:42:27
         compiled from "/usr/share/nginx/html/sign-in/view/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8950294245b2a92032d5a88_61467275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e8bc6d316e8b6313abc584854710ae2be7e01a' => 
    array (
      0 => '/usr/share/nginx/html/sign-in/view/login.tpl',
      1 => 1529516541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8950294245b2a92032d5a88_61467275',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b2a92032d7f71_49533089',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b2a92032d7f71_49533089')) {
function content_5b2a92032d7f71_49533089 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8950294245b2a92032d5a88_61467275';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title>Digital Trainer | Login Page</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="../resources/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
  <link href="../resources/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../resources/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/animate.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/style.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/style-responsive.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/theme/default.css" rel="stylesheet" id="theme" />
  <!-- ================== END BASE CSS STYLE ================== -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
  <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade in"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <div class="login-cover">
      <div class="login-cover-image"><img src="../resources_old/images/login-bg1.jpg" data-id="login-cover-image" alt="" /></div>
      <div class="login-cover-bg"></div>
  </div>
  <!-- begin #page-container -->
  <div id="page-container" class="fade">
      <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class=""></span> DMC Digital Trainer
                    <small></small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form class="margin-bottom-0 form">
                  <div class="form-group m-b-20">
                    <div id="msj"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                  </div>
                  
                    <div class="form-group m-b-20">
                        <input type="text" id="username" class="form-control input-lg" placeholder="Usuario">

                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" id="password" placeholder="Contraseña..." class="form-control input-lg">
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox"  name="remenber-me" value="on"/> Recuerdame
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="button" class="btn btn-success btn-block btn-lg" onclick="login()">Ingresar</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- end login -->

  </div>
  <!-- end page container -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/jquery/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="../resources/assets/crossbrowserjs/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../resources/assets/crossbrowserjs/respond.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../resources/assets/crossbrowserjs/excanvas.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../resources/assets/plugins/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>
  <!-- ================== END BASE JS ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <?php echo '<script'; ?>
 src="../resources/assets/js/login-v2.demo.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../resources/assets/js/apps.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>

  <!-- ================== END PAGE LEVEL JS ================== -->

  <?php echo '<script'; ?>
>
    $(document).ready(function() {
        App.init();
        LoginV2.init();
    });
  <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>