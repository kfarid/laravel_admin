<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/admin/dist/css/colorbox.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('homeAdmin')}}" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div
            class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
            <div class="os-resize-observer-host observed">
                <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
            </div>
            <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                <div class="os-resize-observer"></div>
            </div>
            <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 222px;"></div>
            <div class="os-padding">
                <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                    <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="info" style="color: white; display: inline-block" >
                                <i class="nav-icon fas fa-user"></i>
                            </div>
                            <div class="info"  style="display: inline-block">
                                <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                            </div>
                            <div class="info d-flex">
                                <a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-thin fa-arrow-right-from-bracket"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                                     with font-awesome or any other icon font library -->
                                <li class="nav-item ">
                                    <a href="{{route('homeAdmin')}}" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link ">
                                        <i class="nav-icon fas fa-solid fa-newspaper"></i>
                                        <p>
                                            Blog
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{route('post.index')}}" class="nav-link">
                                                <p>All Blog</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('post.create')}}" class="nav-link">
                                                <p>Create Blog</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-align-left"></i>
                                        <p>
                                            Category
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{route('category.index')}}" class="nav-link">
                                                <p>All Category</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('category.create')}}" class="nav-link">
                                                <p>Create Category</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-align-left"></i>
                                        <p>
                                            Users
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{route('user.index')}}" class="nav-link">
                                                <p>All User</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('user.create')}}" class="nav-link">
                                                <p>Create User</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-align-left"></i>
                                        <p>
                                            Contact
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{route('contact.index')}}" class="nav-link">
                                                <p>All Contact</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('contact.create')}}" class="nav-link">
                                                <p>Create Contact</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                </div>
            </div>
            <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                <div class="os-scrollbar-track">
                    <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);">

                    </div>
                </div>
            </div>
            <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                <div class="os-scrollbar-track">
                    <div class="os-scrollbar-handle" style="height: 16.4091%; transform: translate(0px, 0px);">

                    </div>
                </div>
            </div>
            <div class="os-scrollbar-corner">

            </div>
        </div>
        <!-- /.sidebar -->
    </aside>


@yield('content')
<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{asset('admin/plugins/jquery/jquery.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-ui/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('/packages/barryvdh/elfinder/js/standalonepopup.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/b10azbt9a5j5j6xgav88ywdr129t74d1ddw75vnxfpwb00l2/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
<script type="text/javascript" src="{{asset('/admin/dist/js/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('admin/admin.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.js')}}"></script>
<script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
