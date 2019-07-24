<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenido a BPB</title>
  </head>
  <body>
    <h2>Bienvenido a la plataforma, {{$user['name']}}</h2>
    <br/>
    Ha sido registrado con el siguiente correo electrónico: "{{$user['email']}}" y tu contraseña es: "{{$user['contra']}}", Por favor sigue la siguiente dirección para continuar.
    <br/>
    <a href="{{url('user/verify', $user->verifyUser->token)}}">Verificar email</a>
  </body>
</html>
