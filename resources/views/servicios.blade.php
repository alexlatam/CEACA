@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')
<section>
    <div class="container section section-top pb-0">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2">
                <img src="{{asset('img/services/principal.jpg')}}" alt="..." class="img-fluid img-incline-left mb-5 mb-md-0">
            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1">
                <div class="row align-items-center no-gutters mb-4">
                    <!--div-- class="col-auto">
                        <div class="avatar mr-3">
                            <img src="assets/img/17.jpg" alt="..." class="img-cover rounded-circle">
                        </div>
                    </!--div-->
                    <div class="col">
                        <!--p-- class="mb-0 text-xs text-muted">
                            by <strong class="text-body">Judy Doe</strong> 2 hours ago
                        </!--p-->
                    </div>
                </div>
                <h1 class="mb-4 font-weight-bold">
                    Conoce Nuestros Servicios
                </h1>
                <p class="mb-5 text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus odio nesciunt harum neque deserunt deleniti nemo, explicabo id accusamus voluptatum dolor.
                </p>
                <a href="{{route('contacto')}}" class="btn btn-outline-primary">
                    Contáctanos <i class="fas fa-arrow-right ml-2"></i>
                </a>

            </div>
        </div>
    </div>
</section>

<!-- FEATURED
    ================================================== -->
<section>
    <div class="container section pb-0">
        <div class="row align-items-stretch">
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <a class="card h-100" href="blog-post.html">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters mb-4">
                            <div class="col-auto">
                                <div class="avatar mr-3">
                                    <img src="{{asset('img/services/servicio3.jpg')}}" alt="..." class="img-cover rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <!--p-- class="mb-0 text-xs text-muted">
                                    by <strong class="text-body">John Doe</strong> 5 hours ago
                                </!--p-->
                            </div>
                        </div>
                        <h4>
                            Acompañamiento en el Mejoramiento
                            Continuo de la Confiabilidad
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <a class="card h-100" href="blog-post.html">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters mb-4">
                            <div class="col-auto">
                                <div class="avatar mr-3">
                                    <img src="{{asset('img/services/servicio4.jpg')}}" alt="..." class="img-cover rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <!--p-- class="mb-0 text-xs text-muted">
                                    by <strong class="text-body">John Doe</strong> 5 hours ago
                                </!--p-->
                            </div>
                        </div>
                        <h4>
                            Definición de planes de inspección
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <a class="card h-100" href="blog-post.html">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters mb-4">
                            <div class="col-auto">
                                <div class="avatar mr-3">
                                    <img src="{{asset('img/services/servicio1.jpg')}}" alt="..." class="img-cover rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <!--p-- class="mb-0 text-xs text-muted">
                                    by <strong class="text-body">John Doe</strong> 5 hours ago
                                </!--p-->
                            </div>
                        </div>
                        <h4>
                            Acompañamiento en el Monitoreo
                            de los parámetros críticos de operación de calderas
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- LATEST
    ================================================== -->
<section>
    <div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Categorias
                </h6>
                <nav class="sidenav d-flex flex-column mb-5 mb-md-0">
                    <a class="text-uppercase text-xs mb-2" href="#!">
                        Asesorias
                    </a>
                    <a class="text-uppercase text-xs mb-2" href="#!">
                        Mantenimientos
                    </a>
                    <a class="text-uppercase text-xs mb-2" href="#!">
                        Gadgets
                    </a>
                    <a class="text-uppercase text-xs mb-2" href="#!">
                        Events
                    </a>
                    <a class="text-uppercase text-xs" href="#!">
                        Videos
                    </a>
                </nav>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio1.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            Acompañamiento en el Monitoreo
                            de los parámetros críticos de operación de calderas
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio2.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            Auditorías de Confiabilidad y Seguridad
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio3.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                            Acompañamiento en el Mejoramiento
                            Continuo de la Confiabilidad
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio4.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                        Definición de planes de inspección
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio5.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                        Ejecución o Acompañamiento en planes de inspección
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio6.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                        Análisis de causas raíz de fallas
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
                <a class="row align-items-center text-nounderline" href="blog-post.html">
                    <div class="col-12 col-md-3">
                        <img src="{{asset('img/services/servicio7.jpg')}}" alt="..." class="img-fluid mb-3 mb-md-0">
                    </div>
                    <div class="col-12 col-md-9">
                        <h4>
                        Apoyo en las decisiones sobre los hallazgos
                        </h4>
                        <p class="mb-0 text-sm text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </a>
                <hr class="my-4">
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


@include('home.publicidad_lateral')

@include('home.servicios_cat')



@endsection