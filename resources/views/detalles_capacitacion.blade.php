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
          Capacitaciones
        </h5>
      </div>
      <div class="col-auto">
        <span class="breadcrumb-item">
          <a href="{{route('home')}}">Inicio</a>
        </span>
        <span class="breadcrumb-item">
          <a href="{{route('capacitacion')}}">Capacitaciones</a>
        </span>
        <span class="breadcrumb-item active">
          Detalles de Capacitación
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
      <div class="col-12 col-lg-10">
        <h1 class="mb-5 font-weight-bold text-center">
          {{ $capacitacion->titulo }}
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <img src="{{asset('/capacitaciones/' . $capacitacion->imagen )}}" alt="{{ $capacitacion->titulo }}" class="img-fluid mb-3">
        <p class="text-center text-sm text-muted mb-5">
          {{ $capacitacion->titulo }} - Ceaca
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <p>
          @php {{ echo nl2br($capacitacion->descripcion); }} @endphp
        </p>
      </div>
    </div>
  </div>
</section>


@include('home.publicidad_lateral')

@include('home.section_magazine')

@endsection