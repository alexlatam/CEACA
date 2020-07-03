@extends('layouts.main')

@section('head')
<title>Ceaca</title>
<style>
.imgMembresias{
    max-width: 100%;
}
</style>
@endsection
@section('content')
<!-- HERO
    ================================================== -->
<section class="section section-top">
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <p class="font-weight-medium text-center text-xs text-uppercase text-primary" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                    Suscríbete al Club
                </p>
                <h1 class="mb-4 text-center" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
                    Club CEACA Beneficios y Oportunidades
                </h1>
                <p class="mb-6 text-center text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
                    Obtén todos los beneficios de pertenecer a nuestra familia.
                </p>
            </div>
        </div>
        <div class="row form-row align-items-center">
            <div class="col-3">
                <div class="img-square">
                    <img src="{{asset('img/club_ceaca/01.jpg')}}" alt="..." class="img-cover" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                </div>
            </div>
            <div class="col-6">
                <div class="row form-row align-items-end mb-2">
                    <div class="col-7">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/02.jpg')}}" alt="..." class="img-cover" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/03.jpg')}}" alt="..." class="img-cover">
                        </div>
                    </div>
                </div>
                <div class="row form-row">
                    <div class="col-5">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/04.jpg')}}" alt="..." class="img-cover">
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="img-square">
                            <img src="{{asset('img/club_ceaca/05.jpg')}}" alt="..." class="img-cover">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="img-square">
                    <img src="{{asset('img/club_ceaca/06.jpg')}}" alt="..." class="img-cover">
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.capacidades')

<!-- INFO
    ================================================== -->
<section class="bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 section pb-0 py-md-0">
                <div class="img-half img-half-left">
                    <img src="{{asset('img/membresias/01.jpg')}}" alt="..." class="img-cover">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5 offset-xl-1 section">
                <h3 class="mb-2">
                    Membresía <span class="text-primary">Gratis</span>
                </h3>
                <p>
                    <p>
                        <strong>Recepción de la revista </strong> – avisar que con la suscripción para bajar la revista queda registrado y por eso la importancia de registrarse para recibirlas <br><br>
                        <strong> Participación en Webinars técnicos </strong><br><br>
                        <strong> Acceso a ver los videos cortos </strong>– en un espacio privado de CEACA ¿en la web o YouTube? Puede ser que se bajen los que no correspondan a cursos – se harían unos introductorios y sencillos, promocionales para los cursos… <br> <br>
                        <strong> Acceso a ver preguntas frecuentes </strong>– en un espacio privado de CEACA en la web. Puede ser que se bajen los que no correspondan a cursos.
                    </p>
                </p>
                <a href="#testimonials" class="btn btn-outline-primary">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>
</section>
<section class="bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2">
                <div class="img-half">
                    <img src="{{asset('img/membresias/41.jpg')}}" alt="..." class="img-cover">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1 section">
                <h3 class="mb-4">
                    Membresía <span class="text-primary">Económica</span>
                </h3>
                <p>
                    Los mismos que en el nivel de membresía anterior, más <br> <br>
                    <strong>Descuento en los próximos cursos (10%)</strong> <br><br>
                    <strong>Participación en Foros de Discusión</strong> – en espacio privado dentro de la web… ¿Se puede?<br> <br>
                    Posibilidad de hacer hasta dos (02) consultas técnicas trimestrales sobre asuntos de sus calderas, relacionadas con el tema al que se refirió el curso en el que participó (máximo dos consultas al mes – No son acumulativas y las repreguntas pueden consumir la disponibilidad de consultas) <br><br>
                    Habrá consultas que debido a su nivel de complicación o requerimiento de involucramiento por parte de CEACA, se podrán considerar Servicios Técnicos específicos y no aplicarán a este beneficio de la membresía al Club CEACA.

                </p>
                <a href="#testimonials" class="btn btn-outline-primary">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>

</section>
<section class="bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 section pb-0 py-md-0">
                <div class="img-half img-half-left">
                    <img src="{{asset('img/membresias/03.jpg')}}" alt="..." class="img-cover">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5 offset-xl-1 section">
                <h3 class="mb-4">
                    Membresía <span class="text-primary">Media</span>
                </h3>
                <p>
                    Los mismos que en el nivel de membresía anterior <br><br>
                    <strong>Descuento en los próximos cursos (20%)</strong> <br><br>
                    Posibilidad de hacer hasta dos (02) consultas técnicas trimestrales sobre asuntos de sus calderas, relacionadas con los temas a los que se refirieron los cursos en los que participó (lo que hace un máximo de seis (06) consultas – No son acumulativas y las repreguntas pueden consumir la disponibilidad de consultas). <br><br>
                    Habrá consultas que debido a su nivel de complicación o requerimiento de involucramiento por parte de CEACA, se podrán considerar Servicios Técnicos específicos y no aplicarán a este beneficio de la membresía al Club CEACA.
                </p>
                <a href="#testimonials" class="btn btn-outline-primary">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>
