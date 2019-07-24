<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Olvide mi contraseña | BPB</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('homeadm/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('homeadm/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('homeadm/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('homeadm/css/style.css')}}" rel="stylesheet">
    <style type="text/css">
        body{
            background-image: url({{asset('homeadm/images/login2.png')}});
            width: 100%;
            background-repeat: no;
            background-size: cover;
        }
    </style>
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="card">
          <div class="logo">
              <a class="bg-cyan" href="/"><b>BPB</b></a>
              <small class="bg-blue">¿No puedes acceder a la plataforma?</small>
          </div>
            <div class="body">
                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                  @csrf
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                    <div class="msg">
                      Ingrese la dirección de correo electrónico que utilizó para registrarse. Le enviaremos un correo electrónico con su contraseña.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">mail</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" placeholder="Correo electrónico" required autofocus autocomplete="off">
                        </div>
                        @if ($errors->has('email'))
                          <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('email') }}</p></div>
                        @endif
                    </div>
                    <button class="btn btn-block btn-lg bg-orange waves-effect" type="submit">Recuperar mi contraseña</button>
                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{route('login')}}">¡Ya la recorde!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('homeadm/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('homeadm/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('homeadm/plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('homeadm/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('homeadm/js/admin.js')}}"></script>
    <script src="{{asset('homeadm/js/pages/examples/forgot-password.js')}}"></script>
</body>

</html>
