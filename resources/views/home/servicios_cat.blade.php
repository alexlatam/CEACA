<style>
.enlace_servicio{
    color: #222;
    text-decoration: none;
}
.enlace_servicio:hover{
    color:#4e8b3d;
    text-decoration: none;
}
</style>
<!-- Servicios -->
<section class="section bg-light">
    <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
    <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
    <!-- Content -->
    <div class="container">
        @if(isset($servicios))
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
                    <div class="text-primary mb-2">
                        <a href="/detalles_servicio/{{$servicio->id}}">
                            <img src="{{asset('/img/services/logos/'.$servicio->logo)}}" alt="{{$servicio->titulo}}" width="70%">
                        </a>
                    </div>
                    <h4 class="text-dark mb-3">
                        <a class="enlace_servicio" href="/detalles_servicio/{{$servicio->id}}">
                            {{$servicio->titulo}}
                        </a>
                    </h4>
                    <p class="text-dark text-muted mb-0">
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</section>