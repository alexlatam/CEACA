@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
    .imagen_servicios_principal {
        width: 100%;
        height: 100vh;
    }
</style>
@endsection
@section('content')
@include('common.navbar')

<section class="mb-5">
    <div class="container section pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-7" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                <img src="{{asset('img/banner_revista.jpg')}}" alt="Servicios de auditoria y mantenimiento en Calderas" class="img-fluid img-incline-left mb-5 mb-md-0">
            </div>
            <div class="col-12 col-md-5">
                <h1 class="mb-4 font-weight-bold" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    CURSOS Y TALLERES CEACA
                </h1>
                <p class="mb-5 text-muted">
                    Ha sido el área de especialidad de Combustión, Energía & Ambiente, S.A. y de Carlos Lasarte, la auditoría, evaluación de la confiabilidad y seguridad de las Calderas, los sistemas de Generación y Distribución de Vapor, con particular énfasis en las Calderas, sus Equipos Auxiliares y sus Procesos, por esta razón contamos con un equipo de especialistas - instructores que podrían darle forma a un programa de especialización en cuidados, operación, inspección, análisis de fallas y mantenimiento de calderas, algunos ejemplos de los cursos que se ofrecen se presentan a continuación.
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
                    Categorias
                </h6>
                <nav class="sidenav d-flex flex-column mb-5 mb-md-0">
                    @foreach ($cat_servicios as $categoria)
                    <a class="text-uppercase text-xs mb-2" href="/capacitacion?categoria={{$categoria->id}}">
                        {{ $categoria->name }}
                    </a>
                    @endforeach
                </nav>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach ($capacitaciones as $capacitacion)
                <a class="row align-items-center text-nounderline" href="detalles_capacitacion/{{$capacitacion->id}}">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('/capacitaciones/'. $capacitacion->imagen )}}" alt="{{ $capacitacion->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $capacitacion->titulo }}
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            @php {{ $descripcion = substr($capacitacion->descripcion,0,350); }} @endphp
                            {{ $descripcion.'...' }}
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

@include('home.servicios_cat')



@endsection