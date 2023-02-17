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
        <title class="has_page_title">Listado Usuario | Portal Medismart</title>
        <link rel="stylesheet" href="../../resources/plugins/bootstrap/css/bootstrap.min.css?{$version}" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <!-- JQUERY UI -->
        <link type="text/css" href="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <!-- STYLE -->
        <link id="stylesheet" type="text/css" href="../../resources/css/style.css?{$version}" rel="stylesheet" media="screen">
        <!-- CUSTOM STYLE -->
        <link type="text/css" href="../../resources/css/custom.css" rel="stylesheet">
        <link type="text/css" href="../../resources/css/toastr.css" rel="stylesheet"  >
        <!--  MODERNIZR JS -->
        <script src="../../resources/plugins/modernizr/modernizr-custom.js"></script>
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
                                        
                                        {$menu}
                                        
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
                                            <li class="breadcrumb-item active" aria-current="page">Usuarios Registrados</li>
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
                                                                    Listado de Usuario Registrados
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
                                                                                    <h5 class="sm-inner-header">Usuario registrados</h5>

                                                                                </div>
                                                                            </div>
                                                                                                                                                                                                                                        <button class="btn btn-success" id="addUser" style="float:right">Agregar</button><br>

                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <table id="dataTables-usuarios" class="table table-striped table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th></th>
                                                                                        <th></th>
                                                                                        <th>CLI</th>
                                                                                        <th>Cedula</th>
                                                                                        <th>Nombre</th>
                                                                                        <th>Email</th>
                                                                                        <th>Telefono</th>
                                                                                        <th>Fecha de Registro</th>
                                                                                        <th>Ultima Modificacion</th>
                                                                                        <th>Estado</th>
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
                            {$footer}
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

<div class="modal fade" id="modalFicha" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                     <fieldset class="form-horizontal">
                                <legend>Información</legend>
                                <input type="hidden" id="idcli" class="form-control" placeholder="" readonly="true">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Numero CLI</label>
                                    <div class="col-md-12">
                                        <input type="text" id="numerocli" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Cedula</label>
                                    <div class="col-md-12">
                                        <input type="text" id="cedulacli" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nombre Completo</label>
                                    <div class="col-md-12">
                                        <input type="text" id="nombrecli" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-12">
                                        <input type="text" id="emailcli" class="form-control" placeholder="">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Telefono</label>
                                    <div class="col-md-12">
                                        <input type="text" id="telefonocli" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Rol Asignado</label>
                                    <div class="col-md-12">
                                    <select name="idrol" id="idrol" class="form-control select2">
                                        {$roles}
                                    </select>
                                   </div>
                                </div>
                           
                                                        
                            <div class="form-group">
                                <label class="col-md-4 control-label">Estado</label>
                                <div class="col-md-12">
                                    <select name="idstatus" id="idstatus" class="form-control select2">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <button id="actualizar-usuario" class="btn btn-block btn-success" type="button">Actualizar</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                   
                                    <button id="eliminar-usuario" class="btn btn-block btn-danger" type="button">Eliminar</button>
                                </div>
                            </div>
                            <legend>Ingreso</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Fecha Creacion</label>
                                <div class="col-md-12">
                                    <input type="text" id="fechacreacion" class="form-control" placeholder="" readonly="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Fecha Ultima Modificacion</label>
                                <div class="col-md-12">
                                    <input type="text" id="fechamodi" class="form-control" placeholder="" readonly="true">
                                </div>
                            </div>
                            <legend>Credenciales</legend>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button id="id-resend-password" class="btn btn-block btn-success send-email" >Restaurar Contraseña</button>
                                </div>
                            </div>
                            <center>Esta acción enviara un correo al usuario para que inicie su proceso de restauración de contraseña</center>
                        </fieldset>
                          
                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFichaCrear" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                     <fieldset class="form-horizontal">
                                <legend>Información</legend>
                                <input type="hidden" id="idcli" class="form-control" placeholder="" readonly="true">
                                
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Cedula</label>
                                    <div class="col-md-12">
                                        <input type="text" id="cedulacliadd" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nombre Completo</label>
                                    <div class="col-md-12">
                                        <input type="text" id="nombrecliadd" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-12">
                                        <input type="text" id="emailcliadd" class="form-control" placeholder="">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Telefono</label>
                                    <div class="col-md-12">
                                        <input type="text" id="telefonocliadd" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Contraseña</label>
                                    <div class="col-md-12">
                                        <input type="password" id="passadd" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Rol Asignado</label>
                                    <div class="col-md-12">
                                    <select name="idrol" id="idroladd" class="form-control select2">
                                        {$roles}
                                    </select>
                                   </div>
                                </div>
 
                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <button id="crear-usuario" class="btn btn-block btn-success" type="button">Crear</button>
                                </div>
                            </div>
                            
                        </fieldset>
                          
                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <img src="" class="" alt=""  id="image-generated"></center>
    <!-- TO TOP -->
    <a href="javascript:void(0)" class="back-to-top btn-back-to-top sm_bg_1"></a>
    <!-- CORE JS -->
    <script src="../../resources/plugins/jquery/jquery.min.js"></script>
    <script src="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../../resources/plugins/popper/popper.min.js"></script>
    <script src="../../resources/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../resources/js/slidebar/slidebar.js"></script>
    <script src="../../resources/js/classie.js"></script>
    <script src="../../resources/js/side_menu.js"></script>
    <!-- PLUGINS -->
    <script src="../../resources/plugins/pace/pace.min.js"></script>
    <script src="../../resources/plugins/smooth-scrollbar/smooth-scrollbar.js"></script>
    <script src="../../resources/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="../../resources/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../resources/plugins/placeholders/placeholders.js"></script>
    <script src="../../resources/plugins/typeit/typeit.js"></script>
    <script src="../../resources/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../resources/plugins/ResizeSensor/ResizeSensor.js"></script>
    <script src="../../resources/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../../resources/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../../resources/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../resources/plugins/select2/js/select2.min.js"></script>

    <script src="../../resources/js/toastr.min.js"></script>
    <script src="../../resources/js/html2canvas.min.js"></script>
    <script src="../../resources/js/canvas2image.js"></script>
    <script src="../../resources/js/jquery.quickfit.js"></script>
    <!-- APP JS -->
    <script src="../../resources/js/app.js"></script>
    <script src="../../global/js/global.js?{$version}"></script>
    <script src="js/home.js"></script>
</body>
</html>