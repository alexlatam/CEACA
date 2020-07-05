@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
<!-- BREADCRUMBS
    ================================================== -->
<br>
<nav class="breadcrumb">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h5 class="breadcrumb-heading">
          Servicios
        </h5>
      </div>
      <div class="col-auto">
        <span class="breadcrumb-item">
          <a href="{{route('home')}}">Inicio</a>
        </span>
        <span class="breadcrumb-item">
          <a href="{{route('servicios')}}">Servicios</a>
        </span>
        <span class="breadcrumb-item active">
          Detalles de Servicio
        </span>
      </div>
    </div>
  </div>
</nav>

<!-- SERVICIO
    ================================================== -->
<section class="section pb-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <h1 class="mb-5 font-weight-bold text-center">
          {{ $servicio->titulo }}
        </h1>
      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/services/' . $servicio->imagen )}}" alt="..." class="img-fluid mb-3">
        <p class="text-center text-sm text-muted mb-5">
          {{ $servicio->titulo }} - Ceaca
        </p>
      </div>
    </div> <!-- / .row -->
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <p>
          {{ $servicio->descripcion }}
        </p>
        <!-- Social -->
        <!--div-- class="row align-items-center py-3 my-5 border-top border-bottom">
          <div class="col">

            <p class="mb-0 text-xs text-uppercase">
              Share the post:
            </p>

          </div>
          <div class="col-auto">
            <a href="#!" class="text-lg text-nounderline mx-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-lg text-nounderline mx-2">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#!" class="text-lg text-nounderline mx-2">
              <i class="fab fa-instagram"></i>
            </a>

          </div>
        </!--div-->

      </div>
    </div>
  </div> <!-- / .container -->
</section>




<section>
  <div class="container section pb-5">
    <div class="row align-items-stretch">
      @for ($i = 0; $i < 3; $i++) <div class="col-12 col-lg-4 mb-3 mb-lg-0">
        <a class="card h-100" href="">
          <div class="card-body">
            <div class="row align-items-center no-gutters mb-4">
              <div class="col-auto">
                <div class="avatar mr-3">
                  <img src="{{asset('img/services/' . $servicios[$i]->imagen )}}" alt="..." class="img-cover rounded-circle">
                </div>
              </div>
            </div>
            <h4>
              {{ $servicios[$i]->titulo }}
            </h4>
            <p class="mb-0 text-sm text-muted">
              {{ $servicios[$i]->descripcion }}
            </p>
          </div>
        </a>
    </div>
    @endfor
  </div>
  </div>
</section>

@include('home.publicidad_lateral')

@include('home.section_magazine')

@include('home.servicios_cat')

@endsection