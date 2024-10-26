<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 02:54:26 GMT -->

<head>

    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="admin templates, bootstrap admin templates, bootstrap 5, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">

    <!-- notification css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/notification/css/notification.min.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('styles')
    @yield('header')
    
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-dark menu-item-icon-style6 ">
        <div class="navbar-wrapper ">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">

                    <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" class="logo images">
                    <img src="{{ asset('assets/images/logo-icon.svg') }}" alt="logo" class="logo-thumb images">
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Menu quản lí</label>
                    </li>
                    <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="index.html" class="">Analytics</a></li>
                            <li class=""><a href="dashboard-sale.html" class="">Sales</a></li>
                            <li class=""><a href="dashboard-project.html" class="">Project</a></li>
                            <li class=""><a href="dashboard-help.html" class="">Helpdesk<span
                                        class="pcoded-badge label label-danger">NEW</span></a></li>
                        </ul>
                    </li>
                    <li data-username="comments" class="nav-item"><a href="{{ route('admin.comments.index') }}"
                            class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-aperture"></i></span><span
                                class="pcoded-mtext">Comments</span></a></li>

                    <li data-username="vertical horizontal box layout RTL fixed static collapse menu color icon dark background image"
                        class="nav-item pcoded-hasmenu">
                        <a href="{{route('players.index')}}" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-user-secret"></i></span><span class="pcoded-mtext">Quản lí player</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{route('players.index')}}" class="">Danh sách player</a></li>
                    <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                        class="nav-item pcoded-hasmenu">
                        <a href="/admin/tocaos" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-aperture"></i></span><span class="pcoded-mtext">Tố Cáo Người
                                Chơi</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="/admin/tocaos" class="">Danh Sách</a></li>
                        </ul>
                    </li>
                    <li data-username="comments" class="nav-item"><a href="{{ route('comments.index') }}"
                            class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-aperture"></i></span><span
                                class="pcoded-mtext">Comments</span></a></li>
                    <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Danh mục</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{ route('catalogues.index') }}" class="">Danh sách</a></li>
                            <li class=""><a href="{{ route('catalogues.create') }}" class="">Thêm mới</a></li>
                        </ul>
                    </li>
                    <li data-username="dangtins" class="nav-item"><a href="{{ route('dangtins.index') }}"
                            class="nav-link"><span class="pcoded-micon">
                                <i class="feather icon-video"></i></span><span class="pcoded-mtext">Đăng tin</span></a>
                    </li>
                    <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Phương thức thanh toán</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="{{ route('phuongthucthanhtoans.index') }}" class="">Danh sách</a></li>
                            <li class=""><a href="{{ route('phuongthucthanhtoans.create') }}" class="">Thêm mới</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- [ navigation menu ] end -->



    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">

        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="logo images">
                <img src="{{ asset('assets/images/logo-icon.svg') }}" alt="" class="logo-thumb images">
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <div class="main-search open">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="ms-1 input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-end notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-end">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="d-flex">
                                        <img class="img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}"
                                            alt="Profile Image">
                                        <div class="flex-grow-1">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="d-flex">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Profile Image">
                                        <div class="flex-grow-1">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="d-flex">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                            alt="Profile Image">
                                        <div class="flex-grow-1">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="d-flex">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Profile Image">
                                        <div class="flex-grow-1">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="d-flex">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg"
                                            alt="Profile Image">
                                        <div class="flex-grow-1">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="d-flex">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Profile Image">
                                        <div class="flex-grow-1">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>
                                    <span class="text-muted">Free Trial</span>
                                    <span class="h6">doe@company.com</span>
                                </span>
                            </div>
                            <ul class="pro-body">
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Settings</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a>
                                </li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i>
                                        My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i
                                            class="feather icon-lock"></i>
                                        Lock Screen</a></li>
                                <li><a href="#!" class="dropdown-item"><i
                                            class="feather icon-power text-danger"></i>
                                        Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>
    <!-- [ Header ] end -->


    <!-- [ chat user list ] start -->
    <section class="header-user-list">
        <a href="#!" class="h-close-text"><i class="feather icon-x"></i></a>
        <ul class="nav nav-tabs" id="chatTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active text-uppercase" id="chat-tab" data-bs-toggle="tab" href="#chat"
                    role="tab" aria-controls="chat" aria-selected="true"><i
                        class="feather icon-message-circle me-2"></i>Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" id="user-tab" data-bs-toggle="tab" href="#user"
                    role="tab" aria-controls="user" aria-selected="false"><i
                        class="feather icon-users me-2"></i>User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" id="setting-tab" data-bs-toggle="tab" href="#setting"
                    role="tab" aria-controls="setting" aria-selected="false"><i
                        class="feather icon-settings me-2"></i>Setting</a>
            </li>
        </ul>
        <div class="tab-content" id="chatTabContent">
            <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                <div class="h-list-header">
                    <div class="input-group">
                        <input type="text" id="search-friends" class="form-control"
                            placeholder="Search Friend . . .">
                    </div>
                </div>
                <div class="h-list-body">
                    <div class="main-friend-cont scroll-div">
                        <div class="main-friend-list">
                            <div class="d-flex userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-1.jpg" alt="Profile Image ">
                                    <div class="live-status">3</div>
                                </a>
                                <div class="flex-grow-1">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                            .
                                        </small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-2.jpg" alt="Profile Image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small
                                            class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="offline"
                                data-username="Alia">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-1.jpg" alt="Profile Image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="offline"
                                data-username="Suzen">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-4.jpg" alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min
                                            ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-1.jpg" alt="Profile Image ">
                                    <div class="live-status">3</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                            .
                                        </small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-2.jpg" alt="Profile Image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small
                                            class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="offline"
                                data-username="Alia">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-1.jpg" alt="Profile Image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="offline"
                                data-username="Suzen">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-4.jpg" alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min
                                            ago</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-1.jpg" alt="Profile Image ">
                                    <div class="live-status">3</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing .
                                            .
                                        </small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-2.jpg" alt="Profile Image">
                                    <div class="live-status">1</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small
                                            class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="assets/images/user/avatar-3.jpg" alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
                <div class="h-list-body">
                    <div class="main-friend-cont scroll-div">
                        <div class="main-friend-list">
                            <div class="media px-3 d-flex align-items-center mt-3">
                                <a class="media-left m-r-15" href="#!">
                                    <div
                                        class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                        <i class="icon feather icon-users"></i>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <p class="chat-header f-w-600 mb-0">New Group</p>
                                </div>
                            </div>
                            <div class="media p-3 d-flex align-items-center">
                                <a class="media-left m-r-15" href="#!">
                                    <div
                                        class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                        <i class="icon feather icon-user-plus"></i>
                                    </div>
                                </a>
                                <div class="media-body">
                                    <p class="chat-header f-w-600 mb-0">New Contact</p>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('assets/images/user/avatar-1.jpg') }}"
                                        alt="Profile Image "></a>
                                <div class="media-body">
                                    <p class="chat-header">Josephin Doe<small class="d-block">i am not what happened
                                            .
                                            .</small></p>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('assets/images/user/avatar-2.jpg') }}"
                                        alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small class="d-block">Avalable</small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="3" data-status="online"
                                data-username="Alice">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('assets/images/user/avatar-3.jpg') }}"
                                        alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alice<small class="d-block">hear using Dasho</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="4" data-status="offline"
                                data-username="Alia">
                                <a class="media-left" href="#!">
                                    <div
                                        class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center">
                                        A</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Alia<small class="d-block text-muted">Avalable</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="5" data-status="offline"
                                data-username="Suzen">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('assets/images/user/avatar-4.jpg') }}"
                                        alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Suzen<small class="d-block text-muted">Avalable</small>
                                    </h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="1" data-status="online"
                                data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <div
                                        class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center">
                                        JD</div>
                                </a>
                                <div class="media-body">
                                    <h6 class="chat-header">Josephin Doe<small class="d-block text-muted">Don't send
                                            me
                                            image</small></h6>
                                </div>
                            </div>
                            <div class="media userlist-box" data-id="2" data-status="online"
                                data-username="Lary Doe">
                                <a class="media-left" href="#!"><img class="media-object img-radius"
                                        src="{{ asset('assets/images/user/avatar-2.jpg') }}"
                                        alt="Profile Image"></a>
                                <div class="media-body">
                                    <h6 class="chat-header">Lary Doe<small class="d-block text-muted">not send free
                                            msg</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                <div class="p-4 main-friend-cont scroll-div">
                    <h6 class="mt-2"><i class="feather icon-monitor me-2"></i>Desktop settings</h6>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-1" checked>
                            <label for="cn-p-1" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Allow desktop notification</label>
                    </div>
                    <p class="text-muted ms-5">You get latest content at a time when data will updated</p>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-5">
                            <label for="cn-p-5" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Store Cookie</label>
                    </div>
                    <h6 class="mb-0 mt-5"><i class="feather icon-layout me-2"></i>Application settings</h6>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-3" checked>
                            <label for="cn-p-3" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Backup Storage</label>
                    </div>
                    <p class="text-muted mb-0 ms-5">Automaticaly take backup as par schedule</p>
                    <div class="form-group mb-4">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-4" checked>
                            <label for="cn-p-4" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">Allow guest to print file</label>
                    </div>
                    <h6 class="mb-0 mt-5"><i class="feather icon-globe me-2"></i>System settings</h6>
                    <hr>
                    <div class="form-group mb-0">
                        <div class="switch switch-primary d-inline m-r-10">
                            <input type="checkbox" id="cn-p-2">
                            <label for="cn-p-2" class="cr switch-alignment"></label>
                        </div>
                        <label class="f-w-600">View other user chat</label>
                    </div>
                    <p class="text-muted ms-5">Allow to show public user message</p>
                </div>
            </div>
        </div>
    </section>
    <!-- [ chat user list ] end -->

    <!-- [ chat message ] start -->
    <section class="header-chat">
        <div class="h-list-header">
            <h6>Josephin Doe</h6>
            <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
        </div>
        <div class="h-list-body">
            <div class="main-chat-cont scroll-div">
                <div class="main-friend-chat">
                    <div class="d-flex chat-messages">
                        <a class="media-left photo-table" href="#!"><img
                                class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Profile Image"></a>
                        <div class="flex-grow-1 chat-menu-content">
                            <div class="">
                                <p class="chat-cont">hello tell me something</p>
                                <p class="chat-cont">about yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="d-flex chat-messages">
                        <div class="flex-grow-1 chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                        <a class="media-right photo-table" href="#!"><img
                                class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Profile Image"></a>
                    </div>
                    <div class="d-flex chat-messages">
                        <a class="media-left photo-table" href="#!"><img
                                class="media-object img-radius img-radius m-t-5"
                                src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="Profile Image"></a>
                        <div class="flex-grow-1 chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you help me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-list-footer">
            <div class="input-group">
                <input type="file" class="chat-attach" style="display:none">
                <a href="#!" class="input-group-prepend btn btn-success btn-attach">
                    <i class="feather icon-paperclip"></i>
                </a>
                <input type="text" name="h-chat-text" class="form-control h-send-chat"
                    placeholder="Write hear . . ">
                <button type="submit" class="input-group-append btn-send btn btn-primary">
                    <i class="feather icon-message-circle"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- [ chat message ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu-setting.js') }}"></script>

    @yield('script')
    <!-- dashboard-custom js -->
    <script src="{{ asset('assets/js/pages/dashboard-analytics.js') }}"></script>
    <script>
        $(document).ready(function() {
            window.previewImage = function(event, imgId) {
                const file = event.target.files[0];
                const reader = new FileReader();
                reader.onload = function() {
                    const imgElement = document.getElementById(imgId);
                    imgElement.src = reader.result; // Cập nhật nguồn cho ảnh
                }
                if (file) {
                    reader.readAsDataURL(file);
                }
            }
        })
    </script>
    @stack('scripts')
    @yield('scripts')
    <div class="footer-fab">
        <div class="b-bg">
            <i class="fas fa-question"></i>
        </div>
        <div class="fab-hover">
            <ul class="list-unstyled">
                <li><a href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index-bc-package.html"
                        target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i
                            class="feather icon-layers"></i></a></li>
                <li><a href="https://html.phoenixcoded.net/dasho/bootstrap/doc/index.html" target="_blank"
                        data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i
                            class="feather icon feather icon-book"></i></a></li>
            </ul>
        </div>
    </div>
</body>


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 02:55:09 GMT -->

</html>