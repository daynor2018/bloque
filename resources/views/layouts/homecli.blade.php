<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>BPB</title>
  <!-- Iconos de Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap -->
  <link href="{{asset('homeuser/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- MDB -->
  <link href="{{asset('homeuser/css/mdb.min.css')}}" rel="stylesheet">
  <!-- CSS propio -->
  <link href="{{asset('homeuser/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="/">
        <strong class="deep-orange-text">BPB</strong>
      </a>
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="/">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#somos" data-toggle="modal" data-target="#quienes">¿Quienes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#como" data-toggle="modal" data-target="#comprar">¿Como comprar?</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="#carrito" data-toggle="modal" data-target="#carrito">
              <span class="badge green z-depth-1 mr-1"> Disponible </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Ver carrito </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link border border-light rounded waves-effect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-in-alt"></i>Cerrar sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
{{--  --}}
{{--  --}}
<div class="modal fade" id="quienes" tabindex="-1" role="dialog" style="display: none;">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header bg-blue">
              <h4 class="modal-title" id="quienesLabel">¿Quienes somos?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <p class="text-justify">BPB es una empresa dedicada a la venta de productos dentro de la canasta familiar. Nuestro objetivo es ofrecer la experiencia de compra más actual a los mejores precios.</p>
            <p class="text-justify">Tenemos a su disposición una gran variedad de productos, los cuales son renovados cada temporada.</p>
            <p class="text-justify">Tenemos un equipo que está dedicado a satisfacer tus necesidades y que te contestará las dudas con la mayor brevedad posible.</p>
            <p class="text-justify">Para una mejor comunicación puedes contactar con nosotros a través de WhatsApp y tan sólo en unos minutos tu duda será resuelta. <i class="fas fa-phone"></i><b>+591 61203714</p>
          </div>
      </div>
  </div>
</div>
{{--  --}}
<div class="modal fade" id="carrito" tabindex="-1" role="dialog" style="display: none;">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header bg-blue">
              <h4 class="modal-title" id="carritoLabel">Productos en el carrito</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            {{--  --}}
            <table class="table table-bordered">
             	<thead>
                 	<tr>
                     	<th>Producto</th>
                     	<th>Cantidad</th>
                     	<th>Precio por paquete</th>
                     	<th>Subtotal</th>
                 	</tr>
             	</thead>

             	<tbody>

             		<?php foreach(Cart::content() as $row) :?>
                 		<tr>
                     		<td>
                          <p><strong><?php echo $row->name; ?></strong></p>
                         		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                     		</td>
                     		<td><input type="text" value="<?php echo $row->qty; ?>"></td>
                     		<td>$<?php echo $row->price; ?></td>
                     		<td>$<?php echo $row->price*$row->qty; ?></td>
                 		</tr>

          	   	<?php endforeach;?>

             	</tbody>

             	<tfoot>
             		<tr>
             			<td colspan="2">&nbsp;</td>
             			<td>Subtotal</td>
             			<td><?php echo Cart::subtotal(); ?></td>
             		</tr>
             		<tr>
             			<td colspan="2">&nbsp;</td>
             			<td>Descuento</td>
             			<td><?php echo "0"; ?></td>
             		</tr>
             		<tr>
             			<td colspan="2">&nbsp;</td>
             			<td>Total</td>
             			<td><?php echo Cart::Total()-Cart::Tax(); ?></td>
             		</tr>
             	</tfoot>
          </table>
            {{--  --}}
            <a href="{{route('offcar')}}" class="btn btn-block bg-blue-grey">Vaciar carrito</a>
          </div>
      </div>
  </div>
</div>
{{--  --}}
<div class="modal fade" id="comprar" tabindex="-1" role="dialog" style="display: none;">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header bg-blue">
              <h4 class="modal-title" id="comprarLabel">¿Cómo comprar?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Registrate en BPB</li>
              <li>Selecciona y sube al carrito los productos a comprar.</li>
              <li>Confirme su contenido y envie el Pedido.</li>
              <li>Ventas se contacta con usted, para confirmar montos y plazos.</li>
              <li>Pague el importe de la proforma enviada.</li>
              <li>Reporte el pago.</li>
              <li>Usted recoge los productos y la factura, que enviamos.</li>
            </ol>
          </div>
      </div>
  </div>
</div>
{{--  --}}
{{--  --}}
  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Products v.3-->
      @yield('usercontent')
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <!--Call to action-->
    <div class="pt-4">
    	<p>Version 0.5.5</p>
    </div>
    <!--/.Call to action-->
	<div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://www.unifranz.edu.bo/" target="_blank"> UNIFRANZ </a>
    </div>
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('homeuser/js/jquery-3.4.0.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('homeuser/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('homeuser/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('homeuser/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>
