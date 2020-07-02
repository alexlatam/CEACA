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
	<header class="club_header" id="app">
		<div class="landing_header_nav">
			<div class="landing_header_nav_body club">
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="landing_header_nav_container club navbar-nav">
							<li class="lading_header_lists">
								<a href="{{route('nosotros')}}">quienes somos</a>
							</li>
							<li class="lading_header_lists">
								<a href="#">servicios</a>
							</li>
							<li class="lading_header_lists">
								<a href="{{route('club')}}">club ceaca</a>
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
		<div class="club_header_body">
			<h1 class="nosotros_header_title text-center">club ceaca beneficios y oportunidades</h1>
			<div class="nosotros_header_images">
				<img src="{{asset('ceaca_landing/club_ceaca/01.jpg')}}">
				<img src="{{asset('ceaca_landing/club_ceaca/02.jpg')}}">
				<img src="{{asset('ceaca_landing/club_ceaca/03.jpg')}}">
				<img src="{{asset('ceaca_landing/club_ceaca/04.jpg')}}">
				<img src="{{asset('ceaca_landing/club_ceaca/05.jpg')}}">
				<img src="{{asset('ceaca_landing/club_ceaca/06.jpg')}}">
			</div>
		</div>
	</header>


	<!-- Beneficios del club -->	
	<section class="club_beneficios club_container">
		<div class="club_beneficios_body ">
			<div class="beneficios">
				<ul class="beneficios_body">
					<li>- Recepcion de la revista</li>
					<li>- Participación en Webinars técnicos</li>
					<li>- Acceso a ver los videos cortos</li>
					<li>- Acceso a ver preguntas frecuentes</li>
					<li>- Programa de Acompañamiento - estudiante - mentores</li>
					<li>- Descuento en cursos</li>
					<li>- Participación en Foros de Discusión</li>
					<li>- Disponibilidad de hacer consultas técnicas en linea</li>
				</ul>
			</div>
			<div class="bolsa_trabajo">
				<h5 class="bolsa_trabajo_title">Bolsa de Trabajo</h5>
				<ul class="bolsa_trabajo_body">
					<li>Empresas ofertando vacantes</li>
					<li>Búsqueda de oportunidades</li>
					<li>Empresas buscando Referencias de consultores o empresas de Servicios </li>
					<li>Especialistas en diferentes áreas de acción - relacionados con calderas</li>
				</ul>
			</div>
		</div>
	</section>


	<!-- Información del club -->

	<section class="club_informacion club_container">


	<!-- Comienzo de las cards -->

				<!-- Card tipo 1 -->
			<div class="club_informacion_card">
				<div class="club_informacion_card_header">
					<h1 class="club_card_title">Membresía Gratis</h1>
					<img class="club_informacion_card_header_image club_image_container" src="{{asset('ceaca_landing/club_ceaca/07.jpg')}}">
				</div>
				<div class="club_informacion_card_body">
					<p>
						Recepción de la revista - que avisar con la suscripción para bajar la revista queda registrado y por eso la importacia de registrarse para recibirlas <br>
						Participación en Webinars técnicos - Acceso a ver los videos cortos - en un espacio privado de CEACA ¿en la web o Youtube? Puede ser que se bajen los que no correspondan a cursos - se harían unos introductorios y sencillos, promocionales para los cursos. Acceso a ver preguntas frecuentes.
					</p>
				</div>
			</div>

				<!-- Card tipo 2 -->
			<div class="club_informacion_card number_2">
				<h1 class="club_card_title number_2">Membresía Económica</h1>
				<img class="club_informacion_card_header_image number_2 club_image_container" src="{{asset('ceaca_landing/club_ceaca/08.jpg')}}">
				<div class="club_informacion_card_body number_2">
					<p>
						Recepción de la revista - que avisar con la suscripción para bajar la revista queda registrado y por eso la importacia de registrarse para recibirlas <br>
						Participación en Webinars técnicos - Acceso a ver los videos cortos - en un espacio privado de CEACA ¿en la web o Youtube? Puede ser que se bajen los que no correspondan a cursos - se harían unos introductorios y sencillos, promocionales para los cursos. Acceso a ver preguntas frecuentes.
					</p>
				</div>
			</div>

				<!-- Card tipo 1 -->
			<div class="club_informacion_card">
				<div class="club_informacion_card_header">
					<h1 class="club_card_title">Membresía Media</h1>
					<img class="club_informacion_card_header_image club_image_container" src="{{asset('ceaca_landing/club_ceaca/09.jpg')}}">
				</div>
				<div class="club_informacion_card_body">
					<p>
						($60 USD al año) o a quienes hayan participado en al menos tres (03) cursos en un año (no aplican los mini-cursos) Los mismos que en el nivel de membresía anterior. Descuento en los proximos cursos (20%). Posibilidad de hacer hasta dos (02) consultas técnicas trimestrales sobre asuntos de sus calderas, relacionadas con los temas a los que se refirieron los cursos en los que participó (lo que hace un máximo de (06) consultas - No son acumulativas y las preguntas pueden consumir la
					</p>
				</div>
			</div>

				<!-- Card tipo 2 -->
			<div class="club_informacion_card number_2">
				<h1 class="club_card_title number_2">Membresía Premium</h1>
				<img class="club_informacion_card_header_image number_2 club_image_container" src="{{asset('ceaca_landing/club_ceaca/10.jpg')}}">
				<div class="club_informacion_card_body number_2">
					<p>
						Los mismos que en el nivel de membresía anterior. Descuento en los proximos cursos (20%) y podrá seleccionar uno de los Mini-Cursos disponibles sin costo al año. Posibilidad de hacer hasta tres (03) consultas técnicas trimestrales sobre asuntos de sus calderas, relacionadas con los temas a los que se refirieron los cursos en los que participó (lo que hace un máximo de (12) consultas - No son acumulativas y las preguntas pueden consumir la disponibilidad de consultas).
					</p>
				</div>
			</div>

	<!-- END de las cards -->
	</section>

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