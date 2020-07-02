@extends('layouts.main')

@section('head')
<title>Ceaca</title>
@endsection
@section('content')

<section class="fp-section" style="height:100vh;">
    <div class="section section-top">
        <div class="bg-cover" style="background-image: url({{asset('img/header_nosotros.jpg')}});"></div>

        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-7">
                    <p class="font-weight-medium text-center text-xs text-uppercase text-primary" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                         <br>
                        Ceaca - Combustion, Energia & Ambiente
                    </p>
                    <h1 class="text-white text-center mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                        
                        23 Años formando y capacitando talento humano
                    </h1>
                    <p class="mb-6 text-center text-white" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                        Alta interactividad en diversas areas de la ingenieria
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="fp-section border-bottom">
    <div class="section section-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="img-effect img-effect-solid mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('img/nosotros/nosotros2.jpg')}}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1">
                    <h2>
                        Quienes Somos
                    </h2>
                    <h2 class="mb-4 text-muted">
                        Ingeniería con diseño basado en códigos y normas.
                    </h2>
                    <p class="text-muted">
                        Somos una empresa con más de 20 años de experiencia, principalmente enfocada en el área de formación y desarrollo de talento humano, sobre todo a distancia con alta interactividad, en diversas áreas de la ingeniería relacionadas con diseño basado en códigos y normas, operación, mantenimiento, inspección, análisis de fallas y fiabilidad. Contando con Programas de Capacitación diseñados por la misma Combustión, Energía & Ambiente o por las empresas e instituciones representadas y aliadas, basado en las necesidades del mercado o de cada cliente, y programas desarrollados por la Sociedad Americana de Ingenieros Mecánicos (ASME), siendo Proveedor Autorizado de sus cursos (presenciales y a distancia) y programas de especialización.
                        <br> <br>
                        Combustión, Energía & Ambiente ha decidido ser principalmente una organización de servicios a distancia (Online) y en ese sentido estamos permanentemente presentándoles propuesta de actividades de capacitación, interacción gremial – profesional y consultorías virtuales.
                    </p>
                </div>
            </div>
        </div>
        <div class="container mt-5 pt-3">
            <div class="row align-items-center mt-3">
                <div class="col-md-6 col-lg-4 offset-lg-1">
                    <h2>
                        Misión
                    </h2>
                    <h2 class="mb-4 text-muted">
                        Diseñar soluciones innovadoras e integrales de capacitación y profesionalización continuos.
                    </h2>
                    <p class="text-muted">
                        Tenemos como misión ofrecer – diseñar soluciones innovadoras e integrales de capacitación y profesionalización continuos – principalmente a distancia, servicios técnicos e ingeniería en las diferentes áreas de la Mecánica y Mantenimiento de Instalaciones Industriales (potencia, petrolera, petroquímica, manufacturera y comercial): sobre todo con relación a todas las áreas y actividades que implican la Generación y Manejo de Vapor y Prevención de la Corrosión, buscando cubrir y solventar las necesidades existentes en la industria, con ingenieros y técnicos altamente capacitados y comprometidos con su organización y la de nuestros clientes, y basados en los códigos, estándares y regulaciones nacionales que correspondan, buscando satisfacer la mejor relación precio valor.
                    </p>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="img-effect img-effect-solid mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('img/nosotros/nosotros3.jpg')}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 pt-3">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <div class="img-effect img-effect-solid mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('img/nosotros/nosotros.jpg')}}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 offset-lg-1">
                    <h2>
                        Visión
                    </h2>
                    <h2 class="mb-4 text-muted">
                        Organización Líder en el Mercado Industrial y Comercial.
                    </h2>
                    <p class="text-muted">
                        Ser en los próximos cinco (5) años una Organización Líder en el Mercado Industrial y Comercial, que genera alto valor agregado a nuestros clientes, como Centro de Capacitación a distancia para la Calificación de Profesionales y Técnicos, y en el desarrollo de soluciones en Servicios Técnicos, Ingeniería, para la Industria en áreas relacionadas con: mantenimiento, inspección, operación e ingeniería de planta del área de Generación de Vapor y Protección contra la Corrosión. Desarrollando Alianzas con organizaciones y empresas reconocidas a nivel internacionalmente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.servicios_cat')
@include('home.publicidad_lateral')

@endsection