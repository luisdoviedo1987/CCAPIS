<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title class="has_page_title">Form Wizard + Validation - Smrithi | PVR Tech Studio</title>
    <!-- FAVICON -->
    <link href="http://via.placeholder.com/32x32" rel="icon" type="image/png">
    <!-- BOOTSTRAP -->
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
    <link type="text/css" href="../../resources/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="../../resources/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet"/>
    <link href="../../resources/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet"/>
    <link href="../../resources/plugins/parsley/src/parsley.css" rel="stylesheet"/>
</head>
<body class="">

<!-- BEGIN PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>
<!-- END PRELOADER -->

<!-- BEGIN MAIN WRAPPER -->
<div class="body-wrap">
    <!--BEGIN SM CONTAINER-->
    <div id="sm-container" class="sm-container">
        <div class="sm-menu sm-effect-1" id="menu-1">
            <div class="sm-profile">
                <div class="sm-profile-user-wrapper">
                    <div class="profile-user-image">
                        <img src="http://via.placeholder.com/128x128" class="img-circle rounded-circle" alt="pvrtechstudio"/>
                    </div>
                    <div class="profile-user-info">
                        <span class="profile-user-name">Administrator</span>
                        <span class="profile-user-email">pvrtechstudio</span>
                    </div>
                </div>
            </div>
        </div>
        <nav id="ml-menu" class="menu sm-menu sm-effect-1">
            <a class="action--close hide">close</a>
            <div class="menu__wrap sm-menu-list">
                <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="javascript:void(0)">
                            <i class="icon ion-ios-home-outline"></i> Dashboard
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="javascript:void(0)">
                            <i class="icon ion-ios-settings-strong"></i> UI Elements
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="javascript:void(0)">
                            <i class="icon ion-ios-book-outline"></i> Pages
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-4" aria-owns="submenu-4" href="javascript:void(0)">
                            <i class="icon ion-ios-briefcase-outline"></i> Forms
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-5" aria-owns="submenu-5" href="javascript:void(0)">
                            <i class="icon ion-ios-cog-outline"></i> Applications
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_widgets.html">
                            <i class="icon ion-ios-analytics-outline"></i> Widgets
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-6" aria-owns="submenu-5" href="javascript:void(0)">
                            <i class="icon ion-ios-cog-outline"></i> Levels
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 1 -->
                <ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Dashboard">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="index.html">
                            <i class="icon ion-ios-pie-outline"></i> Dashboard 01
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_dashboard_02.html">
                            <i class="icon ion-ios-chatboxes-outline"></i> Dashboard 02
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_dashboard_03.html">
                            <i class="icon ion-ios-chatbubble-outline"></i> Dashboard 03
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_dashboard_04.html">
                            <i class="icon ion-ios-albums-outline"></i> Dashboard 04
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_dashboard_05.html">
                            <i class="icon ion-ios-baseball-outline"></i> Dashboard 05
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 2 -->
                <ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu"
                    aria-label="UI Elements">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_accordion.html">
                            <i class="icon ion-ios-albums-outline"></i> Accordion
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_alerts.html">
                            <i class="icon ion-ios-alarm-outline"></i> Alerts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_badges.html">
                            <i class="icon ion-ios-albums-outline"></i> Badges
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_buttons.html">
                            <i class="icon ion-ios-baseball-outline"></i> Buttons
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_cards.html">
                            <i class="icon ion-ios-chatbubble-outline"></i> Cards
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_carousel.html">
                            <i class="icon ion-ios-chatboxes-outline"></i> Carousel
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_countdown.html">
                            <i class="icon ion-ios-pie-outline"></i> Countdown
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_dropdowns.html">
                            <i class="icon ion-ios-americanfootball-outline"></i> Dropdowns
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_lightbox.html">
                            <i class="icon ion-ios-analytics-outline"></i> Lightbox
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_google_maps.html">
                            <i class="icon ion-ios-at-outline"></i> Google Maps
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_vector_maps.html">
                            <i class="icon ion-ios-barcode-outline"></i> Vector Maps
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_modals.html">
                            <i class="icon ion-ios-basketball-outline"></i> Modals
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_pagination.html">
                            <i class="icon ion-ios-bell-outline"></i> Pagination
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_progress_bars.html">
                            <i class="icon ion-ios-body-outline"></i> Progress Bars
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_notification.html">
                            <i class="icon ion-ios-bolt-outline"></i> Notification
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_tables.html">
                            <i class="icon ion-ios-book-outline"></i> Tables
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_tabs.html">
                            <i class="icon ion-ios-bookmarks-outline"></i> Tabs
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_tree_view.html">
                            <i class="icon ion-ios-box-outline"></i> Tree View
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_typography.html">
                            <i class="icon ion-ios-briefcase-outline"></i> Typography
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_sweet_alert.html">
                            <i class="icon ion-ios-browsers-outline"></i> Sweet Alert
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_icon_blocks.html">
                            <i class="icon ion-ios-calculator-outline"></i> Icon Blocks
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_spinner_buttons.html">
                            <i class="icon ion-ios-camera-outline"></i> Spinner Buttons
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_testimonial_blocks.html">
                            <i class="icon ion-ios-cart-outline"></i> Testimonial Blocks
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_comment_blocks.html">
                            <i class="icon ion-ios-compose-outline"></i> Comment Blocks
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_morris_charts.html">
                            <i class="icon ion-ios-americanfootball-outline"></i> Morris Charts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_flot_charts.html">
                            <i class="icon ion-ios-cloud-outline"></i> Flot Charts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_chartjs.html">
                            <i class="icon ion-ios-cloudy-outline"></i> ChartJS
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_echarts.html">
                            <i class="icon ion-ios-cog-outline"></i> ECharts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_chartist.html">
                            <i class="icon ion-ios-contact-outline"></i> Chartist
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_rickshaw.html">
                            <i class="icon ion-ios-copy-outline"></i> Rickshaw
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_am_charts.html">
                            <i class="icon ion-ios-email-outline"></i> AM Charts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_high_charts.html">
                            <i class="icon ion-ios-download-outline"></i> High Charts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_fusion_charts.html">
                            <i class="icon ion-ios-eye-outline"></i> Fusion Charts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_recaptcha.html">
                            <i class="icon ion-ios-eye-outline"></i> Recaptcha
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 3 -->
                <ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Pages">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_layouts.html">
                            <i class="icon ion-ios-paper-outline"></i> Layouts
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_login.html">
                            <i class="icon ion-log-in"></i> Login
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_registration.html">
                            <i class="icon ion-ios-personadd-outline"></i> Registration
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_reset_password.html">
                            <i class="icon ion-ios-eye-outline"></i> Reset Password
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_forgot_password.html">
                            <i class="icon ion-ios-folder-outline"></i> Forgot Password
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_lock_screen.html">
                            <i class="icon ion-ios-locked-outline"></i> Lock Screen
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_error_pages.html">
                            <i class="icon ion-ios-wineglass-outline"></i> Error Pages
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_cookie.html">
                            <i class="icon ion-ios-game-controller-b-outline"></i> Cookie
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_profile.html">
                            <i class="icon ion-ios-person-outline"></i> Profile
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_ecommerce_profile.html">
                            <i class="icon ion-ios-cart-outline"></i> E-Commerce Profile
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_invoice.html">
                            <i class="icon ion-ios-infinite-outline"></i> Invoice
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_search_result.html">
                            <i class="icon ion-ios-color-filter-outline"></i> Search Result
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_material_icons.html">
                            <i class="icon ion-ios-world"></i> Material Icons
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_font_awesome.html">
                            <i class="icon ion-ios-videocam-outline"></i> Font Awesome
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_simple_line_icons.html">
                            <i class="icon ion-ios-undo-outline"></i> Simple Line Icons
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_weather_icons.html">
                            <i class="icon ion-ios-cloudy-outline"></i> Weather Icons
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_ionicons.html">
                            <i class="icon ion-ios-tennisball-outline"></i> Ionicons
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_timeline.html">
                            <i class="icon ion-ios-trash-outline"></i> Timeline
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_email_template.html">
                            <i class="icon ion-ios-email-outline"></i> Email Templates
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 4 -->
                <ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Forms">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_form_elements.html">
                            <i class="icon ion-ios-paper-outline"></i> Form Elements
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_form_plugins.html">
                            <i class="icon ion-ios-play-outline"></i> Form Plugins
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_form_wizard_validation.html">
                            <i class="icon ion-ios-speedometer-outline"></i> Form Wizard + Validation
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_form_validation.html">
                            <i class="icon ion-ios-sunny-outline"></i> Form Validation
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_editors.html">
                            <i class="icon ion-ios-musical-notes"></i> Editors
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 5 -->
                <ul data-menu="submenu-5" id="submenu-5" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Applications">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_scrumboard.html">
                            <i class="icon ion-ios-rose-outline"></i> Scrumboard
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_email_application.html">
                            <i class="icon ion-ios-refresh-outline"></i> Email Application
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_chat_application.html">
                            <i class="icon ion-ios-printer-outline"></i> Chat Application
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_contacts_application.html">
                            <i class="icon ion-ios-person-outline"></i> Contacts Application
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_pricing_tables.html">
                            <i class="icon ion-ios-pricetags-outline"></i> Pricing Tables
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_ecommerce_application.html">
                            <i class="icon ion-ios-cart-outline"></i> E-commerce Application
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 6 -->
                <ul data-menu="submenu-6" id="submenu-6" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Applications">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_scrumboard.html">
                            <i class="icon ion-ios-rose-outline"></i> L 1
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_email_application.html">
                            <i class="icon ion-ios-refresh-outline"></i> L 2
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-7" aria-owns="submenu-5" href="javascript:void(0)">
                            <i class="icon ion-ios-cog-outline"></i> L 3
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 7 -->
                <ul data-menu="submenu-7" id="submenu-7" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Applications">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_scrumboard.html">
                            <i class="icon ion-ios-rose-outline"></i> L 3.1
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_email_application.html">
                            <i class="icon ion-ios-refresh-outline"></i> L 3.2
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" data-submenu="submenu-8" aria-owns="submenu-5" href="javascript:void(0)">
                            <i class="icon ion-ios-cog-outline"></i> L 3.3
                        </a>
                    </li>
                </ul>
                <!-- SUBMENU 8 -->
                <ul data-menu="submenu-8" id="submenu-8" class="menu__level" tabindex="-1" role="menu"
                    aria-label="Applications">
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_scrumboard.html">
                            <i class="icon ion-ios-rose-outline"></i> L 3.1.1
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="sm_email_application.html">
                            <i class="icon ion-ios-refresh-outline"></i> L 3.1.2
                        </a>
                    </li>
                    <li class="menu__item" role="menuitem">
                        <a class="menu__link" href="javascript:void(0)">
                            <i class="icon ion-ios-cog-outline"></i> L 3.1.3
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- BEGIN SM PUSHER -->
        <div class="sm-pusher">
            <div class="sm-content">
                <div class="sm-content-inner">
                    <!-- BEGIN HEADER -->
                    <div class="header">
                        <!-- BEGIN TOP BAR -->
                        <div class="top-navbar" id="top-navbar">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="aux-text d-none d-md-inline-block">
                                            <ul class="inline-links inline-links--style-1">
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="javascript:void(0)"><i class="fa fa-phone"></i> +91 915 954
                                                        7048</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.pvrtechstudio.com/" target="_blank"><i
                                                            class="fa fa-globe"></i>
                                                        pvrtechstudio.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <nav class="top-navbar-menu">
                                            <ul class="top-menu">
                                                <li>
                                                    <a href="javascript:void(0)">Sign in</a>
                                                </li>
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="javascript:void(0)">Create account</a>
                                                </li>
                                                <li id="open_ms_menu">
                                                    <a href="javascript:void(0)" class=""><i class="ion-grid"></i> Apps</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" id="btn-search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-bell"></i>
                                                    </a>
                                                    <ul class="sub-menu" id="notification_mobile">
                                                        <li>
                                                            <div class="dropdown-cart px-0">
                                                                <div class="dc-header">
                                                                    <h3 class="heading heading-6 strong-600">
                                                                        4 New Notifications
                                                                    </h3>
                                                                </div>
                                                                <div id="notification_scrollbar">
                                                                    <div class="dc-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dc-image">
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="http://via.placeholder.com/128x128"
                                                                                         class="img-fluid rounded-circle"
                                                                                         alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="dc-content">
                                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                <a href="javascript:void(0)">
                                                                                    Server Error Reports
                                                                                </a>
                                                                            </span>
                                                                                <span class="dc-quantity">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                            </span>
                                                                            </div>
                                                                            <div class="dc-actions">
                                                                                <button>
                                                                                    <i class="ion-close"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dc-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dc-image">
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="http://via.placeholder.com/128x128"
                                                                                         class="img-fluid rounded-circle"
                                                                                         alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="dc-content">
                                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                <a href="javascript:void(0)">
                                                                                     New User Registered
                                                                                </a>
                                                                            </span>
                                                                                <span class="dc-quantity">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                            </span>
                                                                            </div>
                                                                            <div class="dc-actions">
                                                                                <button>
                                                                                    <i class="ion-close"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dc-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dc-image">
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="http://via.placeholder.com/128x128"
                                                                                         class="img-fluid rounded-circle"
                                                                                         alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="dc-content">
                                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                <a href="javascript:void(0)">
                                                                                     New Email From John
                                                                                </a>
                                                                            </span>
                                                                                <span class="dc-quantity">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                            </span>
                                                                            </div>
                                                                            <div class="dc-actions">
                                                                                <button>
                                                                                    <i class="ion-close"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dc-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dc-image">
                                                                                <a href="javascript:void(0)">
                                                                                    <img src="http://via.placeholder.com/128x128"
                                                                                         class="img-fluid rounded-circle"
                                                                                         alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="dc-content">
                                                                            <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                <a href="javascript:void(0)">
                                                                                    John Smith
                                                                                </a>
                                                                            </span>
                                                                                <span class="dc-quantity">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                            </span>
                                                                            </div>
                                                                            <div class="dc-actions">
                                                                                <button>
                                                                                    <i class="ion-close"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="py-4 text-center">
                                                                    <ul class="inline-links inline-links--style-3">
                                                                        <li class="">
                                                                            <a href="javascript:void(0)"
                                                                               class="btn btn-styled btn-sm btn-base-1 text-white text-capitalize">
                                                                                My account
                                                                            </a>
                                                                        </li>
                                                                        <li class="">
                                                                            <a href="javascript:void(0)"
                                                                               class="btn btn-styled btn-sm btn-base-1 text-white text-capitalize">
                                                                                View All
                                                                            </a>
                                                                        </li>
                                                                        <li class="">
                                                                            <a href="javascript:void(0)"
                                                                               class="btn btn-styled btn-sm btn-base-1 text-white text-capitalize">
                                                                                Clear All
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="aux-languages dropdown">
                                                    <a href="javascript:void(0)">
                                                        <img src="../../resources/img/flags/png/in.png" alt="pvrtechstudio">
                                                    </a>
                                                    <ul id="auxLanguages" class="sub-menu">
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <img src="../../resources/img/flags/png/in.png"
                                                                     alt="pvrtechstudio">
                                                                <span class="language">India</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <img src="../../resources/img/flags/png/us.png"
                                                                     alt="pvrtechstudio">
                                                                <span class="language">United States</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <img src="../../resources/img/flags/png/en.png"
                                                                     alt="pvrtechstudio">
                                                                <span class="language">England</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)">
                                                                <img src="../../resources/img/flags/png/au.png"
                                                                     alt="pvrtechstudio">
                                                                <span class="language">Australia</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle has-badge" href="javascript:void(0)"
                                                       data-toggle="dropdown"
                                                       data-hover="dropdown"
                                                       aria-expanded="false">
                                                        <span class="dropdown-text strong-600 d-none d-lg-inline-block d-xl-inline-block">
                                                            <i class="fa fa-user"></i> Admin
                                                        </span>
                                                        <span class="dropdown-text strong-600 d-xl-none d-lg-none d-md-inline-block">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                                                        <h6 class="dropdown-header">Navigation</h6>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <span class="float-right badge badge-primary">4</span>
                                                            <i class="ion-ios-email-outline icon-lg text-primary"></i>Messages
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="ion-ios-person-outline icon-lg text-primary"></i>Profile
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="ion-ios-gear-outline icon-lg text-primary"></i>Settings
                                                        </a>
                                                        <div class="dropdown-divider" role="presentation"></div>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="ion-log-out icon-lg text-primary"></i>Logoff
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="btn-st-trigger"
                                                       data-effect="sm-effect-1">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END TOP BAR-->

                        <!-- BEGIN SEARCH -->
                        <div class="search sm_bg_2">
                            <i id="btn-search-close" class="icon-close btn--search-close"></i>
                            <form class="search__form" action="index.html">
                                <input class="search__input" name="search" type="search" placeholder="Search.."
                                       autocomplete="off"
                                       spellcheck="false"/>
                                <span class="search__info">Hit enter to search or ESC to close</span>
                            </form>
                            <div class="search__related">
                                <div class="search__suggestion">
                                    <h3>May We Suggest?</h3>
                                    <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes
                                        #yesyes #aliens
                                        #green</p>
                                </div>
                                <div class="search__suggestion">
                                    <h3>Is It This?</h3>
                                    <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny
                                        #catgif #broken
                                        #lost</p>
                                </div>
                                <div class="search__suggestion">
                                    <h3>Needle, Where Art Thou?</h3>
                                    <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes
                                        #aliens #green
                                        #drone</p>
                                </div>
                            </div>
                        </div>
                        <!-- END SEARCH -->

                        <!-- BEGIN NAVBAR -->
                        <nav id="header"
                             class="navbar navbar-expand-lg navbar--bold navbar-light bg-default navbar--bb-1px">
                            <!--navbar-inverse bg-dark-->
                            <div class="container navbar-container">
                                <!-- BEGIN LOGO -->
                                <a class="navbar-brand" href="index.html">
                                    <img src="http://via.placeholder.com/106x20" class="" alt="pvrtechstudio">
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

                                <div class="collapse navbar-collapse align-items-center justify-content-end"
                                     id="navbar_main">
                                    <!-- BEGIN NAVBAR LINKS -->
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                                               data-toggle="dropdown">
                                                <i class="icon ion-ios-home-outline icon_nav"></i> Dashboard
                                            </a>
                                            <ul class="dropdown-menu sm_p_t_b">
                                                <li class="nav-item">
                                                    <a href="index.html" class="dropdown-item">Dashboard 01</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sm_dashboard_02.html" class="dropdown-item">Dashboard
                                                        02</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sm_dashboard_03.html" class="dropdown-item">Dashboard
                                                        03</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sm_dashboard_04.html" class="dropdown-item">Dashboard
                                                        04</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sm_dashboard_05.html" class="dropdown-item">Dashboard
                                                        05</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown megamenu">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-settings-strong icon_nav"></i> UI Elements
                                            </a>

                                            <div class="dropdown-menu">
                                                <div class="mega-dropdown-menu row row-no-padding">
                                                    <div class="mega-dropdown-col mega-dropdown-col-cover mega-dropdown-col-cover--left col-lg-5 d-none d-lg-block d-xl-block"
                                                         style="background: url('http://via.placeholder.com/1980x1080') center center;background-size: cover">
                                                        <span class="mask sm_bg_1 alpha-8"></span>
                                                        <div class="mega-dropdown-col-inner d-flex align-items-center no-padding">
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col-12">
                                                                        <div class="px-4">
                                                                            <h2 class="heading heading-2 strong-600 c-white">
                                                                                Smrithi<br>PVR Tech Studio
                                                                            </h2>
                                                                            <p class="strong-300 c-white mt-4">
                                                                                Lorem Ipsum is simply dummy text of the
                                                                                printing and typesetting industry. Lorem
                                                                                Ipsum has been the industry's standard
                                                                                dummy text ever since the 1500s, when an
                                                                                unknown printer took a galley of type
                                                                                and scrambled it to make a type specimen
                                                                                book.
                                                                            </p>
                                                                            <div class="btn-container mt-5">
                                                                                <a href="javascript:void(0)"
                                                                                   target="_blank"
                                                                                   class="btn btn-styled btn-base-5 btn-outline btn-circle purchase_now">Purchase
                                                                                    Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-lg-2 ml-lg-auto">
                                                        <label class="nav_label">Basic Elements</label>
                                                        <ul class="megadropdown-links">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_accordion.html">
                                                                    Accordion
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_alerts.html">
                                                                    Alerts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_badges.html">
                                                                    Badges
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_buttons.html">
                                                                    Buttons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_cards.html">
                                                                    Cards
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_carousel.html">
                                                                    Carousel
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_countdown.html">
                                                                    Countdown
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_dropdowns.html">
                                                                    Dropdowns
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_lightbox.html">
                                                                    Lightbox
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_google_maps.html">
                                                                    Google Maps
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_vector_maps.html">
                                                                    Vector Maps
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_modals.html">
                                                                    Modals
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-4 col-lg-2">
                                                        <label class="nav_label invisible">Basic Elements</label>
                                                        <ul class="megadropdown-links">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_pagination.html">
                                                                    Pagination
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_progress_bars.html">
                                                                    Progress bars
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_notification.html">
                                                                    Notification
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_tables.html">
                                                                    Tables
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_tabs.html">
                                                                    Tabs
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_tree_view.html">
                                                                    Tree View
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_typography.html">
                                                                    Typography
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_sweet_alert.html">
                                                                    Sweet Alert
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_icon_blocks.html">
                                                                    Icon blocks
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_spinner_buttons.html">
                                                                    Spinner Buttons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_testimonial_blocks.html">
                                                                    Testimonial blocks
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_comment_blocks.html">
                                                                    Comment blocks
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-4 col-lg-2">
                                                        <label class="nav_label">Charts</label>
                                                        <ul class="megadropdown-links">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_morris_charts.html">
                                                                    Morris Charts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_flot_charts.html">
                                                                    Flot Charts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_chartjs.html">
                                                                    ChartJS
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_echarts.html">
                                                                    ECharts
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_chartist.html">
                                                                    Chartist
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_rickshaw.html">
                                                                    Rickshaw
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_am_charts.html">
                                                                    AM Charts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_high_charts.html">
                                                                    High Charts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_fusion_charts.html">
                                                                    Fusion Charts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">Recaptcha</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_recaptcha.html">
                                                                    Recaptcha
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown megamenu">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-book-outline icon_nav"></i> Pages
                                            </a>

                                            <div class="dropdown-menu">
                                                <div class="mega-dropdown-menu row row-no-padding">
                                                    <div class="mega-dropdown-col mega-dropdown-col-cover mega-dropdown-col-cover--right col-lg-5 d-none d-lg-block d-xl-block"
                                                         style="background: url('http://via.placeholder.com/1980x1080') center center;background-size: cover">
                                                        <span class="mask sm_bg_1 alpha-8"></span>
                                                        <div class="mega-dropdown-col-inner d-flex align-items-center no-padding">
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col-12">
                                                                        <div class="px-4">
                                                                            <h2 class="heading heading-2 strong-600 c-white">
                                                                                Smrithi<br>PVR Tech Studio
                                                                            </h2>
                                                                            <p class="strong-300 c-white mt-4">
                                                                                Lorem Ipsum is simply dummy text of the
                                                                                printing and typesetting industry. Lorem
                                                                                Ipsum has been the industry's standard
                                                                                dummy text ever since the 1500s, when an
                                                                                unknown printer took a galley of type
                                                                                and scrambled it to make a type specimen
                                                                                book.
                                                                            </p>
                                                                            <div class="btn-container mt-5">
                                                                                <a href="javascript:void(0)"
                                                                                   target="_blank"
                                                                                   class="btn btn-styled btn-base-5 btn-outline btn-circle">Purchase
                                                                                    Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-lg-2">
                                                        <label class="nav_label">Layouts</label>
                                                        <ul class="megadropdown-links">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_layouts.html">
                                                                    Layouts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">authentication</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_login.html">
                                                                    Login
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_registration.html">
                                                                    Registration
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_reset_password.html">
                                                                    Reset Password
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_forgot_password.html">
                                                                    Forgot Password
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_lock_screen.html">
                                                                    Lock Screen
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">error pages</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_error_pages.html">
                                                                    Error pages
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">cookie</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_cookie.html">
                                                                    Cookie
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-4 col-lg-2">
                                                        <label class="nav_label">profile</label>
                                                        <ul class="megadropdown-links">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_profile.html">
                                                                    Profile
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">E-commerce
                                                                    Profile</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_ecommerce_profile.html">
                                                                    E-commerce Profile
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">Invoice</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_invoice.html">
                                                                    Invoice
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">Search</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_search_result.html">
                                                                    Search Result
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-4 col-lg-2 mr-lg-auto">
                                                        <label class="nav_label">Icons</label>
                                                        <ul class="megadropdown-links">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_material_icons.html">
                                                                    Material Icon
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_font_awesome.html">
                                                                    Font Awesome
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_simple_line_icons.html">
                                                                    Simple line Icons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_weather_icons.html">
                                                                    Weather Icons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_ionicons.html">
                                                                    Ionicons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">Timeline</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_timeline.html">
                                                                    Timeline
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <label class="nav_label m-t-20">Email</label>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                   href="sm_email_template.html">
                                                                    Email Templates
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown active">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-briefcase-outline icon_nav"></i> Forms
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                                                <div class="list-group rounded">
                                                    <a href="sm_form_elements.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Form Elements
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_form_plugins.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Form Plugins
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_form_wizard_validation.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Form Wizard + Validation
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_form_validation.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Form Validation
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_editors.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Editors
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                                               data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="icon ion-ios-cog-outline icon_nav"></i> Applications
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-xl py-0 px-0 overflow--hidden">
                                                <div class="list-group rounded">
                                                    <a href="sm_scrumboard.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Scrumboard
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_email_application.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Email Application
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_chat_application.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Chat Application
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_contacts_application.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Contacts Application
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_pricing_tables.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                Pricing Tables
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                    <a href="sm_ecommerce_application.html"
                                                       class="list-group-item list-group-item-action d-flex align-items-center">
                                                        <div class="list-group-content">
                                                            <div class="list-group-heading heading heading-6 mb-1">
                                                                E-commerce Application
                                                            </div>
                                                            <p class="text-sm mb-0">Lorem ipsum dolor sit amet
                                                                consectetur adipiscing eiusmod tempor</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="sm_widgets.html">
                                                <i class="icon ion-ios-analytics-outline icon_nav"></i> Widgets
                                            </a>
                                        </li>

                                    </ul>
                                    <!-- END NAVBAR LINKS -->
                                </div>
                                <div class="d-none d-lg-inline-block d-xl-inline-block">
                                    <!--BEGIN SIDEBAR BUTTON-->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item nav-item-icon hidden-md-down">
                                            <a href="javascript:void(0)" class="nav-link btn-st-trigger p-r-5"
                                               data-effect="sm-effect-1">
                                                <span><i class="fa fa-bars"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--END SIDEBAR BUTTON-->
                                </div>
                            </div>
                        </nav>
                        <!--END NAV BAR-->
                    </div>
                    <!--END HEADER-->

                    <!-- BEGIN PAGE TITLE -->
                    <section id="transparent_menu" class="slice-xl has-bg-cover bg-size-cover"
                             style="background-image: url('http://via.placeholder.com/1980x1322'); background-position: center center;display: none;">
                        <span class="mask mask-base-1--style-1 opacity-70"></span>
                        <div class="container no-padding">
                            <div class="col-md-6">
                                <h3 class="heading heading-xl strong-400 text-normal c-white">
                                    Layouts
                                </h3>
                                <p class="lead text-normal strong-300 c-white mt-3 line-height-1_8">
                                    As an entrepreneur you keep trying things, and I try everything. I try business
                                    ideas, on our website we test everything, iterate, iterate, iterate.
                                </p>
                            </div>
                        </div>
                    </section>
                    <!-- END PAGE TITLE -->

                    <!--BEGIN CONTENT-->
                    <section id="main_content" class="bg slice-sm sct-color-1">
                        <div class="container" id="container">
                            <!--BEGIN BREADCRUMB-->
                            <div class="breadcrumb-pageheader">
                                <ol class="breadcrumb sm-breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Wizard + Validation</li>
                                </ol>
                                <h6 class="sm-pagetitle--style-1 has_page_title">Form Wizard + Validation</h6>
                            </div>
                            <!--END BREADCRUMB-->

                            <!--BEGIN PAGE CONTENT-->
                            <div class="sm-content">
                                <div class="sm-content-box">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sm-wrapper" data-sortable-id="sm_form_wizard_validation_1">
                                                <div class="title_box sm-header-style-1">
                                                    <div class="sm-actions">
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus fullscreen_element">
                                                            <span class="extra-tooltip">Fullscreen</span>
                                                            <i class="material-icons">fullscreen</i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus refresh_element">
                                                            <span class="extra-tooltip">Refresh</span>
                                                            <i class="material-icons">refresh</i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus minimize_element">
                                                            <span class="extra-tooltip">Collapse / Expand</span>
                                                            <i class="material-icons">import_export</i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="tooltip_cus remove_element">
                                                            <span class="extra-tooltip">Remove</span>
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                    </div>
                                                    <h6 class="sm-header nodrag">
                                                        Wizard
                                                    </h6>
                                                </div>
                                                <div class="sm-box">
                                                    <div class="sm-info">
                                                        <div class="sm-info-with-icon">
                                                            <div class="sm-info-icon">
                                                                <div class="icon ion-ios-americanfootball-outline"></div>
                                                            </div>
                                                            <div class="sm-info-text">
                                                                <h5 class="sm-inner-header">Wizard</h5>
                                                                <div class="sm-inner-desc">
                                                                    Smart Wizard is a flexible and heavily customizable
                                                                    jQuery step wizard plugin with Bootstrap support.
                                                                    <a href="https://github.com/techlab/SmartWizard"
                                                                       target="_blank">Learn more about jQuery Smart
                                                                        Wizard 4</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="wizard">
                                                        <!-- begin wizard-step -->
                                                        <ul>
                                                            <li class="col-md-3 col-sm-4 col-6">
                                                                <a href="#step-1">
                                                                    <span class="number">1</span>
                                                                    <span class="info text-ellipsis">
                                                            Personal Info
                                                            <small class="text-ellipsis">Step 1</small>
                                                        </span>
                                                                </a>
                                                            </li>
                                                            <li class="col-md-3 col-sm-4 col-6">
                                                                <a href="#step-2">
                                                                    <span class="number">2</span>
                                                                    <span class="info text-ellipsis">
                                                            Enter your contact
                                                            <small class="text-ellipsis">Step 2</small>
                                                        </span>
                                                                </a>
                                                            </li>
                                                            <li class="col-md-3 col-sm-4 col-6">
                                                                <a href="#step-3">
                                                                    <span class="number">3</span>
                                                                    <span class="info text-ellipsis">
                                                            Login Account
                                                            <small class="text-ellipsis">Step 3</small>
                                                        </span>
                                                                </a>
                                                            </li>
                                                            <li class="col-md-3 col-sm-4 col-6">
                                                                <a href="#step-4">
                                                                    <span class="number">4</span>
                                                                    <span class="info text-ellipsis">
                                                            Completed
                                                            <small class="text-ellipsis">Step 4</small>
                                                        </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!-- end wizard-step -->
                                                        <!-- begin wizard-content -->
                                                        <div>
                                                            <div id="step-1">
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-lg-8 offset-md-2">
                                                                            <span class="d-block no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                Personal info about yourself
                                                                            </span>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">First
                                                                                    Name</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" name="firstname"
                                                                                           placeholder="First Name"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Last
                                                                                    Name</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" name="lastname"
                                                                                           placeholder="Last Name"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Date
                                                                                    of Birth</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" name="DOB"
                                                                                           placeholder="Date of Birth"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Address</label>
                                                                                <div class="col-md-6">
                                                                                    <textarea
                                                                                            class="form-control form-control-lg textarea-autogrow"
                                                                                            placeholder="Enter Your Address"
                                                                                            rows="3"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div id="step-2">
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-md-8 offset-md-2">
                                                                            <span class="d-block no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                You contact info, so that we can easily
                                                                                reach you
                                                                            </span>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Mobile</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="number" name="phone"
                                                                                           placeholder="Mobile Number"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Email</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="email" name="email"
                                                                                           placeholder="Email id"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div id="step-3">
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="col-md-8 offset-md-2">
                                                                            <span class="d-block no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                Select your login username and password
                                                                            </span>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Username</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" name="username"
                                                                                           placeholder="Enter your username"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Password</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="password"
                                                                                           name="password"
                                                                                           placeholder="Enter your password"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row m-b-10">
                                                                                <label class="col-md-3 text-md-right col-form-label">Confirm
                                                                                    Password</label>
                                                                                <div class="col-md-6">
                                                                                    <input type="password"
                                                                                           name="password2"
                                                                                           placeholder="Confirm password"
                                                                                           class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div id="step-4">
                                                                <div class="jumbotron m-b-0 text-center">
                                                                    <h2 class="text-inverse">Successfully
                                                                        Registered.</h2>
                                                                    <p class="m-b-30 f-s-16">
                                                                        Lorem Ipsum is simply dummy
                                                                        text of the printing and typesetting industry.
                                                                        Lorem Ipsum has been the industry's standard
                                                                        dummy text ever since the 1500s, when an unknown
                                                                        printer took a galley of type and scrambled it
                                                                        to make a type specimen book. It has survived
                                                                        not only five centuries, but also the leap into
                                                                        electronic typesetting, remaining essentially
                                                                        unchanged.
                                                                    </p>
                                                                    <p><a href="javascript:void(0)"
                                                                          class="btn btn-primary btn-lg">Proceed to
                                                                        Login</a></p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- end wizard-content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="sm-wrapper" data-sortable-id="sm_form_wizard_validation_2">
                                                <div class="title_box sm-header-style-1">
                                                    <div class="sm-actions">
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus fullscreen_element">
                                                            <span class="extra-tooltip">Fullscreen</span>
                                                            <i class="material-icons">fullscreen</i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus refresh_element">
                                                            <span class="extra-tooltip">Refresh</span>
                                                            <i class="material-icons">refresh</i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                           class="tooltip_cus minimize_element">
                                                            <span class="extra-tooltip">Collapse / Expand</span>
                                                            <i class="material-icons">import_export</i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="tooltip_cus remove_element">
                                                            <span class="extra-tooltip">Remove</span>
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                    </div>
                                                    <h6 class="sm-header nodrag">
                                                        Wizard + Validation
                                                    </h6>
                                                </div>
                                                <div class="sm-box">
                                                    <div class="sm-info">
                                                        <div class="sm-info-with-icon">
                                                            <div class="sm-info-icon">
                                                                <div class="icon ion-ios-americanfootball-outline"></div>
                                                            </div>
                                                            <div class="sm-info-text">
                                                                <h5 class="sm-inner-header">Wizard + Validation</h5>
                                                                <div class="sm-inner-desc">
                                                                    Smart Wizard is a flexible and heavily customizable
                                                                    jQuery step wizard plugin with Bootstrap support.
                                                                    <a href="https://github.com/techlab/SmartWizard"
                                                                       target="_blank">Learn more about jQuery Smart
                                                                        Wizard 4</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form action="/" method="POST" name="form-wizard"
                                                          class="form-control-with-bg">
                                                        <!-- begin wizard -->
                                                        <div id="wizard_validation">
                                                            <!-- begin wizard-step -->
                                                            <ul>
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-5">
                                                                        <span class="number">1</span>
                                                                        <span class="info text-ellipsis">
                                                                            Personal Info
                                                                            <small class="text-ellipsis">Step 1</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-6">
                                                                        <span class="number">2</span>
                                                                        <span class="info text-ellipsis">
                                                                            Enter your contact
                                                                            <small class="text-ellipsis">Step 2</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-7">
                                                                        <span class="number">3</span>
                                                                        <span class="info text-ellipsis">
                                                                            Login Account
                                                                            <small class="text-ellipsis">Step 3</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="col-md-3 col-sm-4 col-6">
                                                                    <a href="#step-8">
                                                                        <span class="number">4</span>
                                                                        <span class="info text-ellipsis">
                                                                            Completed
                                                                            <small class="text-ellipsis">Step 4</small>
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
                                                                            <div class="col-md-8 offset-md-2">
                                                                                <span class="d-block no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                    Personal info about yourself
                                                                                </span>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">First
                                                                                        Name <span class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text"
                                                                                               name="firstname"
                                                                                               placeholder="First Name"
                                                                                               data-parsley-group="step-1"
                                                                                               data-parsley-required="true"
                                                                                               class="form-control"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Last
                                                                                        Name <span
                                                                                                class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text"
                                                                                               name="lastname"
                                                                                               placeholder="Last Name"
                                                                                               data-parsley-group="step-1"
                                                                                               data-parsley-required="true"
                                                                                               class="form-control"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Date
                                                                                        of Birth <span
                                                                                                class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text" name="DOB"
                                                                                               placeholder="Date of Birth"
                                                                                               data-parsley-group="step-1"
                                                                                               data-parsley-required="true"
                                                                                               class="form-control"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Address</label>
                                                                                    <div class="col-md-6">
                                                                                    <textarea
                                                                                            class="form-control form-control-lg textarea-autogrow"
                                                                                            placeholder="Enter Your Address"
                                                                                            rows="3"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="step-6">
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-8 offset-md-2">
                                                                                <span class="d-block no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                    You contact info, so that we can
                                                                                    easily reach you
                                                                                </span>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Mobile
                                                                                        <span
                                                                                                class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text"
                                                                                               name="phone"
                                                                                               placeholder="Mobile Number"
                                                                                               data-parsley-group="step-2"
                                                                                               data-parsley-required="true"
                                                                                               data-parsley-type="number"
                                                                                               class="form-control"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Email
                                                                                        <span
                                                                                                class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="email" name="email"
                                                                                               placeholder="Email id"
                                                                                               class="form-control"
                                                                                               data-parsley-group="step-2"
                                                                                               data-parsley-required="true"
                                                                                               data-parsley-type="email"/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="step-7">
                                                                    <fieldset>
                                                                        <div class="row">
                                                                            <div class="col-md-8 offset-md-2">
                                                                                <span class="d-blockno-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">
                                                                                    Select your login username and
                                                                                    password
                                                                                </span>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Username
                                                                                        <span class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text"
                                                                                               name="username"
                                                                                               placeholder="Enter your username"
                                                                                               class="form-control"
                                                                                               data-parsley-group="step-3"
                                                                                               data-parsley-required="true"
                                                                                               data-parsley-type="alphanum"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Password
                                                                                        <span class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="password"
                                                                                               name="password"
                                                                                               placeholder="Enter your password"
                                                                                               class="form-control"
                                                                                               data-parsley-group="step-3"
                                                                                               data-parsley-required="true"/>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row m-b-10">
                                                                                    <label class="col-md-3 col-form-label text-md-right">Confirm
                                                                                        Password <span
                                                                                                class="text-danger">*</span></label>
                                                                                    <div class="col-md-6">
                                                                                        <input type="password"
                                                                                               name="password2"
                                                                                               placeholder="Confirm password"
                                                                                               class="form-control"
                                                                                               data-parsley-group="step-3"
                                                                                               data-parsley-required="true"/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="step-8">
                                                                    <div class="jumbotron m-b-0 text-center">
                                                                        <h2 class="text-inverse">Successfully
                                                                            Registered.</h2>
                                                                        <p class="m-b-30 f-s-16">
                                                                            Lorem Ipsum is simply dummy
                                                                            text of the printing and typesetting
                                                                            industry.
                                                                            Lorem Ipsum has been the industry's standard
                                                                            dummy text ever since the 1500s, when an
                                                                            unknown
                                                                            printer took a galley of type and scrambled
                                                                            it
                                                                            to make a type specimen book. It has
                                                                            survived
                                                                            not only five centuries, but also the leap
                                                                            into
                                                                            electronic typesetting, remaining
                                                                            essentially
                                                                            unchanged.
                                                                        </p>
                                                                        <p><a href="javascript:void(0)"
                                                                              class="btn btn-primary btn-lg">Proceed to
                                                                            Login</a></p>
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
                            <!--END PAGE CONTENT-->
                        </div>
                    </section>
                    <!--END CONTENT-->

                    <!-- BEGIN FOOTER -->
                    <footer id="footer" class="footer footer-inverse">
                        <div class="footer-bottom py-3">
                            <div class="container">
                                <div class="row cols-xs-space col-sm-space align-items-center">
                                    <div class="col-md-7 col-12">
                                        <div class="text-xs-center text-sm-left">
                                            <ul class="footer-menu">
                                                <li>
                                                    <a href="index.html" class="p-l-0">Home</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.pvrtechstudio.com/">Website</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Portfolio</a>
                                                </li>
                                            </ul>

                                            <div class="copyright mt-1">
                                                <ul class="copy-links">
                                                    <li>
                                                        © 2018 <a href="http://www.pvrtechstudio.com/" target="_blank">PVR
                                                        Tech Studio</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Terms</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">License</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Privacy policy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="text-xs-center text-sm-right">
                                            <ul class="social-media social-media--style-1-v4">
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                                       data-original-title="Github">
                                                        <i class="fa fa-github"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!--END FOOTER-->
                </div>
            </div>
        </div>
        <!-- END SM PUSHER -->
    </div>
    <!--END SM CONTAINER-->
