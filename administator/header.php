<?php
 include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>http://www.appc2018.com/</title>

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
            <a href="dashbord.php" class="ks-logo">ADMIN APPC2018</a>

            <span class="nav-item dropdown ks-dropdown-grid-images">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu ks-info ks-scrollable" aria-labelledby="Preview" data-height="260">
                    <div class="ks-scroll-wrapper">
                        <a href="dashbord.php" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/dashboard.png">
                            <span class="ks-text">Dashboard</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/flask.png">
                            <span class="ks-text">Projects</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/calendar.png">
                            <span class="ks-text">Calendar</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/profile.png">
                            <span class="ks-text">Profile</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/ticket.png">
                            <span class="ks-text">Tickets</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/settings.png">
                            <span class="ks-text">Settings</span>
                        </a>
                    </div>
                </div>
            </span>

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
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">REGISTER
                    </a>
                    <div class="dropdown-menu ks-info" aria-labelledby="Preview">
                        <a class="dropdown-item ks-active" href="register_Th.php">REGISTER  TH</a>
                       <a class="dropdown-item ks-active" href="register_Eng.php">     REGISTER  ENG</a>
                            </a>
                      
                    </div>
                </div>
               
            </div>
            <!-- END NAVBAR MENU -->

            <!-- BEGIN NAVBAR ACTIONS -->
            <div class="ks-navbar-actions">
                <!-- BEGIN NAVBAR ACTION BUTTON -->
                <div class="nav-item nav-link btn-action-block">
                    <a class="btn btn-danger" href="#">
                        <span class="ks-action">REGISTER NEW</span>
                        <span class="ks-description">trial ends in 1 day</span>
                    </a>
                </div>
                <!-- END NAVBAR ACTION BUTTON -->

                <!-- BEGIN NAVBAR LANGUAGES -->
               
                <!-- END NAVBAR LANGUAGES -->
                    <!-- BEGIN NAVBAR MESSAGES -->
                <div class="nav-item dropdown ks-messages">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-envelope ks-icon" aria-hidden="true">
