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
		<div class="landing_header_nav nosotros_nav container_header">
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
</body>

</html>