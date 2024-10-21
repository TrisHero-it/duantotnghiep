<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.phoenixcoded.net/dasho/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 02:54:26 GMT -->

<head>

    <title>@yield('title', env('APP_NAME'))</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Dasho Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
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
            <div class="navbar-content scroll-div   " id="layout-sidenav">



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
                    <li data-username="comments" class="nav-item"><a href="{{ route('admin.comment.index') }}"
                            class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-aperture"></i></span><span
                                class="pcoded-mtext">Comments</span></a></li>
                    <li data-username="comments" class="nav-item"><a href="{{ route('admin.catalogues.index') }}"
                            class="nav-link"><span class="pcoded-micon">
                                <i class="feather icon-menu"></i></span><span class="pcoded-mtext">Catalogues</span></a>
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

    @include('admin.include.alert')
        
    @stack('scripts')
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
