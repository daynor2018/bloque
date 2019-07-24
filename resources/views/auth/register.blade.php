<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registro | BPB</title>

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
            background-image: url({{asset('serv/img/portal/banner.png')}});
            width: 100%;
            background-repeat: no;
            background-size: cover;
        }
    </style>
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="card">
          <div class="logo">
              <a class="bg-cyan" href="javascript:void(0);"><b>BPB</b></a>
              <small class="bg-blue">¿Quieres ser parte de la plataforma?</small>
          </div>
            <div class="body">
                <form id="sign_up" method="POST" action="{{ route('register') }}">
                  @csrf
                    <div class="msg">Introduzca los siguientes datos requeridos:</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  placeholder="Nombre" value="{{ old('name') }}" required autofocus autocomplete="off">
                        </div>
                        @if ($errors->has('name'))
                        <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('name') }}</p></div>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autocomplete="off">
                        </div>
                        @if ($errors->has('email'))
                        <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('email') }}</p></div>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Ingrese una contraseña"  minlength="9" required>
                        </div>
                        @if ($errors->has('password'))
                        <div class="help-info"><p class="font-bold col-pink">{{ $errors->first('password') }}</p></div>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme su contraseña" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-orange" checked required>
                        <label for="terms">Estoy de acuerdo con los <a href="#terminos" data-toggle="modal" data-target="#smallModal">terminos de uso</a>.</label>
                        {{--  --}}
                        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" style="display: none;">
                          <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                  <div class="modal-header bg-blue">
                                      <h4 class="modal-title" id="smallModalLabel">Registro</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p class="text-justify">Los Usuarios pueden navegar libremente por el Website, pero deberán estar registrados para poder realizar alguna compra o utilizar los servicios ofrecidos en él.</p>
                                    <p class="text-justify">El registro de los Usuarios se realiza ingresando al Website, y no tiene costo alguno.</p>
                                    <p class="text-justify">Es obligatorio completar el formulario en todos los campos con datos válidos y verdaderos, de manera exacta y precisa. Para un correcto funcionamiento del sistema, es necesario que los Usuarios mantengan sus datos actualizados. BPB Podrá proceder a verificar la identidad del Usuario y/o de los datos consignados por éste.</p>
                                    <p class="text-justify">BPB. No se responsabiliza por la veracidad o certeza de los datos provistos por los Usuarios. Asimismo, BPB Se reserva el derecho de suspender temporal o definitivamente a los Usuarios en caso de incumplimiento de los Términos y Condiciones, como así también de rechazar solicitudes.</p>
                                    <p class="text-justify">Los Usuarios accederán a su Cuenta Personal (la «Cuenta») mediante un nombre de Usuario y una clave personal que deberán escoger. En caso de que estos datos sean olvidados por el Usuario, BPB Cuenta con un servicio de ayuda para recuperarlos. Para esto se deberá hacer «clic» en la opción correspondiente e ingresar el e-mail que se proporcionó al momento del Registro. Al finalizar, el sistema le enviará de manera confidencial a esa cuenta su clave personal.</p>
                                    <p class="text-justify">Así como BPB se compromete a mantener la confidencialidad de los datos aportados por los Usuarios para su registro, los Usuarios se comprometen a mantener la confidencialidad de su nombre y clave de acceso. De conformidad con lo expresado en el párrafo anterior, los Usuarios son responsables del uso que se haga de su clave y deberán tener presente que si otras personas tienen o pueden tener en el futuro acceso a la cuenta de e-mail consignada como propia en el formulario de registro, éstas también podrían solicitar su clave de acceso y nombre de Usuario. Es obligación exclusiva del Usuario tomar las medidas pertinentes para que esto no suceda. El Usuario se compromete a notificar inmediatamente y de manera fehaciente a BPB Cualquier uso no autorizado de su Cuenta de Usuario, y a mantenerlo indemne en el caso de que esto produzca algún daño a la Empresa o a terceros.</p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                        {{--  --}}
                    </div>

                    <button class="btn btn-block btn-lg bg-orange waves-effect" type="submit">Registrarse</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="{{route('login')}}">¡Ya tengo una cuenta!</a>
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
    <script src="{{asset('homeadm/js/pages/examples/sign-up.js')}}"></script>
</body>
</html>
