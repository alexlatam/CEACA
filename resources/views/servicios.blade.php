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

<img src="{{asset('img/banner_servicios.jpg')}}" alt="" class="imagen_servicios_principal">

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
<section class="section pb-0 my-5 py-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/publicidad_servicios.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section>

@endsection