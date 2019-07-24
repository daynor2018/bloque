<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ADMINISTRAR | BPB</title>
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

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
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
        <a class="navbar-brand" href="/home">BPB</a>
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
<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth::user()->paternal_last_name) }}</div>
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
<div class="menu">
<ul class="list">
<li class="header">Menú de navegación</li>
<li class="active">
    <a href="/">
        <i class="material-icons">home</i>
        <span>Inicio</span>
    </a>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">work</i>
        <span>Miembros</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{route('showaemployee')}}">
                <span>Memorias</span>
            </a>
        </li>
        <li>
            <a href="{{route('showiemployee')}}">
                <span>Conteo Votos</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <span>Opciones de administración</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{route('addemployee')}}">
                        <span>Registrar nuevo empleado</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('showemployee')}}">
                        <span>Opciones de empleados</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">find_in_page</i>
        <span>Memorias</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{route('showpemployee')}}">
                <span>Crear contratos</span>
            </a>
        </li>
        <li>
            <a href="{{route('showacontract')}}">
                <span>opciones de contratos</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="#">
        <i class="material-icons">accessibility</i>
        <span>Votos</span>
    </a>
</li>
<li>
    <a href="{{route('showapromotion')}}">
        <i class="material-icons">priority_high</i>
        <span>Promociones</span>
    </a>
</li>
<li>
    <a href="{{route('showatag')}}">
        <i class="material-icons">rate_review</i>
        <span>Categorias</span>
    </a>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">domain</i>
        <span>Proveedores</span>
    </a>
    <ul class="ml-menu">
        <li>
            <a href="{{route('showaprovider')}}">Proveedores activos</a>
        </li>
        <li>
            <a href="{{route('showprovider')}}">Opciones de lista de proveedores</a>
        </li>
        <li>
            <a href="{{route('showiprovider')}}">Proveedores inactivos</a>
        </li>
    </ul>
</li>
<li>
    <a href="{{route('showaproduct')}}">
        <i class="material-icons">redeem</i>
        <span>Productos</span>
    </a>
</li>
<li>
    <a href="{{route('showapackage')}}">
        <i class="material-icons">view_compact</i>
        <span>Cantidad de productos</span>
    </a>
</li>
<li>
    <a href="{{route('showapurchase')}}">
        <i class="material-icons">add_shopping_cart</i>
        <span>Compras</span>
    </a>
</li>
<li>
    <a href="pages/helper-classes.html">
        <i class="material-icons">credit_card</i>
        <span>Ventas</span>
    </a>
</li>
<li>
    <a href="pages/changelogs.html">
        <i class="material-icons">update</i>
        <span>Logs</span>
    </a>
</li>
<li class="header">Opciones avanzadas</li>
<li>
    <a href="javascript:void(0);">
        <i class="material-icons col-orange">poll</i>
        <span>Graficos de la empresa</span>
    </a>
</li>
</ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
    &copy; 2019 - 2020 <a href="javascript:void(0);">BPB</a>.
    </div>
    <div class="version">
    <b>Version: </b> 0.0.0
    </div>
</div>
<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
<ul class="nav nav-tabs tab-nav-right" role="tablist">
<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
<ul class="demo-choose-skin">
    <li data-theme="red">
        <div class="red"></div>
        <span>Red</span>
    </li>
    <li data-theme="pink">
        <div class="pink"></div>
        <span>Pink</span>
    </li>
    <li data-theme="purple">
        <div class="purple"></div>
        <span>Purple</span>
    </li>
    <li data-theme="deep-purple">
        <div class="deep-purple"></div>
        <span>Deep Purple</span>
    </li>
    <li data-theme="indigo">
        <div class="indigo"></div>
        <span>Indigo</span>
    </li>
    <li data-theme="blue">
        <div class="blue"></div>
        <span>Blue</span>
    </li>
    <li data-theme="light-blue">
        <div class="light-blue"></div>
        <span>Light Blue</span>
    </li>
    <li data-theme="cyan">
        <div class="cyan"></div>
        <span>Cyan</span>
    </li>
    <li data-theme="teal" class="active">
        <div class="teal"></div>
        <span>Teal</span>
    </li>
    <li data-theme="green">
        <div class="green"></div>
        <span>Green</span>
    </li>
    <li data-theme="light-green">
        <div class="light-green"></div>
        <span>Light Green</span>
    </li>
    <li data-theme="lime">
        <div class="lime"></div>
        <span>Lime</span>
    </li>
    <li data-theme="yellow">
        <div class="yellow"></div>
        <span>Yellow</span>
    </li>
    <li data-theme="amber">
        <div class="amber"></div>
        <span>Amber</span>
    </li>
    <li data-theme="orange">
        <div class="orange"></div>
        <span>Orange</span>
    </li>
    <li data-theme="deep-orange">
        <div class="deep-orange"></div>
        <span>Deep Orange</span>
    </li>
    <li data-theme="brown">
        <div class="brown"></div>
        <span>Brown</span>
    </li>
    <li data-theme="grey">
        <div class="grey"></div>
        <span>Grey</span>
    </li>
    <li data-theme="blue-grey">
        <div class="blue-grey"></div>
        <span>Blue Grey</span>
    </li>
    <li data-theme="black">
        <div class="black"></div>
        <span>Black</span>
    </li>
</ul>
</div>
<div role="tabpanel" class="tab-pane fade" id="settings">
<div class="demo-settings">
    <p>GENERAL SETTINGS</p>
    <ul class="setting-list">
        <li>
            <span>Report Panel Usage</span>
            <div class="switch">
                <label><input type="checkbox" checked><span class="lever"></span></label>
            </div>
        </li>
        <li>
            <span>Email Redirect</span>
            <div class="switch">
                <label><input type="checkbox"><span class="lever"></span></label>
            </div>
        </li>
    </ul>
    <p>SYSTEM SETTINGS</p>
    <ul class="setting-list">
        <li>
            <span>Notifications</span>
            <div class="switch">
                <label><input type="checkbox" checked><span class="lever"></span></label>
            </div>
        </li>
        <li>
            <span>Auto Updates</span>
            <div class="switch">
                <label><input type="checkbox" checked><span class="lever"></span></label>
            </div>
        </li>
    </ul>
    <p>ACCOUNT SETTINGS</p>
    <ul class="setting-list">
        <li>
            <span>Offline</span>
            <div class="switch">
                <label><input type="checkbox"><span class="lever"></span></label>
            </div>
        </li>
        <li>
            <span>Location Permission</span>
            <div class="switch">
                <label><input type="checkbox" checked><span class="lever"></span></label>
            </div>
        </li>
    </ul>
</div>
</div>
</div>
</aside>
<!-- #END# Right Sidebar -->
</section>

<section class="content">
<div class="container-fluid">
<div class="block-header">
<h2>Navegación</h2>
</div>

<!-- Widgets -->
<div class="row clearfix">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="info-box bg-pink hover-expand-effect">
    <div class="icon">
        <i class="material-icons">playlist_add_check</i>
    </div>
    <div class="content">
        <div class="text">Productos vencidos</div>
        <div class="number count-to" data-from="0" data-to="0" data-speed="15" data-fresh-interval="1"></div>
    </div>
</div>
</div>
</div>
<!-- #END# Widgets -->
<!-- CPU Usage -->
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
