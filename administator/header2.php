<?php
 include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>APPC2018</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-awesome/css/line-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="assets/fonts/open-sans/styles.css">-->

    <link rel="stylesheet" type="text/css" href="assets/fonts/montserrat/styles.css">

    <link rel="stylesheet" type="text/css" href="libs/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="libs/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/common.min.css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/styles/themes/primary.min.css">
    <link class="ks-sidebar-dark-style" rel="stylesheet" type="text/css" href="assets/styles/themes/sidebar-black.min.css">
    <!-- END THEME STYLES -->

<link rel="stylesheet" type="text/css" href="assets/fonts/kosmo/styles.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/weather/css/weather-icons.min.css">
<link rel="stylesheet" type="text/css" href="libs/c3js/c3.min.css">
<link rel="stylesheet" type="text/css" href="libs/noty/noty.css">
<link rel="stylesheet" type="text/css" href="assets/styles/widgets/payment.min.css">
<link rel="stylesheet" type="text/css" href="assets/styles/widgets/panels.min.css">
<link rel="stylesheet" type="text/css" href="assets/styles/dashboard/tabbed-sidebar.min.css">
</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

    <!-- BEGIN HEADER -->
<nav class="navbar ks-navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-sidebar-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <a href="#" class="ks-sidebar-mobile-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->

        <div class="ks-navbar-logo">
            <a href="index.php" class="ks-logo">ADMIN APPC2018</a>

            <!-- END GRID NAVIGATION -->
        </div>
    </div>
    <!-- END LOGO -->
    
     <!-- BEGIN MENUS -->
    <div class="ks-wrapper">
        <nav class="nav navbar-nav">
            <!-- BEGIN NAVBAR MENU -->
            <div class="ks-navbar-menu">
              
                <a class="nav-item nav-link" href="view_abstract.php">ABSTRACT</a>
              
               
            </div>
         
        </nav>

        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->










<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/responsejs/response.min.js"></script>
<script src="libs/loading-overlay/loadingoverlay.min.js"></script>
<script src="libs/tether/js/tether.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/jscrollpane/jquery.jscrollpane.min.js"></script>
<script src="libs/jscrollpane/jquery.mousewheel.js"></script>
<script src="libs/flexibility/flexibility.js"></script>
<script src="libs/noty/noty.min.js"></script>
<script src="libs/velocity/velocity.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/scripts/common.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script src="libs/d3/d3.min.js"></script>
<script src="libs/c3js/c3.min.js"></script>
<script src="libs/noty/noty.min.js"></script>
<script src="libs/maplace/maplace.min.js"></script>
<script src="https://maps.google.com/maps/api/js?libraries=geometry&v=3.26&key=AIzaSyBBjLDxcCjc4s9ngpR11uwBWXRhyp3KPYM"></script>

