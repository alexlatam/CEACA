@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
.imagen_servicios_principal{
    width: 100%;
    height: 100vh;
    margin-top: 5%;
}
#navbarPage{
    background-color: #fff!important;
}
</style>
@endsection
@section('content')
@include('common.navbar')

<section class="mb-5">
    <div class="container section pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 order-md-2" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                <img src="{{asset('img/banner_servicios.jpg')}}" alt="Servicios de auditoria y mantenimiento en Calderas" class="img-fluid img-incline-left mb-5 mb-md-0">
            </div>
            <div class="col-12 col-md-5 order-md-1">
                <h1 class="mb-4 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    Conoce Nuestros Servicios Técnicos 
                </h1>
                <!--p-- class="mb-5 text-muted">
                    “Calderas…Guía del Usuario (en la industria y comercio)” es una Revista técnico-comercial especializada en Calderas, en versión digital, con una frecuencia trimestral.
                    Además cuenta con distribución gratuita entre todos los Usuarios de Calderas a nivel de Latinoamérica.
                </!--p-->
                <a href="{{route('contacto')}}" class="btn btn-outline-primary px-3">
                    Contáctanos <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Servicos Técnicos
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($servicios as $servicio)
                <a class="row align-items-center text-nounderline" href="detalles_servicio/{{$servicio->id}}">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/'. $servicio->imagen )}}" alt="{{ $servicio->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $servicio->titulo }}
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                        @if(strlen($servicio->descripcion)>349)
                        @php {{ $descripcion = substr($servicio->descripcion,0,350).'...'; }} @endphp
                        @else
                        @php {{ $descripcion=$servicio->descripcion; }} @endphp
                        @endif
                        {{ $descripcion }}
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

@endsection