</div>
<!-- END MAIN WRAPPER -->

<!-- TO TOP -->
<a href="javascript:void(0)" class="back-to-top btn-back-to-top sm_bg_1"></a>

<!--BEGIN OFFICE SIDEBAR-->
<div class="o365cs-base o365cs-nav-navMenu popupShadow removeFocusOutline o365cs-newALV3-on" data-ispopup="0"
     style="display: none;">
    <div class="o365cs-nav-navMenuContent">
        <button type="button" class="o365cs-nav-closeButton o365button">
            <span class="ion-ios-close-outline f-s-24"></span>
        </button>
        <div class="o365cs-nav-hasGetMoreAppsLink">
            <div class="o365cs-nav-pinnedTab o365cs-nav-navMenuTabContainer o365cs-nav-scrollbar">
                <div class="o365cs-nav-placesLinks">
                    <a class="o365cs-nav-fluentLink o365cs-nav-placesLink o365button"
                       target="_blank" href="javascript:void(0)">
                        <span>Office 365</span>
                        <span class="ion-ios-arrow-thin-right f-s-22 owaimg"> </span>
                    </a>
                </div>

                <span class="o365cs-nav-moduleLabel f-w-500" role="heading">Apps</span>
                <div class="o365cs-nav-appsModuleTiles">
                    <div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(0, 120, 215); background-color: rgb(0, 120, 215);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--OutlookLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Outlook</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(0, 120, 215); background-color: rgb(0, 120, 215);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--OneDrive"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>OneDrive</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(43, 87, 154); background-color: rgb(43, 87, 154);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--WordLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Word</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(33, 115, 70); background-color: rgb(33, 115, 70);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--ExcelLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Excel</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(183, 71, 42); background-color: rgb(183, 71, 42);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--PowerPointLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>PowerPoint</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(119, 25, 170); background-color: rgb(119, 25, 170);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--OneNoteLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>PowerPoint</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(85, 88, 175); background-color: rgb(85, 88, 175);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--TeamsLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Teams</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="o365cs-nav-appItem">
                            <a class="o365cs-nav-appTile o365button o365cs-nav-appTileMedium o365cs-nav-appTileMenuEnabled"
                               href="javascript:void(0)">
                                <div class="o365cs-nav-appTileBackground"
                                     style="color: rgb(0, 120, 215); background-color: rgb(0, 120, 215);"><span
                                        class="o365cs-nav-appTileIcon owaimg ms-Icon ms-Icon--YammerLogo"> </span>
                                    <span class="o365cs-nav-appTileTitle ms-fcl-w d-inline-block">
                                            <span>Yammer</span>
                                            <span class="ion-ios-more-outline more_icons"> </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="o365cs-clear"></div>
                <button type="button" class="o365cs-nav-fluentLink o365cs-nav-appsModuleMore o365button">
                    <span>All apps</span>
                    <span class="ion-ios-arrow-thin-right f-s-22 owaimg"> </span>
                </button>

                <span class="o365cs-nav-moduleLabel f-w-500" role="heading">Documents</span>

                <div class="o365cs-nav-docsModuleEmpty">
                    <div class="o365cs-nav-docsModuleEmptyImage"></div>
                    <span class="o365cs-nav-docsModuleEmptyTitle">Your recently viewed docs will show here.</span>
                    <span class="o365cs-nav-docsModuleEmptyText">Create new docs and collaborate with others.</span>
                    <div class="o365cs-clear"></div>
                    <div class="btn-group m-t-20">
                        <button class="btn btn-base-1 dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Upload New File
                        </button>
                        <div class="dropdown-menu dropdown-menu-sm">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END OFFICE SIDEBAR-->

