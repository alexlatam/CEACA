@extends('cms')

@section('content')
<section>
	<div class="row mt-4 px-3">
		<h4>FAQs (Pregunta Frecuentes)</h4>
		<div class=" col-auto ml-auto">
			<a href="/cms/faq_" class="btn btn-sm btn-outline-danger px-4">Volver</a>
			<a href="/cms/faq/create" class="btn btn-sm btn-outline-success">Agregar FAQ</a>
		</div>
	</div>
	<hr>
	@if(session('message'))
	<div class="alert alert-success my-3" role="alert">
		{{session('message')}}
	</div>
	@endif

	@if(session('error'))
	<div class="alert alert-danger my-3" role="alert">
		{{session('error')}}
	</div>
	@endif

</section>
<table class="table table-hover" id="table1">
	<thead>
		<tr>
			<th>#</th>
			<th>FAQ</th>
			<th>Tópico</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@php
		$c=0;
		@endphp
		@foreach($faqs as $faq)
		@php
		$c++;
		@endphp
		<tr>
			<td>{{$c}}</td>
			<td>{{$faq->titulo}}</td>
			<td>
				@isset($faq->topico->topico)
				{{$faq->topico->topico}}
				@else
				Sin categoria
				@endisset
			</td>
			<td class="d-flex">
				<a href="/cms/faq/{{$faq->id}}/edit" class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
				<form action="/cms/faq/{{$faq->id}}" method="POST">
					@method('delete')
					@csrf
					<button type="submit" class="btn btn-sm btn-outline-danger recurso_eliminar">Eliminar</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<script>
	window.onload = function() {
		$('#table1').DataTable({
			//para usar los botones   
			responsive: "true",
			pageLength: 50,
			"columnDefs": [{
				"width": "17%",
				"targets": 4
			}]
		});
	}
</script>
@endsection