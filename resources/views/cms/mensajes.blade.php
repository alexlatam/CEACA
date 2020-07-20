@extends('cms')

@section('content')
<section>
	<div class="row mt-4">
		<h4>Mensajes de contacto</h4>
	</div>
	<hr>
	@if(session('message'))
	<div class="alert alert-success" role="alert">
		{{session('message')}}
	</div>
	@endif


</section>
<table class="table table-hover" id="table1">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Mensaje</th>
			<th>Ver</th>
		</tr>
	</thead>
	<tbody>
		@foreach($mensajes as $mensaje)
		<tr>
			<td>{{$mensaje->id}}</td>
			<td>{{$mensaje->name}}</td>
			<td>{{$mensaje->email}}</td>
			<td>
				@php {{ $comentario = substr($mensaje->message,0,120); }} @endphp
				{{$comentario.'[...]'}}
			</td>
			<td>
				<a href="#" class="btn btn-sm btn-success mensaje px-4" data-toggle="modal" data-target="#modalMensje">Ver</a>
				<a href="/cms/mensajes/delete/{{$mensaje->id}}" class="btn btn-sm btn-outline-danger">Eliminar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<div class="modal fade" id="modalMensje" tabindex="-1" role="dialog" aria-labelledby="modalMensje" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5> <strong id="mensaje_title"></strong></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<h6 id="mensaje_email">Correo: </h6>
				</div>
				<hr>
				<div class="form-group">
					<h6><strong>Mensaje</strong> </h6>
					<div id="mensaje_content"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	let mensajesButton = document.querySelectorAll('.mensaje')

	let title = document.getElementById('mensaje_title')
	let email = document.getElementById('mensaje_email')
	let content = document.getElementById('mensaje_content')
	if (mensajesButton) {
		mensajesButton.forEach(mensaje => {
			mensaje.addEventListener('click', (e) => {
				let nombre = e.target.parentNode.parentNode.children[1]
				let correo = e.target.parentNode.parentNode.children[2]
				let mensaje = e.target.parentNode.parentNode.children[3]


				title.textContent = nombre.textContent
				email.textContent = `Correo: ${correo.textContent}`
				content.textContent = mensaje.textContent

			});
		});
	}
</script>
<script>
	window.onload = function() {
		$('#table1').DataTable({
			//para usar los botones   
			responsive: "true",
			pageLength: 50,
		});
	}
</script>
@endsection