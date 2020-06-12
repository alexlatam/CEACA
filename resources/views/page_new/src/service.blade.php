<!doctype html>
<html lang="en">
  <head>
    @include("page_new.src.partials.head")
  </head>
  <body>

    <!-- NAVBAR
    ================================================== -->
    @include("page_new.src.partials.navbar")
    
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url({{asset('img_plantilla/20.jpg')}})">
      </div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-left bg-triangle-bottom"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-right bg-triangle-bottom"></div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">

            <!-- Preheading -->
            <p class="font-weight-medium text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
              by Simpleqode
            </p>
            
            <!-- Heading -->
            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
              Fast and reliable same day courier service
            </h1>

            <!-- Subheading -->
            <p class="text-white text-muted mb-5 mb-lg-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quos vitae commodi sit, voluptas sequi adipisci vero repellat molestiae.
            </p>

          </div>
          <div class="col-lg-5 offset-lg-2">
            
            <!-- Form -->
            <form class="form-styled bg-white mb-4">

              <!-- Heading -->
              <h4 class="form-heading mb-4">
                Get a free quote:
              </h4>

              <!-- From -->
              <div class="form-group">
                <label>Pickup from:</label>
                <div class="input-group">
                  <input type="text" class="form-control order-1">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="input-group-icon icon-offset icon icon-marker" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M50 100 L 22 68 A 40 40 0 0 1 50 0 A 40 40 0 0 1 78 68 L 50 100 M50 50 A 10 10 0 0 1 50 30 A 10 10 0 0 1 50 50">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <!-- To -->
              <div class="form-group">
                <label>Deliver to:</label>
                <div class="input-group">
                  <input type="text" class="form-control order-1">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="input-group-icon icon-offset icon icon-marker" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M50 100 L 22 68 A 40 40 0 0 1 50 0 A 40 40 0 0 1 78 68 L 50 100 M50 50 A 10 10 0 0 1 50 30 A 10 10 0 0 1 50 50">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Buttons -->
              <div class="text-left">
                <button type="submit" class="btn btn-outline-primary">
                  Calculate
                </button>
                <button type="reset" class="btn btn-link">
                  Reset
                </button>
              </div>

            </form>

            <!-- Caption -->
            <p class="d-flex align-items-center justify-content-center">
              
              <!-- Icon -->
              <span class="icon icon-support icon-2x text-primary mr-2"></span>

              <span class="text-white mr-3">
                Or call us: 
              </span>

              <!-- Phone -->
              <a href="#" class="text-white">
                +123-456-78-90
              </a>

            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            
            <!-- Heading -->
            <h2 class="mb-4">
              Shipments delivered <span class="text-primary">on time</span> with no hassle
            </h2>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-8">

            <!-- Subheading -->
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem libero adipisci odit, iure quibusdam veniam eius perferendis numquam cumque repudiandae, quisquam veritatis mollitia. Molestiae ipsa porro, id enim deleniti aspernatur? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
            <p>
              <a href="contact.html" class="btn btn-outline-primary">
                Get in touch with us
              </a>
            </p>

          </div>
          <div class="col-md-4">
            
            <!-- Blockquote -->
            <blockquote class="blockquote">
              <p>
                I cannot find any other courier company that can match Incline's prices and customer service!
              </p>
              <footer class="text-muted">
                <div class="avatar avatar mr-3">
                  <img src="{{asset('img_plantilla/16.jpg')}}" alt="..." class="img-cover rounded-circle">
                </div> John Doe, New York
              </footer>
            </blockquote>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- SERVICES
    ================================================== -->
    <section class="section">
      
      <!-- Content -->
      <div class="container">
        <div class="row no-gutters align-items-stretch">
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card card-tall border-0 mb-3 md-md-0">
              
              <!-- Image -->
              <div class="bg-cover" style="background-image: url({{asset('img_plantilla/21.jpg')}})"></div>

              <!-- Overlay -->
              <div class="bg-overlay"></div>

              <!-- Body -->
              <div class="card-body">

                <!-- Icon -->
                <div class="card-icon text-primary">
                  <span class="icon icon-businessman"></span>
                </div>
              
                <!-- Title -->
                <h4 class="card-title text-white">
                  Business courier service
                </h4>

                <!-- Text -->
                <p class="card-text text-white text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit a amet dicta eum quae reiciendis.
                </p>

              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card card-tall card-standout shadow border-0 mb-3 md-md-0">
              
              <!-- Image -->
              <div class="bg-cover" style="background-image: url({{asset('img_plantilla/22.jpg')}})"></div>

              <!-- Overlay -->
              <div class="bg-overlay"></div>

              <!-- Body -->
              <div class="card-body">

                <!-- Icon -->
                <div class="card-icon text-primary">
                  <span class="icon icon-case"></span>
                </div>
              
                <!-- Title -->
                <h4 class="card-title text-white">
                  Legal courier service
                </h4>

                <!-- Text -->
                <p class="card-text text-white text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit a amet dicta eum quae reiciendis.
                </p>

              </div>

            </div> <!-- / .card -->

          </div>
          <div class="col-md-4">
            
            <!-- Card -->
            <div class="card card-tall border-0 mb-3 md-md-0">
              
              <!-- Image -->
              <div class="bg-cover" style="background-image: url({{asset('img_plantilla/23.jpg')}})"></div>

              <!-- Overlay -->
              <div class="bg-overlay"></div>

              <!-- Body -->
              <div class="card-body">

                <!-- Icon -->
                <div class="card-icon text-primary">
                  <span class="icon icon-truck"></span>
                </div>
              
                <!-- Title -->
                <h4 class="card-title text-white">
                  Personal courier service
                </h4>

                <!-- Text -->
                <p class="card-text text-white text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit a amet dicta eum quae reiciendis.
                </p>

              </div>

            </div> <!-- / .card -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section bg-light">

      <!-- Triangles -->
      <div class="bg-triangle triangle-dark bg-triangle-left bg-triangle-top"></div>  
      <div class="bg-triangle triangle-dark bg-triangle-right bg-triangle-bottom"></div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-7">
            
            <!-- Image -->
            <div class="img-effect img-effect-info mb-5 mb-md-0">

              <!-- Info -->
              <div class="img-effect-info-popup">

                <!-- Icon -->
                <div class="img-effect-info-popup-icon">
                  <i class="fas fa-building"></i>
                </div>

                <!-- Content -->
                <div class="img-effect-info-popup-content">
                  Delivering parcels and documents since 2010
                </div>

              </div>

              <!-- Image -->
              <img src="{{asset('img_plantilla/24.jpg')}}" class="img-fluid" alt="...">

            </div>

          </div>
          <div class="col-md-6 col-lg-4 offset-lg-1">

            <!-- Heading -->
            <h2 class="heading mb-4">
              Years of undisputable reputation
            </h2>

            <!-- Content -->
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores, aperiam. Excepturi assumenda non quasi ipsa quidem harum debitis aut alias dicta. Laudantium reprehenderit ea, suscipit nulla deleniti excepturi repudiandae!
            </p>

            <!-- Button -->
            <a href="#testimonials" class="btn btn-outline-primary">
              Read testimonials
            </a>
            
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
          <div class="col-md-6 col-lg-7 offset-lg-1 order-md-2">
            
            <!-- Image -->
            <div class="img-effect img-effect-dotted mb-5 mb-md-0">
              <img src="{{asset('img_plantilla/25.jpg')}}" class="img-fluid" alt="...">
            </div>

          </div>
          <div class="col-md-6 col-lg-4 order-md-0">

            <!-- Heading -->
            <h2 class="heading mb-4">
              Hundreds of satisfied clients
            </h2>

            <!-- Content -->
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maiores, aperiam. Excepturi assumenda non quasi ipsa quidem harum debitis aut alias dicta. Laudantium reprehenderit ea, suscipit nulla deleniti excepturi repudiandae!
            </p>

            <!-- Button -->
            <a href="#testimonials" class="btn btn-outline-primary">
              Read testimonials
            </a>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- FEATURES
    ================================================== -->
    <section class="section bg-light">

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-dark bg-triangle-left bg-triangle-top"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
          
            <!-- Heading -->
            <h2 class="text-center mb-4">
              See why people choose us
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted text-left mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo officiis odio repudiandae illum molestiae.
            </p>
          
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-4">

            <!-- Item -->
            <div class="text-center mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-clock icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="mb-3">
                Round-the-clock shipment
              </h4>

              <!-- Content -->
              <p class="text-muted mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis.
              </p>

            </div>

          </div>
          <div class="col-md-4">

            <!-- Item -->
            <div class="text-center mb-5 mb-md-0">
              
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-cart icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="mb-3">
                Door-to-door delivery
              </h4>

              <!-- Content -->
              <p class="text-muted mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis.
              </p>

            </div>

          </div>
          <div class="col-md-4">

            <!-- Item -->
            <div class="text-center">
              
              <!-- Icon -->
              <div class="text-primary mb-4">
                <span class="icon icon-support icon-2x"></span>
              </div>

              <!-- Heading -->
              <h4 class="mb-3">
                Customer service
              </h4>

              <!-- Content -->
              <p class="text-muted mb-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi culpa, corporis.
              </p>

            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- TEAM
    ================================================== -->
    <section class="section">

      <!-- Line -->
      <div class="line line-top"></div>

      <!-- Triangle -->
      <div class="bg-triangle bg-triangle-dark bg-triangle-right bg-triangle-bottom"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            
            <!-- Heading -->
            <h2 class="text-center mb-4">
              Our best couriers
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel distinctio deserunt dolor culpa repellat iusto nostrum tempora placeat.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Team -->
            <div class="row">
              <div class="col-md-3">
                
                <!-- Card -->
                <div class="card card-sm border-0 text-center mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="{{asset('img_plantilla/16.jpg')}}" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title">
                      Richard Roe, <small class="text-muted">New York</small>
                    </h5>

                    <!-- Social -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-3">
                
                <!-- Card -->
                <div class="card card-sm border-0 text-center mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="{{asset('img_plantilla/17.jpg')}}" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title">
                      Anna Doe, <small class="text-muted">Los Angeles</small>
                    </h5>

                    <!-- Social -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-3">
                
                <!-- Card -->
                <div class="card card-sm border-0 text-center mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="{{asset('img_plantilla/18.jpg')}}" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title">
                      Jane Roe, <small class="text-muted">San Francisco</small>
                    </h5>

                    <!-- Social -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-3">
                
                <!-- Card -->
                <div class="card card-sm border-0 text-center">
                  
                  <!-- Image -->
                  <img src="{{asset('img_plantilla/19.jpg')}}" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Title -->
                    <h5 class="card-title">
                      John Doe, <small class="text-muted">Chicago</small>
                    </h5>

                    <!-- Social -->
                    <ul class="card-text list-inline list-unstyled">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fab fa-github"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="list-inline-item ml-3">
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- STATS
    ================================================== -->
    <section class="section">

      <!-- Cover -->
      <div class="bg-cover" style="background-image: url({{asset('img_plantilla/15.jpg')}});">
      </div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Incline -->
      <div class="bg-incline bg-incline-light bg-incline-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Icon -->
            <div class="text-center text-primary mb-4">
              <span class="icon icon-diamond icon-2x"></span>
            </div>
            
            <!-- Heading -->
            <h2 class="text-center text-white mb-4">
              Our company in numbers
            </h2>

            <!-- Subheading -->
            <p class="text-white text-muted text-center mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque quos fugiat maxime, voluptate facilis odio velit tempora expedita.
            </p>

          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 col-lg-3">
            
            <!-- Item -->
            <div class="stats-item text-center mb-5 mb-md-0">
              
              <!-- Value -->
              <div class="stats-item-value text-white">
                12,056
              </div>

              <!-- Title -->
              <p class="stats-item-title text-white text-muted">
                Parsels delivered
              </p>

            </div>
            
          </div>
          <div class="col-md-4 col-lg-3">
            
            <!-- Item -->
            <div class="stats-item text-center mb-5 mb-md-0">
              
              <!-- Value -->
              <div class="stats-item-value text-white">
                21,458
              </div>

              <!-- Title -->
              <p class="stats-item-title text-white text-muted">
                Miles gone
              </p>

            </div>
            
          </div>
          <div class="col-md-4 col-lg-3">
            
            <!-- Item -->
            <div class="stats-item text-center">
              
              <!-- Value -->
              <div class="stats-item-value text-white">
                1,569
              </div>

              <!-- Title -->
              <p class="stats-item-title text-white text-muted">
                Satisfied clients
              </p>

            </div>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
      
    </section>

    <!-- TESTIMONIALS
    ================================================== -->
    <section class="section" id="testimonials">
      
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
                          <img src="{{asset('img_plantilla/16.jpg')}}" alt="..." class="img-cover rounded-circle">
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
                          <img src="{{asset('img_plantilla/18.jpg')}}" alt="..." class="img-cover rounded-circle">
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
                          <img src="{{asset('img_plantilla/17.jpg')}}" alt="..." class="img-cover rounded-circle">
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

    <!-- CTA
    ================================================== -->
    <section class="section bg-dark">

      <!-- Line -->
      <div class="line line-top"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-right bg-triangle-top"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-left bg-triangle-bottom"></div>

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col">
            
            <!-- Heading -->
            <h3 class="text-center text-white mb-5">
              Get a free quote now
            </h3>

            <!-- Form -->
            <form class="form-light mb-4">
              <div class="form-row justify-content-center">
                <div class="input-group col-md-4 col-lg-3 mb-2 mb-md-0">
                  <input type="email" class="form-control order-1" placeholder="Pickup from">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="icon icon-marker input-group-icon icon-offset" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M50 100 L 22 68 A 40 40 0 0 1 50 0 A 40 40 0 0 1 78 68 L 50 100 M50 50 A 10 10 0 0 1 50 30 A 10 10 0 0 1 50 50">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="input-group col-md-4 col-lg-3 mb-2 mb-md-0">
                  <input type="email" class="form-control order-1" placeholder="Deliver to">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="icon icon-marker input-group-icon icon-offset" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M50 100 L 22 68 A 40 40 0 0 1 50 0 A 40 40 0 0 1 78 68 L 50 100 M50 50 A 10 10 0 0 1 50 30 A 10 10 0 0 1 50 50">
                        </path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-md-auto">
                  <button type="submit" class="btn btn-outline-primary text-white">
                    Calculate
                  </button>
                </div>
              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- PRICING
    ================================================== -->
    <section class="section">

      <!-- Incline -->
      <div class="bg-incline bg-incline-dark bg-incline-left"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
              Pricing options
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptatum obcaecati facilis sed, excepturi iste iusto laborum.
            </p>
            
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-lg-4">
            
            <!-- Card -->
            <div class="card card-lg bg-white mb-3 mb-lg-0">
              
              <!-- Body -->
              <div class="card-body text-center">

                <!-- Title -->
                <h4 class="card-title">
                  Premium delivery
                </h4>

                <!-- Price -->
                <h3 class="card-title font-weight-normal text-primary">
                  $49.99
                </h3>

                <!-- Text -->
                <ul class="card-text list-iconed">
                  <li class="list-iconed-item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                  </li>
                  <li class="list-iconed-item">
                    Aliquam quis perferendis, quas fugiat. Iste quisquam sit
                  </li>
                  <li class="list-iconed-item">
                    Cum ab error sit totam nemo
                  </li>
                </ul>

                <!-- Button -->
                <a href="#!" class="btn btn-outline-primary">
                  Get it now
                </a>

              </div>
              
            </div> <!-- / .card -->

          </div>
          <div class="col-lg-4">
            
            <!-- Card -->
            <div class="card card-lg bg-white card-active mb-3 mb-lg-0">
              
              <!-- Body -->
              <div class="card-body text-center">

                <!-- Title -->
                <h4 class="card-title">
                  Rush delivery
                </h4>

                <!-- Price -->
                <h3 class="card-title font-weight-normal text-primary">
                  $79.99
                </h3>

                <!-- Text -->
                <ul class="card-text list-iconed">
                  <li class="list-iconed-item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                  </li>
                  <li class="list-iconed-item">
                    Aliquam quis perferendis, quas fugiat. Iste quisquam sit
                  </li>
                  <li class="list-iconed-item">
                    Cum ab error sit totam nemo
                  </li>
                </ul>

                <!-- Button -->
                <a href="#!" class="btn btn-outline-primary">
                  Get it now
                </a>

              </div>
              
            </div> <!-- / .card -->

          </div>
          <div class="col-lg-4">
            
            <!-- Card -->
            <div class="card card-lg bg-white">
              
              <!-- Body -->
              <div class="card-body text-center">

                <!-- Title -->
                <h4 class="card-title">
                  Business delivery
                </h4>

                <!-- Price -->
                <h3 class="card-title font-weight-normal text-primary">
                  $99.99
                </h3>

                <!-- Text -->
                <ul class="card-text list-iconed">
                  <li class="list-iconed-item">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                  </li>
                  <li class="list-iconed-item">
                    Aliquam quis perferendis, quas fugiat. Iste quisquam sit
                  </li>
                  <li class="list-iconed-item">
                    Cum ab error sit totam nemo
                  </li>
                </ul>

                <!-- Button -->
                <a href="#!" class="btn btn-outline-primary">
                  Get it now
                </a>

              </div>
              
            </div> <!-- / .card -->

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