@extends('layouts.homelogin')
@section('logincontent')
<style type="text/css">
    body{
        background-color: black;
        background-image: url({{asset('bloque/img/portal/banner.png')}});
        background-repeat: no;
        background-size: cover;
        height: 100%;
        width: 100%;
    }
</style>
    <div class="login-box">
        <div class="card">
            <div class="logo">
            <a class="bg-teal" href="/"><b>Bloque Patriótico Boliviano</b></a>
            <small class="bg-green">Bienvenido - Gracias por usar la plataforma</small>
            </div>
            <div class="body">
              @if (session('status'))
                <div class="alert bg-green alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{ session('status') }}
                </div>
              @endif
              @if (session('warning'))
                <div class="alert bg-orange alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{ session('warning') }}
                </div>
              @endif
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line @if ($errors->has('email')) focused error @endif">
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Nombre de usuario" required autocomplete="off" autofocus>
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
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Contraseña" required autocomplete="off">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="col-xs-8 p-t-5">
                            <input class="filled-in chk-col-orange" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                            {{ __('Recordar equipo') }}
                            </label>
                            <input class="filled-in chk-col-blue" type="checkbox" id="mostrar_contrasena" name="mostrar_contrasena">
                            <label class="form-check-label" for="mostrar_contrasena">
                            {{ __('Mostrar contraseña') }}
                            </label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-deep-orange waves-effect" type="submit">INGRESAR</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20 m-l-5">
                        <div class="col-xs-6">
                            <a href="{{route('register')}}">Registrarse</a>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="col-xs-6 algin-right">
                        <a href="{{ route('password.request') }}">
                            {{ __('Recuperar contraseña') }}
                        </a>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
