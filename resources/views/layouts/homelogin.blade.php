<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Plataforma | BPB</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{asset('homeadm/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{asset('homeadm/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{asset('homeadm/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- CSS propio-->
    <link href="{{asset('homeadm/css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page">
	@yield('logincontent')

    <!-- Jquery Core Js -->
    <script src="{{asset('homeadm/plugins/jquery/jquery.min.js')}}"></script>
    <script>
    $(document).ready(function () {
      $('#mostrar_contrasena').click(function () {
        if ($('#mostrar_contrasena').is(':checked')) {
          $('#password').attr('type', 'text');
        } else {
          $('#password').attr('type', 'password');
        }
      });
    });
    </script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('homeadm/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('homeadm/plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('homeadm/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Propio Js -->
    <script src="{{asset('homeadm/js/admin.js')}}"></script>
</body>
</html>
