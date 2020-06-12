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
              Dummy
            </h5>

          </div>
          <div class="col-auto">

            <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="index.html">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Dummy
            </span>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>

    <!-- FOOTER
    ================================================== -->
    @include("page_new.src.partials.footer")

    <!-- JAVASCRIPT
    ================================================== -->
    @include("page_new.src.partials.scripts")

  </body>
</html>