<!-- New Register-->                            <span class="badge badge-pill badge-info">3</span>
                        </span>
                        <span class="ks-text">Messages</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <section class="ks-tabs-actions">
                            <a href="#"><i class="la la-plus ks-icon"></i></a>
                            <a href="#"><i class="la la-search ks-icon"></i></a>
                        </section>
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#ks-navbar-messages-inbox" role="tab">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-sent" role="tab">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-archive" role="tab">Archive</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-messages-tab active" id="ks-navbar-messages-inbox" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">
                                            <img src="assets/img/te.png" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">
                                            <img src="assets/img/avatars/avatar-5.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-offline">
                                            <img src="assets/img/avatars/placeholders/ava-36.png" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-offline">
                                            <img src="assets/img/avatars/avatar-4.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="ks-view-all">
                                    <a href="#">View all</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-sent" role="tabpanel">
                                There are no messages.
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-archive" role="tabpanel">
                                There are no messages.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR MESSAGES -->

                <!-- BEGIN NAVBAR NOTIFICATIONS -->
                <div class="nav-item dropdown ks-notifications">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-bell ks-icon" aria-hidden="true">
 <!-- New Alar-->                                   <span class="badge badge-pill badge-info">7</span>
                        </span>
                        <span class="ks-text">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-notifications-all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-activity" role="tab">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-comments" role="tab">Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-notifications-tab active" id="navbar-notifications-all" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-notification">
                                        <div class="ks-avatar">
                                            <img src="assets/img/Screenshot_4.png" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter <span class="ks-description">has uploaded 1 file</span></div>
                                            <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-default">
                                                <span class="la la-briefcase ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">New project created</div>
                                            <div class="ks-text">Dashboard UI</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-error">
                                                <span class="la la-times-circle ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">File upload error</div>
                                            <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">10 minutes ago</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="ks-view-all">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-activity" role="tabpanel">
                                There are no activities.
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-comments" role="tabpanel">
                                There are no comments.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR NOTIFICATIONS -->

                <!-- BEGIN NAVBAR USER -->
                <div class="nav-item dropdown ks-user">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-avatar">
                            <img src="assets/img/avatars/avatar-13.jpg" width="36" height="36">
                        </span>
                        <span class="ks-info">
                            <span class="ks-name">Robert Dean</span>
                            <span class="ks-description">Premium User</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <a class="dropdown-item" href="#">
                            <span class="la la-user ks-icon"></span>
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-wrench ks-icon" aria-hidden="true"></span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-question-circle ks-icon" aria-hidden="true"></span>
                            <span>Help</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-sign-out ks-icon" aria-hidden="true"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
                <!-- END NAVBAR USER -->
            </div>
            <!-- END NAVBAR ACTIONS -->
        </nav>

        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-ellipsis-h ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-th ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->








  <div class="ks-themes-list">
        <a href="../default-primary/index.html" class="ks-theme ks-primary ks-active"></a>
        <a href="../default-primary-dark/index.html" class="ks-theme ks-dark-primary"></a>
        <a href="../default-info/index.html" class="ks-theme ks-info"></a>
        <a href="../default-pink/index.html" class="ks-theme ks-blink-pink-san-marino"></a>
        <a href="../default-bermuda-gray/index.html" class="ks-theme ks-bermuda-gray-malachite"></a>
        <a href="../default-royal-blue/index.html" class="ks-theme ks-royal-blue-orchid"></a>
        <a href="../default-ebony-clay/index.html" class="ks-theme ks-ebony-clay-cerise-red"></a>
        <a href="../default-international-klein-blue/index.html" class="ks-theme ks-international-klein-blue-dixie"></a>
        <a href="../default-jungle-green/index.html" class="ks-theme ks-jungle-green-chambray"></a>
        <a href="../default-voodoo/index.html" class="ks-theme ks-voodoo-medium-purple"></a>
        <a href="../default-cornflower-blue/index.html" class="ks-theme ks-cornflower-blue-ecstasy"></a>
        <a href="../default-purple/index.html" class="ks-theme ks-purple-mandy"></a>
        <a href="../default-oslo-gray/index.html" class="ks-theme ks-oslo-gray-royal-blue"></a>
        <a href="../default-astronaut-blue/index.html" class="ks-theme ks-astronaut-blue-persian-green"></a>
        <a href="../default-old-brick/index.html" class="ks-theme ks-old-brick"></a>
        <a href="../default-white/index.html" class="ks-theme ks-white"></a>
    </div>

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
<script type="application/javascript">
(function ($) {
    $(document).ready(function () {
        c3.generate({
            bindto: '#ks-next-payout-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#81c159'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '#ks-total-earning-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#4e54a8'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '.ks-chart-orders-block',
            data: {
                columns: [
                    ['Revenue', 150, 200, 220, 280, 400, 160, 260, 400, 300, 400, 500, 420, 500, 300, 200, 100, 400, 600, 300, 360, 600],
                    ['Profit', 350, 300,  200, 140, 200, 30, 200, 100, 400, 600, 300, 200, 100, 50, 200, 600, 300, 500, 30, 200, 320]
                ],
                colors: {
                    'Revenue': '#f88528',
                    'Profit': '#81c159'
                }
            },
            point: {
                r: 5
            },
            grid: {
                y: {
                    show: true
                }
            }
        });

        setTimeout(function () {
            new Noty({
                text: '<strong>Welcome to OHIC2017 ตรวจเช็ค Register ด้วย</strong>! <br>',
                type   : 'information',
                theme  : 'mint',
                layout : 'topRight',
                timeout: 2000
            }).show();
        }, 1500);

        var maplace = new Maplace({
            map_div: '#ks-payment-widget-table-and-map-map',
            controls_on_map: false
        });
        maplace.Load();
    });
})(jQuery);
</script>

<div class="ks-mobile-overlay"></div>
