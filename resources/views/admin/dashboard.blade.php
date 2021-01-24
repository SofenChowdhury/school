<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 03:35:36 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard | SCHOOL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css"  id="app-stylesheet" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">
                <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('admin/assets/images/flags/us.jpg')}}" alt="lang-image" height="12">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <img src="{{asset('admin/assets/images/flags/germany.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                            class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <img src="{{asset('admin/assets/images/flags/italy.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                            class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <img src="{{asset('admin/assets/images/flags/spain.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                            class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <img src="{{asset('admin/assets/images/flags/russia.jpg')}}" alt="lang-image" class="mr-1" height="12"> <span
                            class="align-middle">Russian</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell-outline noti-icon"></i>
                    <span class="noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="font-16 text-white m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-white">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success">
                                <i class="mdi mdi-settings-outline"></i>
                            </div>
                            <p class="notify-details">New settings
                                <small class="text-muted">There are new settings available</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-bell-outline"></i>
                            </div>
                            <p class="notify-details">Updates
                                <small class="text-muted">There are 2 new updates available</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user
                                <small class="text-muted">You have 10 unread messages</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item text-primary notify-item notify-all">
                        View all
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-email-outline noti-icon"></i>
                    <span class="noti-icon-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="font-16 text-white m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-white">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Messages
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <div class="inbox-widget">
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Chadengle</p>
                                    <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-2.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Tomaslau</p>
                                    <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-3.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Stillnotdavid</p>
                                    <p class="inbox-item-text text-truncate">This theme is awesome!</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-4.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Kurafire</p>
                                    <p class="inbox-item-text text-truncate">Nice to meet you</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-5.jpg')}}" class="rounded-circle" alt=""></div>
                                    <p class="inbox-item-author">Shahedk</p>
                                    <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>

                                </div>
                            </a>
                        </div> <!-- end inbox-widget -->

                    </div>
                    <!-- All-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item text-primary notify-item notify-all">
                        View all
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                    <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow text-white m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-outline"></i>
                        <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-settings-outline"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-lock-outline"></i>
                        <span>Lock Screen</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{asset('admin/javascript:void(0);')}}" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout-variant"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="{{asset('admin/javascript:void(0);')}}" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="mdi mdi-settings-outline noti-icon"></i>
                </a>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{asset('admin/index-2.html')}}" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="{{asset('admin/assets/images/logo.png')}}" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="24">
                        </span>
            </a>

            <a href="{{asset('admin/index-2.html')}}" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="{{asset('admin/assets/images/logo-sm-light.png')}}" alt="" height="24">
                        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown dropdown-mega d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-megamenu p-0">
                    <div class="row">
                        <div class="col-sm-5">

                            <div class="p-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="font-16 mt-0"><i class="mdi mdi-toolbox-outline mr-1"></i> UI Components</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Widgets</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Range Sliders</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Sweet Alerts</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Ratings</a>
                                            </li>

                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Treeview Page</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Tour Page</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="font-16 mt-0"><i class="mdi mdi-flip-horizontal mr-1"></i> Layouts</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Dark Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Small Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Sidebar Collapsed</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Unsticky Layout</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Boxed Layout</a>
                                            </li>
                                            <li>
                                                <a href="{{asset('admin/javascript:void(0);')}}">Topbar Light</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <div>
                                                        <i class="fab fa-bootstrap text-purple h2 mb-0"></i>
                                                    </div>
                                                    <h5 class="font-16">Bootstrap</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center mt-4 mt-md-0">
                                                    <div>
                                                        <i class="fab fa-npm text-danger h2 mb-0"></i>
                                                    </div>
                                                    <h5 class="font-16">Npm</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center mt-4 mt-md-0">
                                                    <div>
                                                        <i class="fab fa-sass text-pink h2 mb-0"></i>
                                                    </div>
                                                    <h5 class="font-16">Sass support</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="text-center mt-4">
                                                    <div>
                                                        <i class="fas fa-tablet-alt text-dark h2 mb-0"></i>
                                                    </div>
                                                    <h5 class="font-16">Responsive</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center mt-4">
                                                    <div>
                                                        <i class="fab fa-gulp text-primary h2 mb-0"></i>
                                                    </div>
                                                    <h5 class="font-16">Gulp Support</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center mt-4">
                                                    <div>
                                                        <i class="far fa-file-code text-warning h2 mb-0"></i>
                                                    </div>
                                                    <h5 class="font-16">Free Landing</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-center">
                                        <div class="p-4">
                                            <h4 class="mt-0">Special Discount Sale!</h4>
                                            <h5 class="mt-4">Save up to <span class="text-primary">60%</span> off.</h5>
                                            <p class="text-muted">Get free updates lifetime</p>
                                            <a href="https://1.envato.market/XY7j5" target="_blank" class="btn btn-primary btn-rounded">Download Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
    </div>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{asset('admin/index-2.html')}}">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{asset('admin/calendar.html')}}">
                            <i class="mdi mdi-calendar-month"></i>
                            <span> Calendar </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-flip-horizontal"></i>
                            <span> Layouts </span>
                            <span class="badge badge-danger badge-pill float-right">New</span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/layouts-dark-sidebar.html')}}">Dark Sidebar</a></li>
                            <li><a href="{{asset('admin/layouts-small-sidebar.html')}}">Small Sidebar</a></li>
                            <li><a href="{{asset('admin/layouts-sidebar-collapsed.html')}}">Sidebar Collapsed</a></li>
                            <li><a href="{{asset('admin/layouts-unsticky.html')}}">Unsticky Layout</a></li>
                            <li><a href="{{asset('admin/layouts-boxed.html')}}">Boxed Layout</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-google-pages"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/pages-starter.html')}}">Starter Page</a></li>
                            <li><a href="{{asset('admin/pages-login.html')}}">Login</a></li>
                            <li><a href="{{asset('admin/pages-register.html')}}">Register</a></li>
                            <li><a href="{{asset('admin/pages-recoverpw.html')}}">Recover Password</a></li>
                            <li><a href="{{asset('admin/pages-lock-screen.html')}}">Lock Screen</a></li>
                            <li><a href="{{asset('admin/pages-404.html')}}">Error 404</a></li>
                            <li><a href="{{asset('admin/pages-500.html')}}">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-content-copy"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/pages-timeline.html')}}">Timeline</a></li>
                            <li><a href="{{asset('admin/pages-invoice.html')}}">Invoice</a></li>
                            <li><a href="{{asset('admin/pages-pricing.html')}}">Pricing</a></li>
                            <li><a href="{{asset('admin/pages-gallery.html')}}">Gallery</a></li>
                            <li><a href="{{asset('admin/pages-maintenance.html')}}">Maintenance</a></li>
                            <li><a href="{{asset('admin/pages-comingsoon.html')}}">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li class="menu-title mt-2">Components</li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-format-underline"></i>
                            <span> User Interface </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/ui-buttons.html')}}">Buttons</a></li>
                            <li><a href="{{asset('admin/ui-cards.html')}}">Cards</a></li>
                            <li><a href="{{asset('admin/ui-dropdowns.html')}}">Dropdowns</a></li>
                            <li><a href="{{asset('admin/ui-checkbox-radio.html')}}">Checkboxs-Radios</a></li>
                            <li><a href="{{asset('admin/ui-navs.html')}}">Navs</a></li>
                            <li><a href="{{asset('admin/ui-progress.html')}}">Progress</a></li>
                            <li><a href="{{asset('admin/ui-modals.html')}}">Modals</a></li>
                            <li><a href="{{asset('admin/ui-notification.html')}}">Notification</a></li>
                            <li><a href="{{asset('admin/ui-alerts.html')}}">Alerts</a></li>
                            <li><a href="{{asset('admin/ui-carousel.html')}}">Carousel</a></li>
                            <li><a href="{{asset('admin/ui-bootstrap.html')}}">Bootstrap UI</a></li>
                            <li><a href="{{asset('admin/ui-typography.html')}}">Typography</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-package-variant-closed"></i>
                            <span> Components </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/components-grid.html')}}">Grid</a></li>
                            <li><a href="{{asset('admin/components-range-sliders.html')}}">Range sliders</a></li>
                            <li><a href="{{asset('admin/components-sweet-alert.html')}}">Sweet Alerts</a></li>
                            <li><a href="{{asset('admin/components-ratings.html')}}">Ratings</a></li>
                            <li><a href="{{asset('admin/components-treeview.html')}}">Treeview</a></li>
                            <li><a href="{{asset('admin/components-tour.html')}}">Tour</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-puzzle-outline"></i>
                            <span> Widgets </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/widgets-tiles.html')}}">Tile Box</a></li>
                            <li><a href="{{asset('admin/widgets-charts.html')}}">Chart Widgets</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-black-mesa"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/icons-materialdesign.html')}}">Material Design</a></li>
                            <li><a href="{{asset('admin/icons-ionicons.html')}}">Ion Icons</a></li>
                            <li><a href="{{asset('admin/icons-fontawesome.html')}}'">Font awesome</a></li>
                            <li><a href="{{asset('admin/icons-themify.html')}}">Themify Icons</a></li>
                            <li><a href="{{asset('admin/icons-simple-line.html')}}'">Simple line Icons</a></li>
                            <li><a href="{{asset('admin/icons-weather.html')}}">Weather Icons</a></li>
                            <li><a href="{{asset('admin/icons-pe7.html')}}'">PE7 Icons</a></li>
                            <li><a href="{{asset('admin/icons-typicons.html')}}">Typicons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-file-document-box-check-outline"></i>
                            <span class="badge badge-warning badge-pill float-right">8</span>
                            <span> Forms </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/form-elements.html')}}">General Elements</a></li>
                            <li><a href="{{asset('admin/form-advanced.html')}}">Advanced Form</a></li>
                            <li><a href="{{asset('admin/form-validation.html')}}">Form Validation</a></li>
                            <li><a href="{{asset('admin/form-pickers.html')}}">Form Pickers</a></li>
                            <li><a href="{{asset('admin/form-wizard.html')}}">Form Wizard</a></li>
                            <li><a href="{{asset('admin/form-mask.html')}}">Form Masks</a></li>
                            <li><a href="{{asset('admin/form-uploads.html')}}">Multiple File Upload</a></li>
                            <li><a href="{{asset('admin/form-xeditable.html')}}">X-editable</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-table-settings"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/tables-basic.html')}}">Basic Tables</a></li>
                            <li><a href="{{asset('admin/tables-datatable.html')}}">Data Tables</a></li>
                            <li><a href="{{asset('admin/tables-responsive.html')}}">Responsive Table</a></li>
                            <li><a href="{{asset('admin/tables-tablesaw.html')}}">Tablesaw</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-poll"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{asset('admin/charts-flot.html')}}">Flot Charts</a></li>
                            <li><a href="{{asset('admin/charts-morris.html')}}">Morris Charts</a></li>
                            <li><a href="{{asset('admin/charts-chartjs.html')}}">Chartjs</a></li>
                            <li><a href="{{asset('admin/charts-peity.html')}}">Peity Charts</a></li>
                            <li><a href="{{asset('admin/charts-chartist.html')}}">Chartist Charts</a></li>
                            <li><a href="{{asset('admin/charts-c3.html')}}">C3 Charts</a></li>
                            <li><a href="{{asset('admin/charts-sparkline.html')}}">Sparkline Charts</a></li>
                            <li><a href="{{asset('admin/charts-knob.html')}}">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li class="menu-title mt-2">More</li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-share-variant"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 1.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                            <h3 class="my-3" data-plugin="counterup">1,587</h3>
                            <span class="badge badge-success mr-1"> +11% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                            <h3 class="my-3">$<span data-plugin="counterup">46,782</span></h3>
                            <span class="badge badge-danger mr-1"> -29% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-chart float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Average Price</h6>
                            <h3 class="my-3">$<span data-plugin="counterup">15.9</span></h3>
                            <span class="badge badge-pink mr-1"> 0% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                            <h3 class="my-3" data-plugin="counterup">1,890</h3>
                            <span class="badge badge-warning mr-1"> +89% </span> <span class="text-muted">Last year</span>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-lg-6 col-xl-8">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Sales Statistics</h4>

                            <div class="text-center">
                                <ul class="list-inline chart-detail-list mb-0">
                                    <li class="list-inline-item">
                                        <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>Series A</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6 class="text-success"><i class="mdi mdi-triangle-outline mr-1"></i>Series B</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6 class="text-muted"><i class="mdi mdi-square-outline mr-1"></i>Series C</h6>
                                    </li>
                                </ul>
                            </div>

                            <div id="morris-bar-stacked" class="morris-chart" style="height: 320px;"></div>

                        </div>
                    </div><!-- end col-->

                    <div class="col-lg-6 col-xl-4">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Trends Monthly</h4>

                            <div class="text-center mb-3">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-secondary">Today</button>
                                    <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                                    <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                                </div>
                            </div>

                            <div id="morris-donut-example" class="morris-chart" style="height: 268px;"></div>

                            <div class="text-center">
                                <ul class="list-inline chart-detail-list mb-0 mt-2">
                                    <li class="list-inline-item">
                                        <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>English</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6 class="text-success"><i class="mdi mdi-triangle-outline mr-1"></i>Italian</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <h6 class="text-muted"><i class="mdi mdi-square-outline mr-1"></i>French</h6>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div><!-- end col-->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Inbox</h4>

                                    <div class="inbox-widget slimscroll" style="max-height: 324px;">
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Chadengle</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-2.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-3.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-4.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-5.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-6.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Adhamdannaway</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">9:56 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-8.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Arashasghari</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/avatar-9.jpg')}}" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Joshaustin</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">9:56 AM</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Sales Statistics</h4>

                                    <p class="font-weight-semibold mb-3">iMacs <span class="text-danger float-right"><b>78%</b></span></p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <h4 class="header-title mb-3">Monthly Sales</h4>

                                    <p class="font-weight-semibold mb-2">Macbooks <span class="text-success float-right"><b>25%</b></span></p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <h4 class="header-title mb-3">Daily Sales</h4>

                                    <p class="font-weight-semibold mb-2">Mobiles <span class="text-warning float-right"><b>75%</b></span></p>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div><!-- end col-->

                    <div class="col-xl-5">
                        <div class="card-box">

                            <h4 class="header-title mb-3">Top Contracts</h4>

                            <div class="table-responsive">
                                <table class="table table-bordered table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="text-muted">Apple Technology</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Envato Pty Ltd.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="badge badge-danger">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Dribbble LLC.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Adobe Family</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Apple Technology</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="badge badge-danger">Unpaid</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Envato Pty Ltd.</th>
                                        <td>20/02/2014</td>
                                        <td>19/02/2020</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2016 - 2019 &copy; Uplon theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h4 class="font-18 m-0 text-white">Theme Customizer</h4>
    </div>
    <div class="slimscroll-menu">

        <div class="p-4">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class="mb-2">
                <img src="{{asset('admin/assets/images/layouts/light.png')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('admin/assets/images/layouts/dark.png')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="{{asset('admin/assets/css/bootstrap-dark.min.css')}}"
                       data-appStyle="{{asset('admin/assets/css/app-dark.min.css')}}" />
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('admin/assets/images/layouts/rtl.png')}}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="{{asset('admin/assets/css/app-rtl.min.css')}}" />
                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <a href="https://1.envato.market/XY7j5" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
    <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
</a>

<!-- Vendor js -->
<script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('admin/assets/libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboard init js-->
<script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>

</body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 03:35:59 GMT -->
</html>
