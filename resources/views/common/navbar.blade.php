<nav class="navbar navbar-expand-xl navbar-type fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{route('index')}}">
      <img src="{{asset('img/logo.png')}}" alt="" class="brandNavbar" width="40%">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item-divider">
          <span class="nav-link">
            <span></span>
          </span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-github"></i> 
            <span class="d-xl-none ml-2">
              Github
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-twitter"></i> 
            <span class="d-xl-none ml-2">
              Twitter
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-instagram"></i> 
            <span class="d-xl-none ml-2">
              Instagram
            </span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Welcome
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarWelcome">
            <a class="dropdown-item @@if ( page == 'index.html' ) { active }" href="index.html">
              Header: Image
            </a>
            <a class="dropdown-item @@if ( page == 'index-header-carousel.html' ) { active }" href="index-header-carousel.html">
              Header: Carousel
            </a>
            <a class="dropdown-item @@if ( page == 'index-header-parallax.html' ) { active }" href="index-header-parallax.html">
              Header: Parallax
            </a>
            <a class="dropdown-item @@if ( page == 'index-header-video.html' ) { active }" href="index-header-video.html">
              Header: Video
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Landings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarLandings">
            <a class="dropdown-item @@if ( page == 'app.html' ) { active }" href="app.html">
              App
            </a>
            <a class="dropdown-item @@if ( page == 'company.html' ) { active }" href="company.html">
              Company
            </a>
            <a class="dropdown-item @@if ( page == 'fullpage.html' ) { active }" href="fullpage.html">
              Fullpage
            </a>
            <a class="dropdown-item @@if ( page == 'product.html' ) { active }" href="product.html">
              Product
            </a>
            <a class="dropdown-item @@if ( page == 'real-estate.html' ) { active }" href="real-estate.html">
              Real estate
            </a>
            <a class="dropdown-item @@if ( page == 'restaurant.html' ) { active }" href="restaurant.html">
              Restaurant
            </a>
            <a class="dropdown-item @@if ( page == 'service.html' ) { active }" href="service.html">
              Service
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarPages">
            <li class="dropright">
              <a class="dropdown-item dropdown-toggle" href="#" id="pagesBlog" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesBlog">
                <a class="dropdown-item @@if ( page == 'blog.html' ) { active }" href="blog.html">
                  Blog
                </a>
                <a class="dropdown-item @@if ( page == 'blog-post.html' ) { active }" href="blog-post.html">
                  Blog: Post
                </a>
              </div>
            </li>
            <li class="dropright">
              <a class="dropdown-item dropdown-toggle" href="#" id="pagesShop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesShop">
                <a class="dropdown-item @@if ( page == 'shop.html' ) { active }" href="shop.html">
                  Shop
                </a>
                <a class="dropdown-item @@if ( page == 'shop-item.html' ) { active }" href="shop-item.html">
                  Shop: Item
                </a>
                <a class="dropdown-item @@if ( page == 'cart.html' ) { active }" href="cart.html">
                  Shop: Cart
                </a>
                <a class="dropdown-item @@if ( page == 'checkout.html' ) { active }" href="checkout.html">
                  Shop: Checkout
                </a>
              </div>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == 'about.html' ) { active }" href="about.html">
                About
              </a>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == 'contact.html' ) { active }" href="contact.html">
                Contact
              </a>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == 'faq.html' ) { active }" href="faq.html">
                FAQ
              </a>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == 'pricing.html' ) { active }" href="pricing.html">
                Pricing
              </a>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == 'sign-in.html' ) { active }" href="sign-in.html">
                Sign In
              </a>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == 'sign-up.html' ) { active }" href="sign-up.html">
                Sign Up
              </a>
            </li>
            <li>
              <a class="dropdown-item @@if ( page == '404.html' ) { active }" href="404.html">
                404
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarComponents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Components
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarComponents">
            <a class="dropdown-item @@if ( page == 'components-theme.html' ) { active }" href="components-theme.html">
              Theme
            </a>
            <a class="dropdown-item @@if ( page == 'components-bootstrap.html' ) { active }" href="components-bootstrap.html">
              Bootstrap
            </a>
          </div>
        </li>
        <li class="nav-item @@if ( page == 'documentation.html' ) { active }">
          <a href="documentation.html" class="nav-link">
            Documentation
          </a>
        </li>
        <li class="nav-item-divider">
          <span class="nav-link">
            <span></span>
          </span>
        </li>
      </ul>
    </div>
  </div>   
</nav>