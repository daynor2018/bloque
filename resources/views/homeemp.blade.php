<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>BPB</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('homeadm/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{asset('homeadm/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{asset('homeadm/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="{{asset('homeadm/plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{asset('homeadm/css/style.css')}}" rel="stylesheet" />
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('homeadm/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-black">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-black">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        <p>Espere unos momentos mientras se carga el contenido...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
        <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="/">BPB</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
        </ul>
        </div>
        </div>
    </nav>
<!-- #Top Bar -->
<section>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
<!-- User Info -->
<div class="user-info">
<div class="image">
<img src="{{asset('img/user/'.Auth::user()->image)}}" width="48" height="48" alt="User" />
</div>
<div class="info-container">
<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ ucfirst(Auth::user()->name)}}</div>
<div class="email">{{ ucfirst(Auth::user()->email) }}</div>
<div class="btn-group user-helper-dropdown">
    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
    <ul class="dropdown-menu pull-right">
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Cerrar sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
    </ul>
</div>
</div>
</div>
<!-- #User Info -->
<!-- Menu -->
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
    &copy; 2019 - 2020 <a href="javascript:void(0);">KeyDayP - Material Design</a>.
    </div>
    <div class="version">
    <b>Version: </b> BETA
    </div>
</div>
<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<!-- #END# Right Sidebar -->
</section>

<section class="content">
<div class="container-fluid">
<div class="block-header">
<h2>Plataforma para empleado</h2>
<h2>Aún en desarrollo</h2>
</div>

<!-- CPU Usage -->
<div class="row clearfix">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="card">
    <div class="header">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-6">
                <h2>Uso del cpu (%)</h2>
            </div>
            <div class="col-xs-12 col-sm-6 align-right">
                <div class="switch panel-switch-btn">
                    <span class="m-r-10 font-12">Tiempo real</span>
                    <label>Apagado<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>Encendido</label>
                </div>
            </div>
        </div>
        <ul class="header-dropdown m-r--5">
        </ul>
    </div>
    <div class="body">
        <div id="real_time_chart" class="dashboard-flot-chart"></div>
    </div>
</div>
</div>
</div>
<!-- #END# CPU Usage -->

</div>
</section>

<!-- Jquery Core Js -->
<script src="{{asset('homeadm/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Core Js -->
<script src="{{asset('homeadm/plugins/bootstrap/js/bootstrap.js')}}"></script>
<!-- Select Plugin Js -->
<script src="{{asset('homeadm/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<!-- Slimscroll Plugin Js -->
<script src="{{asset('homeadm/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{asset('homeadm/plugins/node-waves/waves.js')}}"></script>
<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('homeadm/plugins/jquery-countto/jquery.countTo.js')}}"></script>
<!-- Morris Plugin Js -->
<script src="{{asset('homeadm/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('homeadm/plugins/morrisjs/morris.js')}}"></script>
<!-- ChartJs -->
<script src="{{asset('homeadm/plugins/chartjs/Chart.bundle.js')}}"></script>
<!-- Flot Charts Plugin Js -->
<script src="{{asset('homeadm/plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('homeadm/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('homeadm/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('homeadm/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('homeadm/plugins/flot-charts/jquery.flot.time.js')}}"></script>
<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('homeadm/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('homeadm/js/admin.js')}}"></script>
<script src="{{asset('homeadm/js/pages/index.js')}}"></script>
<!-- Demo Js -->
<script src="{{asset('homeadm/js/demo.js')}}"></script>
</body>
</html>
