<!doctype html>
<html lang="en">
  <head>
    @include("page_new.src.partials.head)
  </head>
  <body>

    <!-- NAVBAR
    ================================================= -->
    @include("page_new.src.partials.navbar")

    <!-- BREADCRUMB
    ================================================== -->
    <nav class="breadcrumb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            
            <!-- Heading -->
            <h5 class="breadcrumb-heading">
              Checkout
            </h5>

          </div>
          <div class="col-auto">

            <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="index.html">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Checkout
            </span>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
    
    <!-- CART
    ================================================== -->
    <section class="section">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-lg-2">
            
            <!-- Card -->
            <div class="card card-active mb-5">
              
              <!-- Body -->
              <div class="card-body text-center">

                <!-- Title -->
                <h4 class="card-title">
                  Basic plan
                </h4>

                <!-- Price -->
                <h3 class="card-title font-weight-normal text-primary">
                  $49.99 <small>/ mo</small>
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
          <div class="col-lg-8 order-lg-1">
            
            <!-- Heading -->
            <h3 class="mb-4">
              Ready to proceed?
            </h3>

            <!-- Subheading -->
            <p class="text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur iusto optio cum maiores aliquid ipsa consectetur.
            </p>

            <!-- Form -->
            <form>

              <!-- Inputs -->
              <div class="form-group">
                <label>
                  First name *
                </label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>
                  Last name *
                </label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>
                  Country
                </label>
                <select class="custom-select">
                  <option value="1">
                    Australia
                  </option>
                  <option value="2">
                    Belgium
                  </option>
                  <option value="3">
                    Canada
                  </option>
                  <option value="4">
                    Denmark
                  </option>
                  <option value="5">
                    England
                  </option>
                  <option value="6">
                    Finland
                  </option>
                  <option value="7">
                    Germany
                  </option>
                  <option value="8">
                    Hungary
                  </option>
                  <option value="9">
                    Iceland
                  </option>
                  <option value="10">
                    Japan
                  </option>
                </select>
              </div>
              <div class="form-group mb-5">
                <label>
                  Company name
                </label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-row mb-5">
                <div class="col-12">
                  
                  <!-- Label -->
                  <label>
                    Payment method
                  </label>

                </div>
                <div class="col-md">

                  <!-- Method -->
                  <div class="extended-radio">
                    <input class="extended-radio-input" id="checkout-method-stripe" type="radio" name="checkout-method" checked>
                    <label class="extended-radio-label" for="checkout-method-stripe">
                      <i class="fab fa-cc-visa"></i>
                      <i class="fab fa-cc-mastercard"></i>
                    </label>
                  </div>
                  
                </div>
                <div class="col-md">

                  <!-- Method -->
                  <div class="extended-radio">
                    <input class="extended-radio-input" id="checkout-method-paypal" type="radio" name="checkout-method">
                    <label class="extended-radio-label" for="checkout-method-paypal">
                      <i class="fab fa-paypal"></i>
                    </label>
                  </div>
                  
                </div>
                <div class="col-md">

                  <!-- Method -->
                  <div class="extended-radio">
                    <input class="extended-radio-input" type="radio" name="checkout-method" id="checkout-method-amazon">
                    <label class="extended-radio-label" for="checkout-method-amazon">
                      <i class="fab fa-amazon-pay"></i>
                    </label>
                  </div>
                  
                </div>
              </div>

              <!-- Total -->
              <div class="form-row mb-5">
                <div class="col-12">
                  
                  <!-- Pre -->
                  <div class="text-right">
                    Basic plan: $49.99
                  </div>

                  <!-- Divider -->
                  <hr>

                  <!-- Total -->
                  <div class="text-right font-weight-bold">
                    Total: $49.99
                  </div>

                </div>
              </div>

              <!-- Buttons -->
              <div class="text-left">
                <button type="submit" class="btn btn-outline-primary">
                  Place order
                </button>
                <button type="reset" class="btn btn-link">
                  Cancel
                </button>
              </div>

            </form>

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