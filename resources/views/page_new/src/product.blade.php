<!doctype html>
<html lang="en">
  <head>
    @include("page_new.src.partials.head")
  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    @include("page_new.src.partials.modals")

    <!-- NAVBAR
    ================================================== -->
    @include("page_new.src.partials.navbar")

    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(assets/img/1.jpg);"></div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-5 align-self-end">

            <!-- Preheading -->
            <p class="font-weight-medium text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
              by Simpleqode
            </p>
            
            <!-- Heading -->
            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
              Men's watches crafted with attention to detail
            </h1>

            <!-- Subheading -->
            <p class="text-white text-muted mb-5 mb-md-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis provident et ab, ullam in quidem nostrum quo sunt beatae odio fugit.
            </p>

          </div>
          <div class="col-md-4 col-lg-7 align-self-center d-flex justify-content-end">
            
            <!-- Heading -->
            <h4 class="text-vertical text-white mb-0">
              <span>Incline store</span>
            </h4>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5 offset-lg-1">
            
            <!-- Image -->
            <div class="img-effect img-effect-solid mb-5 mb-md-0">
              <img src="assets/img/2.jpg" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1">

            <!-- Heading -->
            <h2 class="mb-4">
              Swiss-made engineering excellence
            </h2>

            <!-- Content -->
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores, aperiam. Excepturi assumenda non quasi ipsa quidem harum debitis aut alias dicta. Laudantium reprehenderit ea, suscipit nulla deleniti excepturi repudiandae!
            </p>

            <!-- Button -->
            <a href="#modal-video" data-toggle="modal" class="btn btn-outline-primary btn-circle mr-3">
              <i class="fas fa-play"></i>
            </a> Play video
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5 offset-lg-1 order-md-2">
            
            <!-- Image -->
            <div class="img-effect img-effect-border mb-5 mb-md-0">
              <img src="assets/img/3.jpg" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1 order-md-1">

            <!-- Heading -->
            <h2 class="mb-4">
              Stylish high-quality timepieces
            </h2>

            <!-- Content -->
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima tenetur, non ea, nobis minus distinctio eveniet libero fugiat, ullam deserunt dolores exercitationem quae eum? Alias quaerat rerum, quasi nulla odit?
            </p>

            <!-- Button -->
            <a href="contact.html" class="btn btn-outline-primary">
              Contact us
            </a>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- CTA
    ================================================== -->
    <section class="section bg-dark">

      <!-- Pattern -->
      <div class="bg-triangle bg-triangle-light bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8">
            
            <!-- Heading -->
            <h3 class="text-white mb-4">
              Delivery within one working day after despatch
            </h3>

            <!-- Content -->
            <p class="text-white text-muted mb-4 mb-md-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae dolores, voluptates atque dicta vero quibusdam laudantium saepe sequi harum.
            </p>

          </div>
          <div class="col-md-4">
            
            <!-- Button -->
            <a href="#!" class="btn btn-outline-primary text-white">
              Purchase now
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- MODELS
    ================================================== -->
    <section class="section">
      <div class="model">

        <!-- Content -->
        <div class="container">
          <div class="row align-items-center mb-5">
            <div class="col-12">
              
              <div class="slider slider-no-controls" id="productSliderLg" data-bind="slider" data-target="#productSliderSm">
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/4.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        Black leather strap watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/5.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        Black marble face watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/6.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        Brown leather strap watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/7.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        Black marble face watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/8.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        White face watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/9.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        Brown leather strap watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
                <div class="slider-item">
                  
                  <div class="row">
                    <div class="col-md-1 d-flex align-self-center d-flex justify-content-end">
                      
                      <!-- Category -->
                      <div class="model-cat mb-4 mb-md-0">
                        <h4 class="text-vertical">
                          <span class="model-cat-title text-zigzag fade show">
                            Collection title
                          </span>
                        </h4>
                      </div>

                    </div>
                    <div class="col-md-7">
                      
                      <!-- Image -->
                      <div class="model-img mb-5 mb-md-0">

                        <!-- Image -->
                        <img src="assets/img/10.jpg" class="model-img-src img-fluid fade show" alt="...">

                      </div> <!-- / .model-img -->

                    </div>
                    <div class="col-md-4">

                      <!-- Heading -->
                      <h3 class="model-heading mb-4 fade show">
                        White marble face watch
                      </h3>

                      <!-- Content -->
                      <div class="model-content mb-5 mb-md-0 fade show">

                        <!-- Blockquote -->
                        <blockquote class="blockquote">
                          <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque recusandae fuga quod eos at possimus ea dolor nulla aliquam nostrum.
                          </p>
                        </blockquote>

                        <!-- Content -->
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsam et consequuntur fugiat, numquam consequatur ducimus dolorem maxime ratione!
                        </p>

                        <!-- Button -->
                        <a href="#!" class="btn btn-outline-primary">
                          Purchase now
                        </a>

                      </div> <!-- / .model-content -->

                    </div>            
                  </div> <!-- / .row -->                  
                </div>
              </div> <!-- / .slider -->

            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->

        <!-- Slider -->
        <div class="slider slider-highlight" id="productSliderSm" data-bind="slider" data-target="#productSliderLg">
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/4.jpg" alt="..." class="img-fluid">

          </div>
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/5.jpg" alt="..." class="img-fluid">

          </div>
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/6.jpg" alt="..." class="img-fluid">

          </div>
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/7.jpg" alt="..." class="img-fluid">

          </div>
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/8.jpg" alt="..." class="img-fluid">

          </div>
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/9.jpg" alt="..." class="img-fluid">

          </div>
          <div class="slider-item col-6 col-md-2">
            
            <!-- Image -->
            <img src="assets/img/10.jpg" alt="..." class="img-fluid">

          </div>
        </div> <!-- / .slider -->
      
      </div> <!-- / .model -->
    </section>

    <!-- PROMO
    ================================================== -->
    <section class="section section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url(assets/img/11.jpg);"></div>
      
      <!-- Content -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 col-lg-8">
            
            <!-- Promo -->
            <div class="bg-white text-center shadow py-5 px-4 p-md-6">
              
              <!-- Icon -->
              <div class="mb-4">
                <span class="icon icon-diamond icon-2x"></span>
              </div>

              <!-- Heading -->
              <h2 class="mb-4">
                A long-term vision
              </h2>

              <!-- Content -->
              <p class="text-muted mb-5">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quas quidem asperiores consequatur aspernatur cum voluptas, atque!
              </p>

              <!-- Button -->
              <a href="#!" class="btn btn-outline-primary">
                Purchase now
              </a>

            </div>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- QUOTE
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9">
            
            <!-- Quote -->
            <div class="quote">
              <blockquote class="quote-blockquote">
                <p class="quote-blockquote-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam exercitationem nobis incidunt alias ipsa quis, rerum doloribus nostrum, recusandae. Laboriosam, quasi, dolores!
                </p>
                <footer class="quote-blockquote-footer">
                  <span class="text-zigzag">
                    Simpleqode team
                  </span>
                </footer>
              </blockquote>
            </div> <!-- / .quote -->
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- FEATURES
    ================================================== -->
    <section class="section bg-light">
      
      <!-- Pattern -->
      <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
          
            <!-- Heading -->
            <h2 class="mb-4">
              Excellence in every detail
            </h2>

            <!-- Subheading -->
            <p class="text-muted text-left mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo officiis odio repudiandae illum molestiae.
            </p>
          
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-4">

            <!-- Item -->
            <div class="mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-person icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="mb-3">
                Crafted by Swiss masters
              </h4>

              <!-- Content -->
              <p class="text-muted mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis. Laudantium modi eius, aliquam, quasi quisquam ullam harum aperiam.
              </p>

            </div>

          </div>
          <div class="col-md-4">

            <!-- Item -->
            <div class="mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-envelope icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="mb-3">
                One day delivery
              </h4>

              <!-- Content -->
              <p class="text-muted mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis. Laudantium modi eius, aliquam, quasi quisquam ullam harum aperiam.
              </p>

            </div>

          </div>
          <div class="col-md-4">

            <!-- Item -->
            <div>
              
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-layers icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="mb-3">
                High-quality materials
              </h4>

              <!-- Content -->
              <p class="text-muted mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis. Laudantium modi eius, aliquam, quasi quisquam ullam harum aperiam.
              </p>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- STEPS
    ================================================== -->
    <section class="section">

      <!-- Line -->
      <div class="line line-top"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            
            <!-- Heading -->
            <h2 class="text-center mb-4">
              How we do it
            </h2>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi asperiores beatae quae inventore, molestiae dolorum.
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card border-0 mb-3 mb-md-0">
              
              <!-- Body -->
              <div class="card-body py-0">
                
                <!-- Order -->
                <h2 class="card-order">
                  <span>0</span>1
                </h2>

              </div>

              <!-- Image -->
              <img src="assets/img/12.jpg" class="card-img-top" alt="...">

              <!-- Body -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">
                  Raw materials
                </h4>

                <!-- Text -->
                <p class="card-text text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis. Laudantium modi eius, aliquam, quasi quisquam ullam harum aperiam.
                </p>
                
              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card border-0 mb-3 mb-md-0">
              
              <!-- Body -->
              <div class="card-body py-0">
                
                <!-- Order -->
                <h2 class="card-order">
                  <span>0</span>2
                </h2>

              </div>

              <!-- Image -->
              <img src="assets/img/13.jpg" class="card-img-top" alt="...">

              <!-- Body -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">
                  Manufacturing process
                </h4>

                <!-- Text -->
                <p class="card-text text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis. Laudantium modi eius, aliquam, quasi quisquam ullam harum aperiam.
                </p>
                
              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card border-0">
              
              <!-- Body -->
              <div class="card-body py-0">
                
                <!-- Order -->
                <h2 class="card-order">
                  <span>0</span>3
                </h2>

              </div>

              <!-- Image -->
              <img src="assets/img/14.jpg" class="card-img-top" alt="...">

              <!-- Body -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">
                  Quality control
                </h4>

                <!-- Text -->
                <p class="card-text text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis. Laudantium modi eius, aliquam, quasi quisquam ullam harum aperiam.
                </p>
                
              </div>

            </div> <!-- / .card -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- NEWSLETTER
    ================================================== -->
    <section class="section bg-dark">

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-top bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col">
            
            <!-- Heading -->
            <h3 class="text-center text-white mb-5">
              MailChimp newsletter sign-up
            </h3>

            <!-- Form -->
            <form class="form-mailchimp form-light validate" action="//simpleqode.us15.list-manage.com/subscribe/post-json?u=507744bbfd1cc2879036c7780&id=4523d25e1b&c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
              <div id="mc_embed_signup_scroll" class="form-row justify-content-center">
                <div class="input-group col-md-4 mb-2 mb-md-0">
                  <input type="email" value="" name="EMAIL" class="required email form-control order-1" id="mce-EMAIL" placeholder="Email address">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="icon icon-envelope input-group-icon icon-offset" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div id="mce-responses" class="clear">
                    <div class="response"></div>
                    <div class="response" id="mce-success-response"></div>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div aria-hidden="true" id="mce-hidden-input">
                    <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
                  </div>
                </div>
                <div class="clear col-md-auto">
                  <button type="submit" class="btn btn-outline-primary text-white" id="mc-embedded-subscribe">
                    Sign up
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section class="section">
      
      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            
            <!-- Heading -->
            <h2 class="text-center mb-4">
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

    <!-- SPECS
    ================================================== -->
    <section class="bg-light overflow-hidden">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 col-md-6 section pb-0 py-md-0">
            
            <!-- Image -->
            <div class="img-half img-half-left spec-line">
              <img src="assets/img/5.jpg" alt="..." class="img-cover">
            </div>

          </div>
          <div class="col-12 col-md-6 col-xl-5 offset-xl-1 section">

            <!-- Heading -->
            <h3 class="mb-4">
              Specifications
            </h3>

            <!-- List -->
            <ul class="mb-0 spec-list">
              <li class="spec-list-item">
                <span class="text-muted">
                  Model number
                </span>
                <span></span>
                <span class="text-right">
                  123456
                </span>
              </li>
              <li class="spec-list-item">
                <span class="text-muted">
                  Model number
                </span>
                <span></span>
                <span class="text-right">
                  Round
                </span>
              </li>
              <li class="spec-list-item">
                <span class="text-muted">
                  Movement
                </span>
                <span></span>
                <span class="text-right">
                  Quartz
                </span>
              </li>
              <li class="spec-list-item">
                <span class="text-muted">
                  Strap style
                </span>
                <span></span>
                <span class="text-right">
                  Strap
                </span>
              </li>
              <li class="spec-list-item">
                <span class="text-muted">
                  Guarantee
                </span>
                <span></span>
                <span class="text-right">
                  2 years
                </span>
              </li>
              <li class="spec-list-item">
                <span class="text-muted">
                  Case material
                </span>
                <span></span>
                <span class="text-right">
                  Stainless Steel
                </span>
              </li>
            </ul>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- CTA
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8">
            
            <!-- Heading -->
            <h3 class="mb-4">
              Wait no more. Get it now.
            </h3>

            <!-- Content -->
            <p class="text-muted mb-4 mb-md-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae dolores, voluptates atque dicta vero quibusdam laudantium saepe sequi harum.
            </p>

          </div>
          <div class="col-md-4">
            
              <!-- Button -->
              <a href="#!" class="btn btn-outline-primary">
                Purchase now
              </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- FOOTER
    ================================================== -->
    @include("page_new.src.partials.footer")

    <!-- JAVASCRIPT
    ================================================== -->
    @include("page_new.src.partials.scripts")

  </body>
</html>