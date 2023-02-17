<?php /* Smarty version 3.1.27, created on 2018-06-20 11:43:39
         compiled from "/usr/share/nginx/html/sign-in/view/chooseCompany.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1198650545b2a924ba15e91_74972217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d724e5404ad71d2b8dcffb944dacacbbd6050fe' => 
    array (
      0 => '/usr/share/nginx/html/sign-in/view/chooseCompany.tpl',
      1 => 1529516616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198650545b2a924ba15e91_74972217',
  'variables' => 
  array (
    'title' => 0,
    'descripcionPage' => 0,
    'author' => 0,
    'companys' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b2a924ba18f50_78189690',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b2a924ba18f50_78189690')) {
function content_5b2a924ba18f50_78189690 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1198650545b2a924ba15e91_74972217';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="<?php echo $_smarty_tpl->tpl_vars['descripcionPage']->value;?>
" name="description" />
  <meta content="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" name="author" />

  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="../resources/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
  <link href="../resources/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../resources/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/animate.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/style.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/style-responsive.min.css" rel="stylesheet" />
  <link href="../resources/assets/css/theme/default.css" rel="stylesheet" id="theme" />
  <link href="../resources/assets/vendors/css/toastr.css" rel="stylesheet" type="text/css" >

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
        <span class=""></span> Compañia
        <small>Seleccione la compañia a la cual quiere conectarse</small>
      </div>
      <div class="icon">
        <i class="fa fa-building"></i>
      </div>
    </div>
    <!-- end brand -->
    <div class="login-content">
      <form  class="margin-bottom-0">
        <div class="form-group m-b-20">
          <select class="form-control input-lg" placeholder="Compañia" id="idCompany">
              <?php echo $_smarty_tpl->tpl_vars['companys']->value;?>

          </select>
        </div>
        <div class="checkbox m-b-20">
       
        </div>
        <div class="login-buttons">
          <button type="button" class="btn btn-success btn-block btn-lg" id="btnChoose">Ingresar</button>
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
<?php echo '<script'; ?>
 src="../resources/assets/vendors/js/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../resources/assets/vendors/js/toastr.min.js" type="text/javascript"><?php echo '</script'; ?>
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
 src="../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/chooseCompany.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
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