<!--BEGIN CHAT POPUP-->
<div class="app_chat_button popup_chat">
    <i class="material-icons">chat</i>
</div>
<div class="pvr_chat_cnt">
    <div class="app_chat_i">
        <div class="chat-close">
            <i class="material-icons">close</i>
        </div>
        <div class="app_chat_head">
            <div class="pvr-user-w with-status status-green">
                <div class="pvr-user-avatar-w">
                    <div class="user-avatar">
                        <img alt="" src="http://via.placeholder.com/128x128">
                    </div>
                </div>
                <div class="user-name">
                    <h6 class="user-title">
                        John Smith
                    </h6>
                    <div class="user-role">
                        Administrator
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-messages theme_2">
            <div class="message">
                <div class="message-content">
                    Lorem Ipsum is simply dummy.
                </div>
            </div>
            <div class="date-break">
                Mon 10:20am
            </div>
            <div class="message">
                <div class="message-content">
                    Lorem Ipsum is simply dummy text of the printing.
                </div>
            </div>
            <div class="message self">
                <div class="message-content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
        </div>
        <div class="chat-controls">
            <input class="message-input" id="message-input" placeholder="Type your message here..." type="text">
            <div class="chat-extra">
                <a href="javascript:void(0)">
                    <span class="extra-tooltip">Attach Document</span>
                    <i class="material-icons">attach_file</i>
                </a>
                <a href="javascript:void(0)">
                    <span class="extra-tooltip">Insert Photo</span>
                    <i class="material-icons">add_a_photo</i>
                </a>
                <a href="javascript:void(0)" class="pull-right change_chat_theme">
                    <span class="extra-tooltip">Change chat theme</span>
                    <i class="material-icons">refresh</i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--END CHAT POPUP-->

