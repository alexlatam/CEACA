@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
    .bg-revista {
        height: 100vh !important;
        width: 100%;
        background-position: center !important;
        /* Center the image */
        background-repeat: no-repeat !important;
        /* Do not repeat the image */
        object-fit: cover;
        background-size: cover !important;
    }

    .aux {
        height: 100vh;
        width: 100%;
    }

    .img_revista {
        min-height: 35vh !important;
        max-height: 35vh !important;
        width: auto;
    }

    @media only screen and (max-width: 600px) {
        .ver_en_linea {
            display: none;
        }
    }
</style>
@endsection
@section('content')
@include('common.navbar')
<section class="mb-5">
    <div class="container section pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 order-md-2" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                @if(isset($encabezado))
                    <img src="{{asset('img/encabezados/'. $encabezado->imagen)}}" alt="Servicios de auditoria y mantenimiento en Calderas" class="img-fluid img-incline-left mb-5 mb-md-0">
                @else
                    <img src="#" alt="Servicio de auditoria y mantenimiento en Calderas" class="img-fluid img-incline-left mb-5 mb-md-0">
                @endif
                
            </div>
            <div class="col-12 col-md-5 order-md-1">
                <h1 class="mb-4 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    @if(isset($encabezado))
                        {{$encabezado->descripcion}}
                    @endif
                </h1>
                <p class="mb-5 text-muted">
                    “Calderas…Guía del Usuario (en la industria y comercio)” es una Revista técnico-comercial especializada en Calderas, en versión digital, con una frecuencia trimestral.
                    Además cuenta con distribución gratuita entre todos los Usuarios de Calderas a nivel de Latinoamérica.
                </p>
                <!--a-- href="{{route('contacto')}}" class="btn btn-outline-primary">
                    Contáctanos <i class="fas fa-arrow-right ml-2"></i>
                </!--a-->
            </div>
        </div>
    </div>
</section>

<section class="my-5 py-2 container-fluid">
    <div class="row justify-content-center">
        <img src="{{asset('img/publicidad_revista.jpg')}}" style="max-height:70vh;width:100%;">
    </div>
</section>


<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($revistas as $revista)
                <div class="row align-items-center text-nounderline">
                    <div class="col-auto">
                        <img src="{{asset('revista/portada/'. $revista->portada )}}" alt="{{ $revista->titulo }}" class="img-fluid mb-3 mb-md-0 img_revista">
                    </div>
                    <div class="col-auto">
                        <h4>{{ $revista->titulo }}</h4>
                        <a href="/ver_revista/{{$revista->id}}" class="btn btn-sm btn-outline-success mt-2 ver_en_linea">Ver en linea</a>
                        <a href="#" class="btn btn-sm btn-success px-5 mt-2" data-toggle="modal" data-target=".modalRevista">Descargar</a>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
            <div class="col-12 col-md-3 col-lg-2 order-md-2 border-left">
                <h6 class="title">
                    Nuestras ediciones
                </h6>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="container my-5">
    <span class="d-md-none">* Puedes ver la revista desde tu computadora.</span>
    <br>
    <span class="d-md-none">* Para ver desde su móvil debe descargar la revista.</span>
</section>

<!-- publicidad -->
@include('home.publicidad_lateral')
<script type='text/javascript'>
    document.oncontextmenu = function() {
        return false
    }
    var iframe = document.getElementById("revista").children.oncontextmenu = function() {
        return false
    };
</script>

@include('home.modal_revista')

@endsection