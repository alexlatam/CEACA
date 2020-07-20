@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
@include('common.navbar')
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
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <img src="{{asset('img/services/' . $servicio->imagen )}}" alt="..." class="img-fluid mb-3">
        <p class="text-center text-sm text-muted mb-5">
          {{ $servicio->titulo }} - Ceaca
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <p>
          {{ $servicio->descripcion }}
        </p>
      </div>
    </div>
  </div>
</section>

<!--section-- class="mb-4">
    <div class="container section pb-0">
        <div class="row align-items-stretch">
        @php {{$x=0;}} @endphp
            @foreach ($servicios as $servicio)
            @if($x>2)
            @break
            @endif
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <a class="card h-100" href="/detalles_servicio/{{$servicio->id}}">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters mb-4">
                            <div class="col-auto">
                                <div class="avatar mr-3">
                                    <img src="{{asset('img/services/' . $servicio->imagen )}}" alt="..." class="img-cover rounded-circle">
                                </div>
                            </div>
                        </div>
                        <h4>
                            {{ $servicio->titulo }}
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                        @php {{ $descripcion = substr($servicio->descripcion,0,100).'...'; }} @endphp
                            {{ $descripcion }}
                        </p>
                    </div>
                </a>
            </div>
            @php {{++$x;}} @endphp
            
            @endforeach
        </div>
    </div>
</!--section-->

@include('home.publicidad_lateral')

@include('home.section_magazine')

@include('home.servicios_cat')

@endsection