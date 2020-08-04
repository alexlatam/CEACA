@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>

    #navbarPage {
        background-color: #fff !important;
    }
    .img_principal_section{
        width: 100%!important;
        height: auto;
    }
</style>
@endsection
@section('content')
@include('common.navbar')
<section class="mb-5">
    <div class="container section pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-8 order-md-2" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                @if(isset($encabezado))
                <img src="{{asset('img/encabezados/'. $encabezado->imagen)}}" alt="{{$encabezado->titulo}}" class="img-fluid img-incline-left mb-5 mb-md-0 img_principal_section">
                @endif
            </div>
            <div class="col-12 col-md-4 order-md-1">
                <h1 class="mb-4 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    @if(isset($encabezado))
                    {{$encabezado->titulo}}
                    @endif
                </h1>
                <p class="class=" mb-5"">
                    @if(isset($encabezado))
                    @php {{ echo nl2br($encabezado->descripcion); }} @endphp
                    @endif
                </p>
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
                            @if(strlen($servicio->descripcion)>249)
                            @php {{ $descripcion = substr($servicio->descripcion,0,250).'...'; }} @endphp
                            @else
                            @php {{ $descripcion=$servicio->descripcion; }} @endphp
                            @endif
                            @php {{ echo ($descripcion); }} @endphp
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
<!-- <section class="section pb-0 mt-5 pt-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('img/publicidad_servicios.jpg')}}" alt="" width="100%">
      </div>
    </div>
  </div>
</section> -->
@include('home.publicidad_lateral')

@endsection