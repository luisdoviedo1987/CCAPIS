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
    <title class="has_page_title">Ingreso | {$appName}</title>
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
    <script src="../resources/plugins/modernizr/modernizr-custom.js"></script>
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
                <div class="col-lg-4">
                    <div class="card form-card form-card--style-2 border-0 animated fadeInDown">
                        <div class="form-header text-center sm_bg_6">
                            <div class="form-header-icon" style="margin-top: 10px">
                                <img src="../resources/img/logo-medismart.png" alt="" class="img-responsive" height="45px">
                            </div>
                        </div>
                        <div class="form-body" style="margin-top: -10px">
                            <form class="form-default" >
                                {$mensaje}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <input id="username" name="username" placeholder="Ingresa tu email" type="email" class="form-control form-control-lg">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group has-feedback">
                                            <label for="password">Contraseña</label>
                                            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" class="form-control form-control-lg">
                                        </div>
                                       
                                         <label class="pull-right" style="text-align: right;">¿Olvidaste tu contraseña?  Haz click <a href="../forgetPassword/">aquí</a></label> 
                                    </div>
                                    
                                </div>
                                
                            
                                 <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="chkRemember" checked>
                                            <label for="chkRemember">Recuerdame</label>
                                        </div>
                                    </div>
                                </div>


                                <a href="javascript:void(0)" id="button-sign-in" name="button-sign-in" class="btn btn-styled btn-lg btn-block text-white mt-4" style="background-color: #003749;">Ingresar</a>

                            </form>
                           
                            
                            {* <div class="m-t-20 f-s-12">
                                <center><label class="pull-center" style="text-align: center;">¿Primera vez que ingresa?</label></center>
                                 <a href="../sign-up/" id="button-sign-in" name="button-sign-in" class="btn btn-styled btn-medismart-yellow btn-lg btn-block text-white " >Crear usuario</a>
                            </div> *}
                            
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END MAIN WRAPPER -->

<!-- CORE JS -->
<script src="../resources/plugins/jquery/jquery.min.js"></script>
<script src="../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../resources/plugins/popper/popper.min.js"></script>
<script src="../resources/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../resources/js/slidebar/slidebar.js"></script>
<script src="../resources/js/classie.js"></script>
<script src="../resources/js/side_menu.js"></script>

<!-- PLUGINS -->
<script src="../resources/plugins/pace/pace.min.js"></script>
<script src="../resources/plugins/smooth-scrollbar/smooth-scrollbar.js"></script>
<script src="../resources/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="../resources/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="../resources/plugins/placeholders/placeholders.js"></script>
<script src="../resources/js/toastr.min.js"></script>

<!-- APP JS -->
<script src="../resources/js/app.js?{$version}"></script>
<script src="../global/js/global.js?{$version}"></script>
<script src="js/sign-in.js?{$version}"></script>

</body>
</html>

