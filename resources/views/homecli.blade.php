@extends('layouts.homecli')
@section('usercontent')
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

    <!-- Navbar brand -->
    <span class="navbar-brand">BPB</span>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navproductos"
      aria-controls="navproductos" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navproductos">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/home">Productos
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ver categorias</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ejemplo
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </nav>
  <!--/.Navbar-->
  <section class="text-center mb-4">
    <!--Grid row-->
    <div class="row wow fadeIn">
      <!--Grid column-->
      @foreach ($products as $p)
      <div class="col-lg-3 col-md-6 mb-4">
        <!--Card-->
        <div class="card">
          <!--Card image-->
          <div class="view overlay">
            <img src="{{asset('img/product/'.$p->image_product)}}" class="card-img-top"
              alt="{{$p->image_product}}">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body text-center">
            <!--Category & Title-->
            <a href="" class="grey-text">
              <h5>{{$p->name_product}}</h5>
            </a>
            <h5>
              <strong>
                <a href="" class="dark-grey-text">
                  <span class="badge badge-pill danger-color">Tags</span>
                </a>
              </strong>
            </h5>

            <h4 class="font-weight-bold blue-text">
              <strong>@foreach ($precio as $pre)
                @if ($pre->id==$p->id)
                  {{$pre->price_package}} Bs./paquete
                  {{--  --}}
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#producto{{$p->id}}">
  Comprar
</button>

<!-- Modal -->
<div class="modal fade" id="producto{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="producto{{$p->id}}Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Seleccione las opciones siguientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{route('addcar')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="cantidad">Cantidad de paquetes: {{$p->name_product}}</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="1">
            <input type="hidden" id="nombre_producto" name="nombre_producto" value="{{$p->name_product}}">
            <input type="hidden" id="precio_paquete" name="precio_paquete" value="{{$pre->price_package}}">
            <input type="hidden" id="codigo_producto" name="codigo_producto" value="{{$p->id}}">
          </div>
          <button type="submit" class="btn btn-block btn-sm btn-warning" name="button">Agregar a carrito</button>
        </form>
      </div>
    </div>
  </div>
</div>
                  {{--  --}}
                @endif
              @endforeach</strong>
            </h4>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->
      </div>
      @endforeach
      <!--Grid column-->
    </div>
    <!--Grid row-->

    <!--Grid row-->
    <!--Grid row-->
    <center>
    {!! $products->render() !!}
    </center>
  </section>
  <!--Section: Products v.3-->
@endsection
