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
        <title class="has_page_title">Inicio | {$appName}</title>
        <link rel="stylesheet" href="../../resources/plugins/bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- JQUERY UI -->
        <link type="text/css" href="../../resources/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet">
        <!-- STYLE -->
        <link id="stylesheet" type="text/css" href="../../resources/css/style.css" rel="stylesheet" media="screen">
        <!-- CUSTOM STYLE -->
        <link type="text/css" href="../../resources/css/custom.css" rel="stylesheet">
        <!--  MODERNIZR JS -->
        <script src="../../resources/plugins/modernizr/modernizr-custom.js"></script>
        <!--  PLUGINS -->
        <link type="text/css" href="../../resources/css/toastr.css" rel="stylesheet"  >
        <link type="text/css" href="../../resources/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
        <link href="../../resources/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

        <link href="../../resources/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet"/>
        <link href="../../resources/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet"/>
        <link href="../../resources/plugins/parsley/src/parsley.css" rel="stylesheet"/>
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
                                            <li class="breadcrumb-item"><a href="../home/">Inicio</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                        </ol>
                                    </div>
                                    <!--END BREADCRUMB-->
                                     <div class="sm-content">
                                <div class="sm-content-box">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sm-wrapper" data-sortable-id="sm_form_wizard_validation_2">
                                                <div class="title_box sm-header-style-1">
                                                    <div class="sm-actions">
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus fullscreen_element">
                                                            <span class="extra-tooltip">Fullscreen</span>
                                                            <i class="material-icons">fullscreen</i>
                                                        </a>
                                                    </div>
                                                    <h6 class="sm-header nodrag">
                                                        Rutina
                                                    </h6>
                                                </div>
                                                <div class="sm-box">
                                                    <div class="sm-info">
                                                        <div class="sm-info-with-icon">
                                                            <div class="sm-info-icon">
                                                                <div class="icon ion-ios-clock-outline"></div>
                                                            </div>
                                                            <div class="sm-info-text">
                                                                <h5 class="sm-inner-header">Carga de Archivo</h5>
                                                                <div class="sm-inner-desc">
                                                                    Complete toda la informacion que se le solicita
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div name="form-wizard" class="form-control-with-bg">
                                                        <!-- begin wizard -->
                                                    <form name="create-routine" id="create-routine" >

                                                        <div id="wizard">
                                                            <!-- begin wizard-step -->
                                                            <ul>
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-5">
                                                                        <span class="number">1</span>
                                                                        <span class="info text-ellipsis">
                                                                            Carga de archivo
                                                                            <small class="text-ellipsis">Paso 1</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-6">
                                                                        <span class="number">2</span>
                                                                        <span class="info text-ellipsis">
                                                                            Verificación
                                                                            <small class="text-ellipsis">Paso 2</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                               
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-8">
                                                                        <span class="number">3</span>
                                                                        <span class="info text-ellipsis">
                                                                            Cargar
                                                                            <small class="text-ellipsis">Paso 3</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!-- end wizard-step -->
                                                            <!-- begin wizard-content -->
                                                            <div>
                                                                <div id="step-5">
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="sm-wrapper" data-sortable-id="sm_form_plugins_19">
                                                                                    <div class="sm-box">
                                                                                        <div class="sm-info">
                                                                                            <div class="sm-info-with-icon">
                                                                                                <div class="sm-info-icon">
                                                                                                    <div class="icon ion-ios-cloud-download-outline"></div>
                                                                                                </div>
                                                                                                <div class="sm-info-text">
                                                                                                    <h5 class="sm-inner-header">Carga de archivo</h5>   
                                                                                                 <div class="sm-inner-desc">
                                                                                                         Nota: Archivos permitidos para la carga deben de ser formato .xls, .xlsx, .csv<br>
                                                                                                         * Asegurese que la primera linea del archivo siempre sean los nombres de la columna.<br>
                                                                                                         * Asegurese que el archivo que esta cargado contenga las mismas columnas 
                                                                                                 </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropzone dropzone-area" id="dpz-single-file" accept="text/csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                                                                            <div class="dz-message needsclick">
                                                                                                Suelte el archivo aquí o haga clic para cargar.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="step-6">
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-12 ">
                                                                                <span class="d-block no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                    Por favor indique la posicion de la columna de titulos
                                                                                </span>
                                                                                <div class="form-group row m-b-10">
                                                                                    <input type="hidden" id="idRoutine" name="idRoutine" value="{$idRoutine}">
                                                                                    <div class="col-md-12">
                                                                                                <br>
                                                                                        <center> <input type="button" class="btn btn-success-medismart" id="btn-read-file" value="Revisar Archivo"> </center>
                                                                                    </div>
                                                                                      <div class="table-responsive" id="table-file">
                                                                                        <table id="dataTables-file" class="table table-striped table-bordered">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Columna Original</th>
                                                                                                    <th>Columna Archivo</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            </tbody>
                                                                                        </table>
                                                                                     </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="step-8">
                                                                    <div class="jumbotron m-b-0 text-center">
                                                                        <h2 class="text-inverse">Ya casi terminas!!
                                                                            </h2>
                                                                            <div class="form-group">
                                                                                <div class="checkbox">
                                                                                    <input id="checkbox1" type="checkbox" autocomplete="off">
                                                                                    <label for="checkbox1">
                                                                                       Por favor confirme que toda la información fue revisada
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        <p><a href="javascript:void(0)"
                                                                              class="btn btn-primary btn-lg" id="btn-create-routine">Crear rutina</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end wizard-content -->
                                                         </div>
                                                      </div>
                                                  </form>

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
    <img src="" class="" alt=""  id="image-generated"></center>
    <!-- TO TOP -->
    <a href="javascript:void(0)" class="back-to-top btn-back-to-top sm_bg_1"></a>
    <!-- CORE JS -->
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
    <script src="../../resources/plugins/parsley/dist/parsley.js"></script>
    <script src="../../resources/plugins/textarea-autosize/autosize.min.js"></script>
    <script src="../../resources/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../../resources/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
    <script src="../../resources/plugins/dropzone/dropzone.min.js"></script>
    <script src="../../resources/js/toastr.min.js"></script>
    <script src="https://malsup.github.io/jquery.blockUI.js"></script>

    <script src="../../resources/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="../../resources/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="../../resources/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

    <!-- APP JS -->
    <script src="../../global/js/global.js?{$version}"></script>
    <script src="../../resources/js/app.js"></script>
    <script src="js/routineLoadFile.js"></script>
    {* <script src="../../resources/js/sm_form_wizard_validation.js"></script> *}

</body>
</html>