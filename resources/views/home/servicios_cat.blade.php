<!-- Servicios -->
<section class="section bg-light">
    <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
    <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h2 class="text-dark text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                    Nuestros Servicios
                </h2>
                <p class="text-white text-muted text-center mb-5">

                </p>
            </div>
        </div>
        <div class="row justify-content-around">
            @foreach($servicios as $servicio)
                <div class="col-md-3">
                    <div class="text-center mb-5 mb-md-0">
                        <div class="text-primary mb-4">
                            <a href="">
                                <img src="{{asset('categorias_imagen/'.$categoria->logo)}}" alt="" width="25%">
                            </a>
                        </div>
                        <h4 class="text-dark mb-3">
                            {{$categoria->titulo}}
                        </h4>
                        <p class="text-dark text-muted mb-0">
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>