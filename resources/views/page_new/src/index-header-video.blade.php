<!doctype html>
<html lang="en">
  <head>
    @include("page_new.src.partials.head")
  </head>
  <body>

    <!-- NAVBAR
    ================================================= -->
    @include("page_new.src.partials.navbar")

    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

      <!-- Video -->
      <div class="bg-video">
        <video class="bg-video-media" autoplay playsinline muted>
          <source src="assets/video/1.mp4" type="video/mp4">
          HTML video is not supported by your browser.
        </video>
      </div>

      <!-- Overlay -->
      <div class="bg-overlay"></div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 col-lg-7">

            <!-- Preheading -->
            <p class="font-weight-medium text-center text-xs text-uppercase text-white text-muted" data-toggle="animation" data-animation="fadeUp" data-animation-order="0" data-animation-trigger="load">
              by Simpleqode
            </p>
            
            <!-- Heading -->
            <h1 class="text-white text-center mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="1" data-animation-trigger="load">
              Landing pages for any occasion
            </h1>

            <!-- Subheading -->
            <p class="lead text-white text-muted text-center mb-5" data-toggle="animation" data-animation="fadeUp" data-animation-order="2" data-animation-trigger="load">
              Incline is set of landing and support pages aimed at helping companies promote new products and business launches.
            </p>

            <!-- Button -->
            <p class="text-center mb-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="3" data-animation-trigger="load">
              <a href="https://themes.getbootstrap.com/product/incline-landing-page-set/" target="_blank" class="btn btn-outline-primary text-white">
                Purchase now
              </a>
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- SECTIONS
    ================================================== -->
    @include("page_new.src.partials.pages.welcome")

    <!-- FOOTER
    ================================================== -->
    @include("page_new.src.partials.footer")

    <!-- JAVASCRIPT
    ================================================== -->
    @include("page_new.src.partials.scripts")

  </body>
</html>