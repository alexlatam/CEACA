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
</head>

<body class="landing_body">
	<header class="nosotros_header" id="app">
		<div class="landing_header_nav nosotros_nav">
			<div class="landing_header_nav_body">
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="landing_header_nav_container navbar-nav">
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
				</nav>
			</div>
		</div>
		<div class="nosotros_header_titles text-center nosotros_container">
			<h1 class="nosotros_header_title">23 años formando y capacitando talento humano.</h1>
			<p class="nosotros_header_subtitle">Alta interactividad en diversas áreas de la ingenieria.</p>
		</div>
	</header>

	<section class="nosotros_cards nosotros_container">
		<div class="row">
			<div class="col-md-6 col-lg-5 offset-lg-1">
				<div class="text-center img-effect img-effect-solid">
					<img class="nosotros-imagen-card img-fluid" src="{{asset('ceaca_landing/04.jpg')}}" class="img-fluid">
				</div>
			</div>
			<div class="nosotros_card_body col-md-6 col-lg-4">
				<h2 class="nosotros_card_title">Quienes Somos.</h2>
				
				<h2 class="nosotros_card_title mb-3">Ingeniería con diseño basado en códigos y normas.</h2>

				<p class="nosotros_card_text">
					Somos una empresa con más de 20 años de experiencia, principalmente enfocada en el área de formación y desarrollo de talento humano, sibre todo a distancia con alta interactividad, en disversas áreas de la ingeniería relacionadas con diseño basado en códigos y normas, operación, mantenimiento, inspección, análisis de fallas y fiabilidad. Contando con Programas de Capacitación diseñados por la misma Combustión, Energía & Ambiente o por las empresas e instituciones representadas y aliadas, basado en las necesidades del mercado o de cada cliente, y programas desarrollados por la Sociedad Americana de ingenieros Mecánicos (ASME), siendo Proveedor Autorizado de sus cursos (presenciales y a distancia) y programas de especialización.
					<br> <br>
					Combustión, Energía & Ambiente ha decidido ser principalmente una organización de servicios a distancia (Online) y en ese sentido estamos permanentemente presentandoles una propuesta de actividades de capacitación, interacción gremial - profesional y consultoría virtuales.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-5 offset-lg-1">
				<div class="text-center img-effect img-effect-solid">
					<img class="nosotros-imagen-card img-fluid" src="{{asset('ceaca_landing/04.jpg')}}" class="img-fluid">
				</div>
			</div>
			<div class="nosotros_card_body col-md-6 col-lg-4">
				<h2 class="nosotros_card_title">Visión.</h2>
				
				<h2 class="nosotros_card_title mb-3">Diseñar soluciones innovadorase integrales de capacitación y profesionalización continuos.</h2>

				<p class="nosotros_card_text">
					Tenemos como misión ofrecer - diseñar soluciones innovadoras e integrales de capacitación y profesionalización continuos - principalmente a distancia, servicios tecnicos e ingeniería en las diferentes áreas de la Mecánica y Mantenimiento de instalaciones industriales (potencia, petrolera, petroquimica, manufacturera, comercial) sobre todo con relación a todas las áreas y actividades que implican la Generación y Manejo de Vapor y Prevención de la Corrosión, buscando cubrir y solventar las necesidades existentes en la industria, con ingenieros y técnicos altamente capacitados y comprometidos con su organización y la de nuestros clientes, y basados en los códigos, estandares y regulaciones nacionales que correspondan, buscando satisfacer la mejor relación precio valor.
				</p>
			</div>
		</div>
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