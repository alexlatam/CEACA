@extends('layouts.main')

@section('head')
<title>Ceaca - Contacto</title>
<style>
.enlace_contact:hover{
  text-decoration: none;
}
</style>
@endsection
@section('content')
@include('common.navbar')


<!-- BREADCRUMB
    ================================================== -->
<nav class="breadcrumb">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h5 class="breadcrumb-heading">
          Club Ceaca
        </h5>
      </div>
      <div class="col-auto">
        <span class="breadcrumb-item">
          <a href="{{route('home')}}">Inicio</a>
        </span>
        <span class="breadcrumb-item">
        <a href="{{route('club')}}">Club Ceaca</a>
        </span>
        <span class="breadcrumb-item active">
        <a href="{{route('club')}}">Miembros de Club</a>
        </span>
      </div>
    </div>
  </div>
</nav>

<!-- FORM
    ================================================== -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h6 class="title">
          Descargables
        </h6>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4">
          Ahora pertences al <span class="text-primary">Club Ceaca</span>
        </h3>
      </div>
    </div>
  </div>
</section>

<!-- OFFICES
    ================================================== -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h6 class="title">
          Datos de Contacto
        </h6>
      </div>
      <div class="col-md-10">
        <h3 class="mb-4">
          Puedes escribirnos <span class="text-primary">directamente</span>
        </h3>
      </div>
    </div>
  </div>
</section>

<section class="section pb-0 my-5 py-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/1.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section>

@endsection