</section>
<section class="bg-light overflow-hidden">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-6 offset-xl-1 order-md-2">
                <div class="img-half">
                    <img src="{{asset('img/membresias/01.jpg')}}" alt="..." class="img-cover">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-5 order-md-1 section">
                <h3 class="mb-4">
                    Membresía <span class="text-primary">Premium</span>
                </h3>
                <p>
                     Los mismos que en el nivel de membresía anterior <br><br>
                     Descuento en los próximos cursos (20%) y podrá seleccionar uno de los Mini-Cursos disponibles sin costo al año. <br><br>
                     Posibilidad de hacer hasta tres (03) consultas técnicas trimestrales sobre asuntos de sus calderas, relacionadas con los temas a los que se refirieron los cursos en los que participó (lo que hace un máximo de doce (12) consultas – No son acumulativas y las repreguntas pueden consumir la disponibilidad de consultas). <br><br>
                    Habrá consultas que debido a su nivel de complicación o requerimiento de involucramiento por parte de CEACA, se podrán considerar Servicios Técnicos específicos y no aplicarán a este beneficio de la membresía al Club CEACA. <br><br>
                     Participar en el servicio de Bolsa de Trabajo, en caso de que esté buscando nuevas oportunidades laborales. Su resumen curricular será clasificado y ofertado a las empresas que tengan vacantes dentro de su área de acción – trimestralmente lo mantendremos informado de la movilización de su resumen curricular.
                </p>
                <a href="#testimonials" class="btn btn-outline-primary">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS
    ================================================== -->
<section class="section" id="testimonials">

    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <!-- Heading -->
                <h2 class="mb-4 text-center">
                    Client testimonials
                </h2>

                <!-- Subheading -->
                <p class="text-center text-muted mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora sequi vitae provident optio pariatur.
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Slider -->
                <div class="testimonial-slider">

                    <!-- Item -->
                    <div class="testimonial-slider-item">
                        <div class="testimonial-slider-item-inner">

                            <!-- Quote -->
                            <div class="quote quote-sm">
                                <blockquote class="quote-blockquote">
                                    <p class="quote-blockquote-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores! Itaque nihil quae, omnis, minus nisi iste iure.
                                    </p>
                                    <footer class="quote-blockquote-footer">
                                        <div class="avatar avatar-lg mr-3">
                                            <img src="assets/img/16.jpg" alt="..." class="img-cover rounded-circle">
                                        </div>
                                        <span>
                                            John Doe, <span class="text-zigzag">Chicago</span>
                                        </span>
                                    </footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>

                    <!-- Item -->
                    <div class="testimonial-slider-item">
                        <div class="testimonial-slider-item-inner">

                            <!-- Quote -->
                            <div class="quote quote-sm">
                                <blockquote class="quote-blockquote">
                                    <p class="quote-blockquote-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores! Itaque nihil quae, omnis, minus nisi iste iure.
                                    </p>
                                    <footer class="quote-blockquote-footer">
                                        <div class="avatar avatar-lg mr-3">
                                            <img src="assets/img/18.jpg" alt="..." class="img-cover rounded-circle">
                                        </div>
                                        <span>
                                            Anna Doe, <span class="text-zigzag">San Francisco</span>
                                        </span>
                                    </footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>

                    <!-- Item -->
                    <div class="testimonial-slider-item">
                        <div class="testimonial-slider-item-inner">

                            <!-- Quote -->
                            <div class="quote quote-sm">
                                <blockquote class="quote-blockquote">
                                    <p class="quote-blockquote-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores! Itaque nihil quae, omnis, minus nisi iste iure.
                                    </p>
                                    <footer class="quote-blockquote-footer">
                                        <div class="avatar avatar-lg mr-3">
                                            <img src="assets/img/17.jpg" alt="..." class="img-cover rounded-circle">
                                        </div>
                                        <span>
                                            Jane Roe, <span class="text-zigzag">Los Angeles</span>
                                        </span>
                                    </footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>

                </div> <!-- / .testimonials-slider -->

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</section>
@include('home.publicidad_lateral')

@include('home.servicios_cat')

@endsection