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

@include('home.publicidad_lateral')
<!-- FEATURED
    ================================================== -->
<section class="section">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-12 col-lg-4 mb-3 mb-lg-0">

        <a class="card h-100" href="blog-post.html">
          <div class="card-body">

            <!-- Meta -->
            <div class="row align-items-center no-gutters mb-4">
              <div class="col-auto">

                <div class="avatar mr-3">
                  <img src="assets/img/16.jpg" alt="..." class="img-cover rounded-circle">
                </div>

              </div>
              <div class="col">

                <p class="mb-0 text-xs text-muted">
                  by <strong class="text-body">John Doe</strong> 5 hours ago
                </p>

              </div>
            </div> <!-- / .row -->

            <!-- Heading -->
            <h4>
              Enhance your brand potential with giant advertising
            </h4>

            <!-- Text -->
            <p class="mb-0 text-sm text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>

          </div>
        </a>

      </div>
    </div>
  </div>
</section>

@endsection