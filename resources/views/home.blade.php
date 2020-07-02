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
        <h4 class="card-title mt-4 pt-2">
          <a href="">
              QUIENES SOMOS         
          </a>
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_2.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4 pt-2">
          <a href="">
            NUESTROS SERVICIOS
          </a>          
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_3.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4">
          <a href="">
            CLUB CEACA
          </a>          
        </h4>
      </div>
      <div class="col-md-6 col-lg-3 text-center">
        <a href="">
          <img src="{{asset('img/iconos/icono_4.png')}}" alt="Carousel header" class="img-fluid">
        </a>
        <h4 class="card-title mt-4">
          <a href="">
            CONTÁCTANOS
          </a>          
        </h4>
      </div>
    </div>
  </div>

</section>
<!-- publicidad -->
<section>
  <img src="{{asset('img/publicidad/publicidad.jpg')}}" alt="" width="100%">
</section>

<!-- Servicios -->
<section class="section bg-light">


  <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
  <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>

  <!-- Content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h2 class="text-dark text-center mb-4">
          Nuestros Servicios
        </h2>
        <p class="text-white text-muted text-center mb-5">

        </p>
      </div>
    </div>
    <div class="row justify-content-around">
      <div class="col-md-3">
        <div class="text-center mb-5 mb-md-0">
          <div class="text-primary mb-4">
            <a href="">
              <img src="{{asset('img/servicios/servicio1.png')}}" alt="" width="25%">
            </a>
          </div>
          <h4 class="text-dark mb-3">
            Acompañamiento en el monitoreo de parámetros críticos de operación de calderas
          </h4>
          <p class="text-dark text-muted mb-0">
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center mb-5 mb-md-0">
          <div class="text-primary mb-4">
            <a href="">
              <img src="{{asset('img/servicios/servicio2.png')}}" alt="" width="25%">
            </a>
          </div>
          <h4 class="text-dark mb-3">
            Auditorias de confiabilidad y seguridad
          </h4>
          <p class="text-dark text-muted mb-0">
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center mb-5 mb-md-0">
          <div class="text-primary mb-4">
            <a href="">
              <img src="{{asset('img/servicios/servicio3.png')}}" alt="" width="25%">
            </a>
          </div>
          <h4 class="text-dark mb-3">
            Acompañamiento en el mejoramiento continuo de la confiabilidad
          </h4>
          <p class="text-dark text-muted mb-0">
          </p>
        </div>
      </div>
    </div>
    <div class="row justify-content-around mt-4">
      <div class="col-md-3">
        <div class="text-center mb-5 mb-md-0">
          <div class="text-primary mb-4">
            <a href="">
              <img src="{{asset('img/servicios/servicio4.png')}}" alt="" width="25%">
            </a>
          </div>
          <h4 class="text-dark mb-3">
            Definición de planes de inspección
          </h4>
          <p class="text-dark text-muted mb-0">
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center mb-5 mb-md-0">
          <div class="text-primary mb-4">
            <a href="">
              <img src="{{asset('img/servicios/servicio5.png')}}" alt="" width="25%">
            </a>
          </div>
          <h4 class="text-dark mb-3">
            Ejecución o acompañamiento
          </h4>
          <p class="text-dark text-muted mb-0">
          </p>
        </div>
      </div>
    </div>
  </div>

</section>



@endsection