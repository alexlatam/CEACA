@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
.imagen_servicios_principal{
    width: 100%;
    height: 100vh;
}
</style>
@endsection
@section('content')
@include('common.navbar')

<img src="{{asset('img/banner_servicios.jpg')}}" alt="" class="imagen_servicios_principal">



<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Categorias
                </h6>
                <nav class="sidenav d-flex flex-column mb-5 mb-md-0">
                    @foreach ($cat_servicios as $categoria)
                    <a class="text-uppercase text-xs mb-2" href="#!">
                        {{ $categoria->name }}
                    </a>
                    @endforeach
                </nav>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($capacitaciones as $capacitacion)
                <a class="row align-items-center text-nounderline" href="#">
                    <div class="col-12 col-md-3">
                        <img src="{{asset(''. $capacitacion->imagen )}}" alt="{{ $capacitacion->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $capacitacion->titulo }}
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            @php {{ $descripcion = substr($capacitacion->descripcion,0,350); }} @endphp
                            {{ $descripcion.'...' }}
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('home.download_magazine_simple')
@include('home.modal_revista')
<!-- Publicidad -->
<section class="section pb-0 mt-5 pt-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/publicidad_servicios.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section>

@include('home.servicios_cat')



@endsection