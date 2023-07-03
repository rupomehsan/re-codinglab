<!DOCTYPE html>

<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/themes/semi-dark-layout.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/app-assets/css/core/menu/vertical-menu.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/style.css">
    <!-- END: Custom CSS-->
    <!-- <link rel="stylesheet" href="{{ asset('backend') }}/assets/tailwind/tailwind.css"> -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/backend.css">
    @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="pace-done pace-done pace-done pace-done pace-done pace-done vertical-layout vertical-menu-modern  navbar-floating footer-static" cz-shortcut-listen="true">
    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div id="app">
        <div>

            <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
                <div class="navbar-container d-flex content">
                    <div class="bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav align-items-center">
                            <li class="nav-item"><a href="#" class="nav-link menu-toggle"><i class="fa fa-align-left"></i></a></li>
                            <li>
                                <div class="watch to_nav_watch">
                                    <div class="hour">12</div>:
                                    <div class="min">42</div>:
                                    <div class="sec">54</div>
                                    <div class="meridian">pm</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav align-items-center ms-auto">
                        <li class="nav-item dropdown dropdown-user">
                            <a id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle dropdown-user-link">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">
                                        mr
                                        admin
                                    </span> <span class="user-status">
                                        admin
                                    </span></div> <span class="avatar"><img src="/avatar.jpg" alt="avatar" height="40" width="40" class="round"> <span class="avatar-status-online"></span></span>
                            </a>
                            <div aria-labelledby="dropdown-user" class="dropdown-menu dropdown-menu-end"><a href="#" class="dropdown-item"><i data-feather="user" class="me-50"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i data-feather="settings" class="me-50"></i> Settings</a> <a href="#" class="dropdown-item"><i data-feather="power" class="me-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>