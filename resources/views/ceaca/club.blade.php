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

	<section>
		<h2>adaldwadlla</h2>
		<h2>jwdhajdjawdwajda</h2>
		<h2>whdhjadhwajdjadahj</h2>
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