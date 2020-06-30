<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Ceaca Landing</title>


	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,800&display=swap" rel="stylesheet">


	<!-- Styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick.css')}}"/>

	<!-- Scripts -->
	<script src="{{asset('libs/jquery/jquery.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="{{ asset('js/slick/slick.min.js') }}"></script>
</head>

<body class="landing_body">
	<header class="landing_header" id="app">
		<div class="landing_header_nav">
			<div class="landing_header_nav_body">
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="landing_header_nav_container navbar-nav">
							<li class="lading_header_lists">
								<a href="{{route('nosotros')}}">quienes somos</a>
							</li>
							<li class="lading_header_lists">
								<a href="#">servicios</a>
							</li>
							<li class="lading_header_lists">
								<a href="#">club ceaca</a>
							</li>
							<li class="lading_header_lists">
								<a href="#">revista</a>
							</li>
							<li class="lading_header_lists">
								<a href="#">contacto</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="landing_images container_sub">
			<img class="slider_images_imagen" style="margin-bottom: 3.7rem;width: 320px;" src="{{asset('ceaca_landing/ceaca_logo.png')}}">

			<!-- Slider  -->

			<div class="lading_image_slider">
				<h2 class="landing_slider_title" >magazine <span>calderas</span></h2>
				<div class="slider_image_container">
					<div style="width: 100%; height: 100%;">
						<img class="landing_slider_image" src="{{asset('ceaca_landing/04.jpg')}}">
					</div>
					<div style="width: 100%; height: 100%;">
						<img  class="landing_slider_image" src="{{asset('ceaca_landing/04.jpg')}}">
					</div>
					<div style="width: 100%; height: 100%;">
						<img  class="landing_slider_image" src="{{asset('ceaca_landing/04.jpg')}}">
					</div>	
				</div>
			</div>
			<!-- Slider end -->
		</div>
	</header>

	<!-- Slider codigo -->

	<script type="text/javascript">
		  $('.slider_image_container').slick({
		    autoplay: true,
		    arrows: true,
		    touchMove: true,
	        prevArrow: `<div class="arrow_icon arrow_left">
	    		            	<img src="{{ asset('iconos/arrow.png') }}">
	    		        </div>`,
	    	nextArrow: `<div class="arrow_icon arrow_right">
	    		            	<img src="{{ asset('iconos/arrow.png') }}">
	    		        </div>`
		  });
	</script>
	<!-- Espacio en gris -->

	<div class="lading_secciongris">
	</div>

	<!-- Frase 1 de la landing -->

	<section class="landing_frase frase_1 container_sub">
		<h3 class="landing_frase_titulo">Calderas</h3>
		<h3 class="landing_frase_subtitulo">revista tecnico-comercial especializada en calderas, en versión digital.</h3>
	</section>

	<!-- imagenes enlazadas -->

	<section class="landing_imagenes_enlazadas container_sub imagenes">
		<a href="#">
			<img src="{{asset('ceaca_landing/boton_1.jpg')}}">
		</a>
		<a href="#">
			<img src="{{asset('ceaca_landing/boton_2.jpg')}}">
		</a>
		<a href="#">
			<img src="{{asset('ceaca_landing/boton_3.jpg')}}">
		</a>
	</section>

	<!-- Frase 2 de la landing -->

	<section class="landing_frase frase_2 container_sub">
		<h3 class="landing_frase_titulo">23 años sirviendo con calidad</h3>
		<h3 class="landing_frase_subtitulo">en temas de consultoría y capacitación en toda latinoamérica.</h3>
	</section>

	<!-- iconos de la landing -->

	<section class="landing_iconos container_sub">
		<a href="#" class="landing_icono_card">
			<img src="{{asset('ceaca_landing/iconos/icono_1.png')}}">
			<h5>quienes somos</h5>
		</a>
		<a href="#" class="landing_icono_card">
			<img src="{{asset('ceaca_landing/iconos/icono_2.png')}}">
			<h5>nuestros servicios</h5>
		</a>
		<a href="#" class="landing_icono_card">
			<img src="{{asset('ceaca_landing/iconos/icono_3.png')}}">
			<h5>club ceaca</h5>
		</a>
		<a href="#" class="landing_icono_card">
			<img src="{{asset('ceaca_landing/iconos/icono_4.png')}}">
			<h5>contáctanos</h5>
		</a>
	</section>



	<!-- End Carousel Ejemplo -->

	<footer class="landing_footer">

	</footer>

	<script type="text/javascript">
		let body = document.querySelector(".landing_body");
		let element = document.querySelector(".landing_header_nav")
		
		window.addEventListener("DOMContentLoaded" , () => {
		        
		      	coordenadas = body.getBoundingClientRect();

		        if (coordenadas.top < 0) {

		        	element.setAttribute("style","background-color: #fff");
		        	let navbar = document.querySelector('.landing_header_nav_body');
		        	navbar.classList.add('scroll');
		        }

		        if(coordenadas.top == 0) {
		        	element.setAttribute("style","background-color: transparent");
		        	let navbar = document.querySelector('.landing_header_nav_body');
		        	navbar.classList.remove('scroll');
		        }
		    });

        document.addEventListener("scroll", () => {
        	coordenadas = body.getBoundingClientRect();

	        if (coordenadas.top < 0) {

	        	element.setAttribute("style","background-color: #fff");
	        	let navbar = document.querySelector('.landing_header_nav_body');
	        	navbar.classList.add('scroll');
	        }

	        if(coordenadas.top == 0) {
	        	element.setAttribute("style","background-color: transparent");
	        	let navbar = document.querySelector('.landing_header_nav_body');
	        	navbar.classList.remove('scroll');
	        }

        	
        });
	</script>
</body>

</html>