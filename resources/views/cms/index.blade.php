@extends('cms')


@section('content')
	<h2 class="pt-3">Bienvenido {{auth()->user()->name}}</h2>
	<hr>

	<h4>Panel administrativo del sitio web <a href="https://ceaca.com/" target="_blank">Ceaca.com</a></h4>
@endsection