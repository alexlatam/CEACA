@extends('cms')


@section('content')
	<h2>Bienvenido {{auth()->user()->name}}</h2>
@endsection