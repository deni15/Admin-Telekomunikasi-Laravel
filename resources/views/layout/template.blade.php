<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/vendor/chartist/css/chartist-custom.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('/assets/admin/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('/assets/admin/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/admin/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/assets/admin/img/favicon.png')}}">


</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="{{asset('/assets/img/logo/Logo_Selnet.jpg')}}" style="width: 100px;margin-left:40px;" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>ruang penyimpanan hampir penuh</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>perusahaan mempunyai permintaan lebih</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>profit perusahaan bulan ini tercapai</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>meeting dimulai 1 jam lagi</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>permintaan di setujui</a></li>
                                <li><a href="#" class="more">lihat semua notifikasi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->nama}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                                <li><a href="{{ url('/') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{url('/dashboard')}}" class="active"><i class="lnr lnr-home"></i> <span>Halaman Utama</span></a></li>
                        <li><a href="{{url('/dashboarduser')}}" class=""><i class="lnr lnr-website"></i> <span>Lihat website</span></a></li>
                        <li><a href="{{url('/users')}}" class=""><i class="fa fa-users"></i> <span>Users</span></a></li>

                        <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span> <span class="badge badge-info">5</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-line-chart"></i> <span>Profit</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{{url('/proyects/create')}}" class="">Add Proyect</a></li>
                                    <li><a href="{{url('/proyects')}}" class="">List Proyect</a></li>
                                    <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        @yield('container')

        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">Created By <i class="fa fa-love"></i><a href="">Muhamad Deni</a>
                </p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->


    <script src="{{asset('/assets/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('/assets/admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('/assets/admin/vendor/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('/assets/admin/scripts/klorofil-common.js')}}"></script>

</body>

</html>