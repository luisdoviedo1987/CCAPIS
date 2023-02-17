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
        <title class="has_page_title">Olvido Contraseña | {$appName}</title>
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
                        <div class="col-lg-6">
                            <div class="card form-card form-card--style-2 border-0 animated fadeInDown">
                                <div class="form-header text-center sm_bg_6">
                                    <div class="form-header-icon" style="margin-top: 10px">
                                        <img src="../resources/img/logo-medismart.png" alt="" class="img-responsive" height="100px">
                                    </div>
                                </div>
                                <div class="form-body">
                                    <div class="text-center px-2">
                                        <h4 class="heading heading-4 strong-200 mb-0" style="margin-top:-10px">Hola {$nombre_usuario}</h4>
                                    </div>
                                    <br>
                                    Por favor ingresa una contraseña nueva <br>
                                    <form class="form-default mt-4" >
                                     <input type="hidden" id="id-user" name="id-user" value="{$id_usuario}">
                                     <input type="hidden" id="token-user" name="token-user" value="{$token_usuario}">

                                        <div class="row mb-3">
                                            <div class="col-lg-12 sm-form-design" >
                                                <input type="text" class="form-control h5-email"
                                                placeholder="Por favor ingresá la nueva contraseña" id="pass-user" name="pass-user">
                                                <label class="control-label">Contraseña</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-12 sm-form-design" >
                                                <input type="text" class="form-control h5-email"
                                                placeholder="Por favor repite la nueva contraseña" id="pass-user2" name="pass-user2">
                                                <label class="control-label">Repite Contraseña</label>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" id="button-recovery-password" name="button-recovery-password"
                                            class="btn btn-styled btn-base-1 mt-4  border-0 text-white pull-right" style="background-color: #003749;">
                                            Cambiar contraseña
                                        </a>
                                    </form>
                                    
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
        <script src="js/forget-password.js?{$version}"></script>
    </body>
</html>