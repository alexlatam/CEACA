@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
{{-- carousel --}}
@include('home.carousel_principal')
<section class="section" id="pages">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h2 class="text-center mb-4">
          CALDERAS
        </h2>
        <p class="text-muted text-center mb-5">
          REVISTA TÉCNICO-COMERCIAL ESPECIALIZADA EN CALDERAS. EN VERSIÓN DIGITAL
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="app.html" class="card border-0 mb-3 mb-md-0">
          <div class="card-img-top">
            <img src="{{asset('img/img_button1.jpg')}}" alt="App landing" class="img-fluid">
          </div>
          <div class="card-body">
            <h4 class="card-title">
              CLUB CEACA
            </h4>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="app.html" class="card border-0 mb-3 mb-md-0">
          <div class="card-img-top">
            <img src="{{asset('img/img_button2.jpg')}}" alt="App landing" class="img-fluid">
          </div>
          <div class="card-body">
            <h4 class="card-title">
              SERCVICIOS
            </h4>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="app.html" class="card border-0 mb-3 mb-md-0">
          <div class="card-img-top">
            <img src="{{asset('img/img_button3.jpg')}}" alt="App landing" class="img-fluid">
          </div>
          <div class="card-body">
            <h4 class="card-title">
              SUSCRÍBETE
            </h4>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="section bg-light">

  <div class="line line-top"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h2 class="text-center mb-4">
          23 AÑOS SIRVIENDO CON CALIDAD,
        </h2>
        <p class="text-muted text-center mb-5">
          EN TEMAS DECONSULTORÍA Y CAPACITACIÓN EN TODA LATINOAMÉRICA
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_1.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4">
          QUIENES SOMOS
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_2.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4">
          NUESTROS SERVICIOS
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_3.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4">
          CLUB CEACA
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_4.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4">
          CONTÁCTANOS
        </h4>
      </div>
    </div>
  </div>

</section>


@endsection