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
      </div>
    </div>
    <div class="row justify-content-center mt-5 pt-4">
      <div class="col-12 col-lg-10 col-xl-8">
        <p>
          @php {{ echo ($servicio->descripcion); }} @endphp
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Video -->
@include('home.videos_publicitarios');

@include('home.publicidad_lateral')

@include('home.section_magazine')


@endsection