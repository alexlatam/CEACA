@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
<section class="mb-5">
    <div class="container section section-top pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                <img src="{{asset('img/servicios.jpg')}}" alt="Servicios de auditoria y mantenimiento en Calderas" class="img-fluid img-incline-left mb-5 mb-md-0">
            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1">
                <h1 class="mb-4 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    Conoce Nuestra Revitas
                </h1>
                <p class="mb-5 text-muted">
                    
                </p>
                <a href="{{route('contacto')}}" class="btn btn-outline-primary">
                    Contáctanos <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


@include('home.download_magazine_simple')
@include('home.modal_revista')

<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Nuestras ediciones
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($revistas as $revista)
                <div class="row align-items-center text-nounderline">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('revista/portada/'. $revista->portada )}}" alt="{{ $revista->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $revista->titulo }}
                        </h4>
                        <a href="{{asset('revista/'. $revista->archivo)}}" target="_blank" class="btn btn-sm btn-outline-success">Ver en linea</a>
                        <a href="#" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target=".modalRevista">Descargar</a>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>
</section>


@include('home.publicidad_lateral')




@endsection