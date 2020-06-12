<!doctype html>
<html lang="en">
  <head>
    @include("page_new.src.partials.head")
  </head>
  <body>

    <!-- NAVBAR
    ================================================= -->
    @include("page_new.src.partials.navbar")

    <!-- BREADCRUMBS
    ================================================== -->
    <nav class="breadcrumb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            
            <!-- Heading -->
            <h5 class="breadcrumb-heading">
              Cart
            </h5>

          </div>
          <div class="col-auto">

            <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="index.html">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Cart
            </span>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>

    <!-- CART
    ================================================== -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10">
            
            <!-- Heading -->
            <h3 class="mb-5">
              Shopping cart:
            </h3>

            <div class="row align-items-center mb-5 mb-md-4">
              <div class="col-12 col-md-2">
                
                <div class="img-square mb-4 mb-md-0">
                  <img src="assets/img/83.jpg" alt="..." class="img-cover">
                </div>

              </div>
              <div class="col-12 col-md-5">
                
                <!-- Heading -->
                <h4>
                  Men's 3-pack loose fit short-sleeve t-shirt
                </h4>

                <!-- Text -->
                <p class="mb-4 mb-md-0 text-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde architecto.
                </p>

              </div>
              <div class="col-4 col-md-2">
                
                <!-- Price -->
                <p class="mb-0 text-sm text-muted">
                  $70
                </p>

              </div>
              <div class="col-4 col-md-2">
                
                <input type="number" class="form-control form-control-sm" min="0" value="1">

              </div>
              <div class="col-4 col-md-1">
                
                <!-- Remove -->
                <div class="close">
                  &times;
                </div>

              </div>
            </div> <!-- / .row -->

            <div class="row align-items-center mb-5 mb-md-4">
              <div class="col-12 col-md-2">
                
                <div class="img-square mb-4 mb-md-0">
                  <img src="assets/img/84.jpg" alt="..." class="img-cover">
                </div>

              </div>
              <div class="col-12 col-md-5">
                
                <!-- Heading -->
                <h4>
                  Open-toe high-heel woman sandals
                </h4>

                <!-- Text -->
                <p class="mb-4 mb-md-0 text-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde architecto.
                </p>

              </div>
              <div class="col-4 col-md-2">
                
                <!-- Price -->
                <p class="mb-0 text-sm text-muted">
                  $70
                </p>

              </div>
              <div class="col-4 col-md-2">
                
                <input type="number" class="form-control form-control-sm" min="0" value="1">

              </div>
              <div class="col-4 col-md-1">
                
                <!-- Remove -->
                <div class="close">
                  &times;
                </div>

              </div>
            </div> <!-- / .row -->

            <div class="row align-items-center mb-5 mb-md-4">
              <div class="col-12 col-md-2">
                
                <div class="img-square mb-4 mb-md-0">
                  <img src="assets/img/86.jpg" alt="..." class="img-cover">
                </div>

              </div>
              <div class="col-12 col-md-5">
                
                <!-- Heading -->
                <h4>
                  Women's stretch linen jogger pant
                </h4>

                <!-- Text -->
                <p class="mb-4 mb-md-0 text-sm text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde architecto.
                </p>

              </div>
              <div class="col-4 col-md-2">
                
                <!-- Price -->
                <p class="mb-0 text-sm text-muted">
                  $70
                </p>

              </div>
              <div class="col-4 col-md-2">
                
                <input type="number" class="form-control form-control-sm" min="0" value="1">

              </div>
              <div class="col-4 col-md-1">
                
                <!-- Remove -->
                <div class="close">
                  &times;
                </div>

              </div>
            </div> <!-- / .row -->

            <hr class="mt-5 mb-4">

            <div class="row align-items-center">
              <div class="col">
                
                <!-- Link -->
                <a href="shop.html">
                  <i class="fas fa-angle-left mr-2"></i> Continue shopping 
                </a>

              </div>
              <div class="col-auto">
                
                <!-- Total -->
                <h4 class="mb-0">
                  $210
                </h4>
                
              </div>
            </div> <!-- / .row -->

            <hr class="mt-4 mb-5">

            <div class="text-center mb-5 mb-md-0">

              <!-- Button -->
              <a href="checkout.html" class="btn btn-outline-primary">
                Proceed to checkout <i class="fas fa-arrow-right ml-2"></i>
              </a>

            </div>

          </div>
          <div class="col-12 col-md-2">
            
            <!-- Title -->
            <h6 class="title">
              Quick links
            </h6>

            <!-- Nav -->
            <ul class="sidenav list-unstyled">
              <li class="text-xs text-uppercase mb-2">
                <a href="#!">Delivery & payment</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#!">Data protection</a>
              </li>
              <li class="text-xs text-uppercase mb-2">
                <a href="#!">Return policy</a>
              </li>
            </ul>

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