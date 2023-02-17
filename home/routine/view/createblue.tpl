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
        <link rel="icon" type="image/png" sizes="192x192" href="../../resources/img/favicon/android-icon-192x192.png">
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
        <link type="text/css" href="../../resources/css/toastr.css" rel="stylesheet"  >
        <link href="../../resources/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>

        <!--  MODERNIZR JS -->
        <script src="../../resources/plugins/modernizr/modernizr-custom.js"></script>
        <!--  PLUGINS -->
        <link type="text/css" href="../../resources/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
        <link href="../../resources/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
        <link href="../../resources/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
        <link href="../../resources/plugins/parsley/src/parsley.css" rel="stylesheet" />
        <link href="./css/routines.css" rel="stylesheet" />
        <style type="text/css">
            .fontbold {
                font-family: 'Lato', sans-serif;
                font-style: normal;
                font-variant: normal;
                font-weight: 700;
            }

            .fontlight {
                font-family: 'Lato', sans-serif;
                font-weight: 100;
                font-style: normal;
            }

            .fontnormal {
                font-family: 'Lato', sans-serif;
                font-weight: 100;
                font-style: normal;
            }

            @media only screen and (max-width: 2500px) {
                #medismart-logo-badge {
                    height: 100px;
                    margin: 5px;
                }
            }

            @media only screen and (max-width: 1500px) {
                #medismart-logo-badge {
                    height: 100px;
                    margin: 5px;
                }
            }

            @media only screen and (max-width: 570px) {
                #medismart-logo-badge {
                    height: 140px;
                    margin-left: -8px;
                }
            }

            @media only screen and (max-width: 370px) {
                #medismart-logo-badge {
                    height: 125px;
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
                                <nav id="header" class="navbar navbar-expand-lg navbar--bold navbar-light bg-default navbar--bb-1px">
                                    <!--navbar-inverse bg-dark-->
                                    <div class="container navbar-container">
                                        <!-- BEGIN LOGO -->
                                        <a class="navbar-brand" href="../">
                                            <img src="../../resources/img/logo-medismart.png" class="" alt="" height="80px" style="margin: 5px">
                                        </a>
                                        <!--END LOGO-->
                                        <div class="d-inline-block">
                                            <!-- BEGIN NAVBAR TOGGLER  -->
                                            <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main">
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
                            <section id="transparent_menu" class="slice-xl has-bg-cover bg-size-cover" style="background-image: url('../../resources/img/1980x1322.png'); background-position: center center;display: none;">

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
                                                                <a href="javascript:void(0)" class="tooltip_cus fullscreen_element">
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
                                                                        <h5 class="sm-inner-header">Creación de rutina</h5>
                                                                        <div class="sm-inner-desc">
                                                                            Complete toda la informacion que se le solicita
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="/" method="POST" name="form-wizard" class="form-control-with-bg">
                                                                <!-- begin wizard -->
                                                                <div id="wizard">
                                                                    <!-- begin wizard-step -->
                                                                    <ul>
                                                                        <li class="col-md-3 col-sm-4 col-6">
                                                                            <a href="#step-5">
                                                                                <span class="number">1</span>
                                                                                <span class="info text-ellipsis">
                                                                                    Informacion General
                                                                                    <small class="text-ellipsis">Paso 1</small>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="col-md-3 col-sm-4 col-6">
                                                                            <a href="#step-6">
                                                                                <span class="number">2</span>
                                                                                <span class="info text-ellipsis">
                                                                                    Probar
                                                                                    <small class="text-ellipsis">Paso 2</small>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="col-md-3 col-sm-4 col-6">
                                                                            <a href="#step-7">
                                                                                <span class="number">3</span>
                                                                                <span class="info text-ellipsis">
                                                                                    Recurrencia
                                                                                    <small class="text-ellipsis">Paso 3</small>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="col-md-3 col-sm-4 col-6">
                                                                            <a href="#step-8">
                                                                                <span class="number">4</span>
                                                                                <span class="info text-ellipsis">
                                                                                    Completar
                                                                                    <small class="text-ellipsis">Paso 4</small>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <!-- end wizard-step -->
                                                                    <!-- begin wizard-content -->
                                                                    <div>
                                                                        <!-- begin step-1 -->
                                                                        <div id="step-5">
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group row">
                                                                                            <div class="dropdown col-md-2">
                                                                                                <button class="btn btn-base-1 dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                    GET
                                                                                                </button>
                                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">POST</a>
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">PUT</a>
                                                                                                    <a class="dropdown-item" href="javascript:void(0)">DELETE</a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-10">
                                                                                                <div class="input-group">
                                                                                                    <input id="clipboard-default" placeholder="Dirección URL" type="url"  name="url-ws" class="form-control" value="" autocomplete="off">
                                                                                                    <span class="input-group-btn">
                                                                                                        <button class="btn btn-inverse" type="button" data-clipboard-target="#clipboard-default" data-original-title="" title="" aria-describedby="tooltip277446"><i class="fa fa-cloud"></i></button>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="tabs tabs--style-2 col-lg-12" role="tabpanel">
                                                                                                <!-- Nav tabs -->
                                                                                                <ul class="nav nav-tabs custom-nav-wizard" role="tablist">
                                                                                                    <li class="nav-item" role="presentation">
                                                                                                        <a href="#tabTwo-1" role="tab" data-toggle="tab" class="nav-link active text-center text-normal strong-600">Params</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item" role="presentation">
                                                                                                        <a href="#tabTwo-2" role="tab" data-toggle="tab" class="nav-link text-center text-normal strong-600">Authorization</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item" role="presentation">
                                                                                                        <a href="#tabTwo-3" role="tab" data-toggle="tab" class="nav-link text-center text-normal strong-600">Headers</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item" role="presentation">
                                                                                                        <a href="#tabTwo-4" role="tab" data-toggle="tab" class="nav-link text-center text-normal strong-600">Body</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <!-- Tab panes -->
                                                                                                <div class="tab-content">
                                                                                                    <div role="tabpanel" class="tab-pane active" id="tabTwo-1">
                                                                                                        <div class="tab-body">
                                                                                                            <h5 class="m-t-10 cursor-pointer">Parámetros <i class="ion ion-android-add-circle icon-add" data-id="1"></i></h5>
                                                                                                            <div class="col-lg-12 container" data-current="1">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-2 divKeyValue">
                                                                                                                        <div class="form-group">
                                                                                                                            <input type="text" class="form-control keyInput" placeholder="Key" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-3 divKeyValue">
                                                                                                                        <div class="form-group">
                                                                                                                            <input type="text" class="form-control valueInput" placeholder="Value" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                    <div class="col-2">
                                                                                                                        <div class="checkbox">
                                                                                                                            <input id="check01" type="checkbox" class="checkChange" value="1">
                                                                                                                            <label for="check01">
                                                                                                                                Incrementa
                                                                                                                            </label>
                                                                                                                        </div> 
                                                                                                                    </div> 
                                                                                                                   
                                                                                                                    <div class="col-4 divTextConcurrency" style="display: none;">
                                                                                                                        <div class="input-group mb-3">
                                                                                                                            <input type="number" class="form-control concurrencyInput" placeholder="Valor" autocomplete="off">
                                                                                                                            <div class="input-group-append">
                                                                                                                                <select class="form-control concurrencyTypeInput" style="width:100px">
                                                                                                                                    <option value="N" selected> Numero</option>
                                                                                                                                    <option value="D"> Día</option>
                                                                                                                                    <option value="H"> Hora</option>
                                                                                                                                    <option value="M">  Minuto</option>  
                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-1 divBtnDelete">
                                                                                                                        <button type="button" class="btn btn-danger deleteBtn">Eliminar</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div role="tabpanel" class="tab-pane" id="tabTwo-2">
                                                                                                        <div class="tab-body">
                                                                                                            <h5 class="m-t-10">Autorización <i class="ion ion-android-add-circle"></i></h5>
                                                                                                            <div class="col-6">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="select">Tipo de Seguridad</label>
                                                                                                                    <select class="form-control" id="typeAuthentication">
                                                                                                                        <option value="0">Ninguna</option>
                                                                                                                        <option value="1">Autenticación Básica</option>
                                                                                                                        <option value="2">Bearer Token</option>
                                                                                                                        <option value="3">OAuth 2.0</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-12 container">
                                                                                                                <div class="row" id="basicAuthDiv" style="display: none;;">
                                                                                                                    <div class="col-lg-5">
                                                                                                                        <div class="form-group">
                                                                                                                            <input type="text" class="form-control" id="authUser" placeholder="Usuario" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-lg-5">
                                                                                                                        <div class="form-group">
                                                                                                                            <input type="text" class="form-control" id="authPass" placeholder="Contraseña" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row" id="oAuthDiv" style="display: none;">
                                                                                                                    <div class="col-lg-5">
                                                                                                                        <div class="form-group">
                                                                                                                            <label>Token de Acceso</label>
                                                                                                                            <input type="text" class="form-control" id="authToken" placeholder="Token de Acceso" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row" id="bearerDiv" style="display: none;">
                                                                                                                    <div class="col-lg-5">
                                                                                                                        <div class="form-group">
                                                                                                                            <label>Token</label>
                                                                                                                            <input type="text" class="form-control" id="barertoken" placeholder="Token de Acceso" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div role="tabpanel" class="tab-pane" id="tabTwo-3">
                                                                                                        <div class="tab-body">
                                                                                                            <h5 class="m-t-10 cursor-pointer">Cabeceras <i class="ion ion-android-add-circle icon-add" data-id="2"></i></h5>
                                                                                                            <div class="col-lg-12 container" data-current="2"> 
                                                                                                            <div class="row">
                                                                                                            <div class="col-2 divKeyValue">
                                                                                                                <div class="form-group">
                                                                                                                    <input type="text" class="form-control keyInput" placeholder="Key" autocomplete="off">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-3 divKeyValue">
                                                                                                                <div class="form-group">
                                                                                                                    <input type="text" class="form-control valueInput" placeholder="Value" autocomplete="off">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-2">
                                                                                                                <div class="checkbox">
                                                                                                                    <input id="check02" type="checkbox" class="checkChange" value="1">
                                                                                                                    <label for="check02">
                                                                                                                        Incrementa
                                                                                                                    </label>
                                                                                                                </div> 
                                                                                                            </div> 
                                                                                                            
                                                                                                             <div class="col-4 divTextConcurrency" style="display: none;">
                                                                                                                <div class="input-group mb-3">
                                                                                                                    <input type="number" class="form-control concurrencyInput" placeholder="Valor" autocomplete="off">
                                                                                                                    <div class="input-group-append">
                                                                                                                        <select class="form-control concurrencyTypeInput" style="width:100px">
                                                                                                                            <option value="N" selected> Numero</option>
                                                                                                                            <option value="D"> Día</option>
                                                                                                                            <option value="H"> Hora</option>
                                                                                                                            <option value="M">  Minuto</option>  
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-1 divBtnDelete">
                                                                                                                <button type="button" class="btn btn-danger deleteBtn">Eliminar</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div role="tabpanel" class="tab-pane" id="tabTwo-4">
                                                                                                        <div class="tab-body">
                                                                                                            <h5 class="m-t-10 cursor-pointer">Cuerpo de la Petición <i class="ion ion-android-add-circle icon-add iconextra" data-id="3"></i></h5>

                                                                                                            <div class="col-5">
                                                                                                                <div class="form-group">
                                                                                                                    <label for="select">Tipo de Cuerpo</label>
                                                                                                                    <select class="form-control" id="typeBodySelect">
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-12 container" data-current="3"> 
                                                                                                                <div class="row divForm">
                                                                                                                    <div class="col-2 divKeyValue">
                                                                                                                        <div class="form-group">
                                                                                                                            <input type="text" class="form-control keyInput" placeholder="Key" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-3 divKeyValue">
                                                                                                                        <div class="form-group">
                                                                                                                            <input type="text" class="form-control valueInput" placeholder="Value" autocomplete="off">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-2">
                                                                                                                             <div class="checkbox">
                                                                                                                                <input id="check03" type="checkbox" class="checkChange" value="1">
                                                                                                                                <label for="check03">
                                                                                                                                    Incrementa
                                                                                                                                </label>
                                                                                                                            </div> 
                                                                                                                    </div>
                                                                                                                       
                                                                                                                    <div class="col-4 divTextConcurrency" style="display: none;">
                                                                                                                        <div class="input-group mb-3">
                                                                                                                            <input type="number" class="form-control concurrencyInput" placeholder="Valor" autocomplete="off">
                                                                                                                            <div class="input-group-append">
                                                                                                                                <select class="form-control concurrencyTypeInput" style="width:100px">
                                                                                                                                    <option value="N" selected> Numero</option>
                                                                                                                                    <option value="D"> Día</option>
                                                                                                                                    <option value="H"> Hora</option>
                                                                                                                                    <option value="M">  Minuto</option>  
                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-1 divBtnDelete">
                                                                                                                        <button type="button" class="btn btn-danger deleteBtn">Eliminar</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row divRawForm" id="divRawForm" style="display: none;">
                                                                                                                    <div class="col-lg-12">
                                                                                                                        <div class="form-group">
                                                                                                                            <label for="Textarea1">Cuerpo de la Petición</label>
                                                                                                                            <textarea class="form-control" id="bodyRawText" rows="10"></textarea>
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
                                                                            </fieldset>
                                                                        </div>
                                                                        <div id="step-6">
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                                <br>
                                                                                        <span class="d-blockno-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                           Por favor pruebe el servicio web
                                                                                        </span>
                                                                                        <center> <input type="button" class="btn btn-success-medismart" id="btn-test-web" value="Probar servicio web"> </center>
                                                                                   
                                                                                        <div class="col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label for="Textarea1">Cuerpo de la Petición</label>
                                                                                                <textarea class="form-control" id="bodyResponse" readonly="true" rows="10"></textarea>
                                                                                            </div> 
                                                                                        </div>
                                                                                        
                                                                                        <div class="form-group row m-b-10" style="margin-top:10px">
                                                                                            <label class="col-md-3 col-form-label text-md-right"> Indique el nivel del objeto a leer / 
                                                                                                <span class="text-danger">*</span></label>
                                                                                            <div class="col-md-6">
                                                                                                <input type="text"
                                                                                                    name="index"
                                                                                                    id="index"
                                                                                                    placeholder="Ingrese el nivel /"
                                                                                                    class="form-control"
                                                                                                    />
                                                                                            </div>
                                                                                        </div>  

                                                                                      <center> 
                                                                                            <input type="button" class="btn btn-success-medismart showColumns" id="btn-get-data" value="Obtener datos"> <br>
                                                                                      </center>

                                                                                      <div class="table-responsive showColumns" style="margin-top:15px" >
                                                                                        <table id="dataTables-json" class="table table-striped table-bordered">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Nombre</th>
                                                                                                    <th>Resultado</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                            </tbody>
                                                                                        </table>
                                                                                     </div>

                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div id="step-7">
                                                                            <fieldset>
                                                                                <div class="row">
                                                                                    <div class="col-md-8">
                                                                                        <span class="d-blockno-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                            Seleccione la Recurrencia
                                                                                        </span>
                                                                                        <div class="form-group row m-b-10">
                                                                                            <label class="col-md-3 col-form-label text-md-right">Día
                                                                                                <span class="text-danger">*</span></label>
                                                                                            <div class="col-md-6">
                                                                                                <input type="number" name="day" id="day"  placeholder="Dia" min="0" max="365" class="form-control" value="1"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row m-b-10">
                                                                                            <label class="col-md-3 col-form-label text-md-right">Hora
                                                                                                <span class="text-danger">*</span></label>
                                                                                            <div class="col-md-6">
                                                                                                <input type="number" name="hour" id="hour" placeholder="Horas" min="0" max="24" class="form-control" value="0" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row m-b-10">
                                                                                            <label class="col-md-3 col-form-label text-md-right">Minuto
                                                                                                 <span class="text-danger">*</span></label>
                                                                                            <div class="col-md-6">
                                                                                                <input type="number" name="minutes" id="minutes" placeholder="Confirm password" min="0" max="60" class="form-control" value="0" />
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row m-b-10" style="margin-top:10px">
                                                                                            <label class="col-md-3 col-form-label text-md-right">Nombre de Rutina
                                                                                                <span class="text-danger">*</span></label>
                                                                                            <div class="col-md-6">
                                                                                                <input type="text"
                                                                                                    name="routine_name"
                                                                                                    id="routine_name"
                                                                                                    placeholder="Ingrese el nombre"
                                                                                                    class="form-control"
                                                                                                    />
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
                                                                <!-- end wizard -->
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
       
        <img src="" class="" alt="" id="image-generated"></center>
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
        <script src="../../resources/js/toastr.min.js"></script>
        <script src="https://malsup.github.io/jquery.blockUI.js"></script>

        <script src="../../resources/plugins/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="../../resources/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="../../resources/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <!-- APP JS -->
        <script src="../../resources/js/app.js"></script>
        <script src="../../global/js/global.js"></script>
        <script src="./js/routinesblue.js"></script>
    </body>

</html>