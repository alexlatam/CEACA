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
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('libs/owlcarousel/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('libs/owlcarousel/assets/owl.theme.default.min.css')}}">

	<!-- Scripts -->
	<script src="{{asset('libs/jquery/jquery.js')}}"></script>
	<script src="{{asset('libs/owlcarousel/owl.carousel.min.js')}}"></script>
</head>

<body class="landing_body">
	<header class="landing_header">
		<div class="landing_header_nav container_header">
			<div class="landing_header_nav_body">
				<ul class="landing_header_nav_container">
					<li class="lading_header_lists">
						<a href="#">quienes somos</a>
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
		</div>
		<div class="landing_images container_sub">
			<img style="margin-bottom: 3.7rem;" src="{{asset('ceaca_landing/boton_1.jpg')}}">
			<div class="lading_image_slider">
				<h2 class="landing_slider_title">magazine <span>calderas</span></h2>
				<div>
					<img class="landing_slider_image" src="{{asset('ceaca_landing/04.jpg')}}">
				</div>
			</div>
		</div>
	</header>

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
			<h5>quienes somos</h5>
		</a>
		<a href="#" class="landing_icono_card">
			<img src="{{asset('ceaca_landing/iconos/icono_3.png')}}">
			<h5>quienes somos</h5>
		</a>
		<a href="#" class="landing_icono_card">
			<img src="{{asset('ceaca_landing/iconos/icono_4.png')}}">
			<h5>quienes somos</h5>
		</a>
	</section>



	<!-- Carousel Ejemplo -->
	<section class="owl-carousel owl-theme" class="test" id="test">
		<div class="item">
			<h2>Hola esto es un item</h2>
		</div>
		<div class="item">
			<h2>Hola esto es un item</h2>
		</div>
		<div class="item">
			<h2>Hola esto es un item</h2>
		</div>
		<div class="item">
			<h2>Hola esto es un item</h2>
		</div>
		<div class="item">
			<h2>Hola esto es un item</h2>
		</div>
	</section>
	<script>
		$('#test').owlCarousel({
			loop: false,
			margin: 25,
			nav: true,
			dots: false,
			responsive: {
				0: {
					items: 3
				}
			}
		})
	</script>
	<!-- End Carousel Ejemplo -->

	<footer class="landing_footer">

	</footer>

	<script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>