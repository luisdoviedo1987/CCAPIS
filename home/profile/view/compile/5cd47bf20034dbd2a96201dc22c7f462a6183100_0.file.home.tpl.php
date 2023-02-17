<?php /* Smarty version 3.1.27, created on 2018-06-20 13:59:07
         compiled from "/usr/share/nginx/html/admin/home/view/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18301831985b2ab20b9ba993_03692208%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cd47bf20034dbd2a96201dc22c7f462a6183100' => 
    array (
      0 => '/usr/share/nginx/html/admin/home/view/home.tpl',
      1 => 1529524741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18301831985b2ab20b9ba993_03692208',
  'variables' => 
  array (
    'title' => 0,
    'descripcionPage' => 0,
    'author' => 0,
    'navBar' => 0,
    'menu_lateral' => 0,
    'namePage' => 0,
    'nombre_usuario' => 0,
    'version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b2ab20b9be469_25246665',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b2ab20b9be469_25246665')) {
function content_5b2ab20b9be469_25246665 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18301831985b2ab20b9ba993_03692208';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
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
	<link href="../../resources/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="../../resources/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../resources/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/animate.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/style.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<?php echo '<script'; ?>
 src="../../resources/assets/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
	<!-- begin #header -->
		<?php echo $_smarty_tpl->tpl_vars['navBar']->value;?>

	<!-- end #header -->

	<!-- begin #sidebar -->
		<?php echo $_smarty_tpl->tpl_vars['menu_lateral']->value;?>

	<!-- end #sidebar -->

	<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
			<li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['namePage']->value;?>
</a></li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin page-header -->
		<h1 class="page-header">Bienvenido<small> <?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
</small></h1>
		<!-- end page-header -->

		<div class="panel panel-inverse">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				</div>
				<h4 class="panel-title">Home</h4>
			</div>
			<div class="panel-body">

			</div>
		</div>
	</div>
	<!-- end #content -->

	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<?php echo '<script'; ?>
 src="../../resources/assets/plugins/jquery/jquery-1.9.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/assets/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="../../resources/assets/crossbrowserjs/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/assets/crossbrowserjs/respond.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/assets/crossbrowserjs/excanvas.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="../../resources/assets/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../resources/assets/plugins/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<?php echo '<script'; ?>
 src="../../resources/assets/js/apps.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../global/js/global.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/home.js?<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo '</script'; ?>
>

<!-- ================== END PAGE LEVEL JS ================== -->

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        App.init();
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>