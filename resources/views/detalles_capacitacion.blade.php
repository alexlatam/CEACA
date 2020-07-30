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
<section class="section pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <img src="{{asset('/capacitaciones/' . $capacitacion->imagen )}}" alt="{{ $capacitacion->titulo }}" class="img-fluid mb-3">
      </div>
    </div>
    <div class="row justify-content-center my-5 pt-4">
      <div class="col-12 col-lg-10">
        <h1 class="mb-5 font-weight-bold text-center">
          {{ $capacitacion->titulo }}
        </h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <p style="font-size:1.2rem;">
          @php {{ echo ($capacitacion->descripcion); }} @endphp
        </p>
      </div>
    </div>
  </div>
</section>



@include('home.section_magazine')
@include('home.modal_revista')

@include('home.publicidad_lateral')

@endsection