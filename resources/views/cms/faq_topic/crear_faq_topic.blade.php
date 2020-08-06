@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				@isset($topico)
				Editar Tópico
				@else	
				Crear Tópico
				@endisset
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/faq_topic" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
		</div>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-danger" role="alert">
			{{session('error')}}
		</div>
		@endif
		@isset($topico)
		<form action="/cms/faq_topic/{{$topico->id}}" class="row" id="form_faq" method="POST" >
			@csrf
			@method('PUT')
		@else	
			<form action="/cms/faq_topic" class="row" id="form_faq" method="POST" >
				@csrf
		@endisset
			<div class="form-group col-12">
				<h5>Nombre del Tópico</h5>
				<input type="text" id="topico" name="topico" placeholder="Nombre del tópico..." class="form-control" maxlength="191" @isset($topico)
					value = "{{$topico->topico}}"
				@endisset required >
			</div>
			<div class="col-auto mt-3">
				<button type="submit" class="btn btn-success px-5 col-auto" id="seccion_submit" >
					@isset($topico)
					Actualizar Tópico
					@else
					Crear Tópico
					@endisset
				</button>
			</div>
		</form>
	</div>
</section>

<script type="text/javascript">


</script> 

@endsection