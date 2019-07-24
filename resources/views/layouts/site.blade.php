
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Portal BPB</title>
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{('bloque/mdbfr/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{('bloque/mdbfr/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{('bloque/mdbfr/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <header>
      {{-- navigation --}}
      <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
        <span class="fa-stack">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
          <a class="navbar-brand orange-text" href="/">
          <img src="{{asset('bloque/img/portal/brand.jpg')}}" height="32" widht="64" class="d-inline-block align-top" alt="bpb brand"> <b>Bloque Patriótico Boliviano</b>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#objetivos">Objetivos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contactos">Contactos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Albúm
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                  <a class="dropdown-item" href="{{route('fotos')}}">Fotos</a>
                  <a class="dropdown-item" href="{{route('prensa')}}">Prensa</a>
                  <a class="dropdown-item" href="{{route('agenda')}}">Agenda</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                  <i class="fab fa-twitter"></i> Twitter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/bloque.patrioticobolivia.7?hc_ref=ARQfB7j6y9wwZul2IrcrXz5Q54cZK04eq8t8pEZvIaF5I9ouX_2DPU2tingcdWOhyNo" target="h_blank">
                  <i class="fab fa-facebook-f"></i> Facebook
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"> Usuario</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                  aria-labelledby="navbarDropdownMenuLink-333">
                  <a class="dropdown-item" href="#">Participar</a>
                  <a class="dropdown-item" href="#">Inscribirse</a>
                  <a class="dropdown-item" href="#">Emitir Voto</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--/.Navbar -->
      <!-- Full Page Intro -->
      <div class="view" style="background-color: gray;background-image: url({{asset('bloque/img/portal/banner.png')}}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
          <!-- Content -->
          <div class="container">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                <h1 class="h1-responsive font-weight-bold mt-sm-5">El 20 de octubre Bolivia decide.</h1>
                <hr class="hr-light">
                <h6 class="mb-4">Por un voto justo, se ha implementado el voto transparente. El Bloque Patriótico Boliviano te invita a utilizar la webapp que te permitira subir tu participación en apoyo a una democracia justa.</h6>
                <a class="btn btn-white">Preguntas sobre uso</a>
                <a class="btn btn-outline-white">Ver aplicación</a>
              </div>
              <!--Grid column-->
              <!--Grid column-->
              <div class="col-md-6 col-xl-5 mt-md-5 wow fadeInRight" data-wow-delay="0.3s">
                <img src="{{asset('bloque/img/portal/celular.png')}}" alt="celular" class="img-fluid m-auto" width="80%">
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </div>
          <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
      </div>
      <!-- Full Page Intro -->
      {{-- end navigation --}}
  </header>
  <main>
    <!--Projects section v.4-->
    <section id="objetivos">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Objetivos del movimiento BPB</h2>
        <!-- Section description -->
        <p class="grey-text text-center w-responsive mx-auto mb-5">Nuestros objetivos son la aplicación de una democracia justa en relación a la coyuntura actual en la que vivimos los bolivianos.</p>

        <!--Grid row-->
        <div class="row mx-1">

            <!--Grid column-->
            <div class="col-md-12 mb-4">
                <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h6 class="purple-text"><i class="fas fa-plane"></i><strong> Travel</strong></h6>
                            <h3 class="card-title py-3 font-weight-bold"><strong>This is card title</strong></h3>
                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!</p>
                            <a class="btn btn-secondary btn-rounded"><i class="far fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h6 class="pink-text"><i class="fas fa-chart-pie"></i><strong> Marketing</strong></h6>
                            <h3 class="card-title py-3 font-weight-bold"><strong>This is card title</strong></h3>
                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!</p>
                            <a class="btn btn-pink btn-rounded"><i class="far fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                        <div>
                            <h6 class="green-text"><i class="far fa-eye"></i><strong> Entertainment</strong></h6>
                            <h3 class="card-title py-3 font-weight-bold"><strong>This is card title</strong></h3>
                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!</p>
                            <a class="btn btn-success btn-rounded"><i class="far fa-clone left"></i> View project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Projects section v.4-->
  </main>
  <!-- Footer -->
  <footer class="page-footer font-small blue-grey lighten-5">
    <section style="background-color: #21d192;" id="contactos">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">¡Conéctate con nosotros en las redes sociales!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-whatsapp white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
      <div id="sfc7gmau1xa3nep14dm7kfem6b16p5ztp2e"></div>
      <script type="text/javascript" src="https://counter7.wheredoyoucomefrom.ovh/private/counter.js?c=7gmau1xa3nep14dm7kfem6b16p5ztp2e&down=async" async></script>
      <noscript>
        <a href="https://www.contadorvisitasgratis.com" title="contador y localizador de visitas para blog">
          <img src="https://counter7.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=7gmau1xa3nep14dm7kfem6b16p5ztp2e" border="0" title="contador y localizador de visitas para bpb" alt="contador y localizador de visitas para bpb">
        </a>
      </noscript>
    </section>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Bloque Patriótico Boliviano</h6>
          <hr class="orange accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width:60px;">
          <p>En campaña  por el futuro y bienestar de nuestra patria amada Bolivia.</p>
          <div class="row">
            <div class="col-md-11 text-center">
              <iframe class="embed-responsive-item text-center" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Páginas</h6>
          <hr class="orange accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Página principal</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Asociaciones</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Asociaciones 2</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">WebApp "Voto transparente"</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Te interesa</h6>
          <hr class="orange accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">Conteo elecciones 2019</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Inscripciones a partido</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Preguntas frecuentes</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Ayuda</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contactos</h6>
          <hr class="orange accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i>Dirección base</p>
          <p>
            <i class="fas fa-envelope mr-3"></i>Email BPB</p>
          <p>
            <i class="fas fa-phone mr-3"></i> +591 612 03 714</p>
          <p>
            <i class="fas fa-print mr-3"></i> +591 xxx xx xxx</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-white-50 py-3" style="background-color:#003300;"><a href="/login" class="text-white">©</a> 2019 Copyright:
      <a class="dark-grey-text" href="#desarrolladores"> Desarrollo BPB</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('bloque/mdbfr/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('bloque/mdbfr/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('bloque/mdbfr/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('bloque/mdbfr/js/mdb.min.js')}}"></script>
  <script type="text/javascript">
    new WOW().init();
  </script>
  <script type="text/javascript">
  $(document).ready(function(){ //Hacia arriba
    irArriba();
    });

    function irArriba(){
    $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
    $(window).scroll(function(){
      if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
    });
    $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
    }
  </script>
</body>
</html>
