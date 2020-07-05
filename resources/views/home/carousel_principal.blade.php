<section class="section section-top section-full">
    <!-- Slider -->
    <div class="bg-slider">
        <div class="slider slider-no-controls slider-no-draggable slider-fade" id="hero-slider-bg">
            @foreach($images as $image)
                <div class="slider-item">
                    <div class="bg-cover" style="background-image: url({{asset('/img/banners/' . $image->imagen)}})"></div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Overlay -->
    <div class="bg-overlay"></div>

    <!-- Triangles -->
    <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
    <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-7 order-md-2">
                <!-- Slider -->
                <div id="hero-slider" class="slider slider-no-controls slider-no-draggable slider-fade mb-5 mb-md-0" data-bind="slider" data-target="#hero-slider-bg">
                @foreach($images as $image)
                <div class="slider-item">                        
                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4">
                        {{$image->titulo}}
                        </h1>
                        <!-- Subheading -->
                        <p class="lead text-white text-muted text-center mb-5">
                        {{$image->descripcion}}
                        </p>
                        <!-- Button -->
                        <!--p-- class="text-center mb-0">
                            <a href="$image->url" target="_blank" class="btn btn-outline-primary text-white">
                                Purchase now
                            </a>
                        </!--p-->
                    </div>
                @endforeach
                </div>
            </div>
            <!-- Controls -->
            <div class="col-6 col-md-2 order-md-1">
                <div class="text-left">
                    <a href="#hero-slider" class="slider-control" data-slide="previous">
                        <span class="icon-arrow-left icon-2x"></span>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-2 order-md-3">
                <div class="text-right">
                    <a href="#hero-slider" class="slider-control" data-slide="next">
                        <span class="icon-arrow-right icon-2x"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>