<!-- BEGIN MODAL LOGIN -->
<div id="login_modal" class="modal effect-flip-horizontal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
            <div class="modal-body p-0">
                <div class="row no-gutters">
                    <div class="col-lg-5 sm_bg_6">
                        <div class="p-40">
                            <h1 class="text-white m-b-20">smrithi</h1>
                            <div class="account-info">
                                <ul>
                                    <li><i class="icon-magic-wand"></i> Fully customizable</li>
                                    <li><i class="icon-layers"></i> Responsive Design</li>
                                    <li><i class="icon-drop"></i> Multiple Backgrounds</li>
                                    <li><i class="icon-arrow-right"></i> 24/7 Support / Service</li>
                                </ul>
                            </div>
                            <p class="text-white m-t-30">
                                <span class="f-w-400 d-block m-b-15">Address:</span>
                                <span class="opacity-100">PVR Tech Studio, Vetri Vinayagar Nagar, Ganapathy, Coimbatore, India 641006</span>
                            </p>
                            <div class="text-xs-center text-sm-right m-b-15 m-t-20">
                                <ul class="social-media social-media--style-1-v4 text-white">
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Facebook">
                                            <i class="fa fa-facebook text-white"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Twitter">
                                            <i class="fa fa-twitter text-white"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Instagram">
                                            <i class="fa fa-instagram text-white"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank" data-toggle="tooltip"
                                           data-original-title="Github">
                                            <i class="fa fa-github text-white"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 bg-white">
                        <div class="p-l-30 p-r-30 p-t-30 p-b-30">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="p-l-30 p-r-30 p-t-10 p-b-10">
                                <h3 class="f-w-400 m-b-5">Welcome back!</h3>
                                <p>Sign in to your account to continue</p>
                                <br>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control p-t-12 p-b-12"
                                           id="modal_username">
                                </div>
                                <div class="form-group m-b-20">
                                    <input type="email" name="password" class="form-control p-t-12 p-b-12"
                                           id="modal_password">
                                    <a href="javascript:void(0)" class="f-s-12 d-block m-t-10">Forgot password?</a>
                                </div>
                                <button class="btn text-white p-t-12 p-b-12 btn-block sm_bg_6">Sign In</button>
                                <div class="m-t-30 m-b-20 f-s-12">
                                    Don't have an account yet? <a href="javascript:void(0)">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL LOGIN -->

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

<!-- APP JS -->
<script src="../../resources/js/app.js"></script>
<script src="../../resources/js/sm_form_wizard_validation.js"></script>
</body>
</html>

