@extends('cms')


@section('content')
<section class="publicidades">
	<div class="publicidades-tipo-2">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h3 class="h2">Nosotros</h3>
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<a href="/cms/crear/nosotros" type="button" class="btn btn-sm btn-outline-success">Agregar Sección</a>
				</div>
			</div>
		</div>
		@foreach($informacion as $info)
		<div class="publicidades_card-main mb-5">
			@if(substr($info->imagen, 0, 4) === 'http')
			<img src="{{ $info->imagen }}" class="publicidades_card-img" alt="">
			@elseif($info->imagen)
			<img src="{{ asset('img/nosotros/'. $info->imagen) }}" class="publicidades_card-img" alt="">
			@endif
			<div class="publicidades_card-body">
				<form action="/cms/actualizar/nosotros/{{$info->id}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<h5>Titulo de la Sección</h5>
						<input type="text" name="nosotros_title" value="{{$info->atributo}}" placeholder="Titulo..." class="form-control">
					</div>
					<div class="form-group">
						<h5>SubTitulo de la Sección</h5>
						<input type="text" name="nosotros_subtitle" value="{{$info->valor2}}" placeholder="Titulo..." class="form-control">
					</div>
					<div class="form-group">
						<h5>Contenido</h5>
						<textarea class="form-control" name="nosotros_atributo">{{$info->valor}}</textarea>
					</div>
					<div class="form-group mt-3">
						<h5>Cambiar Imagen</h5>
						<input type="file" class="file-input" name="nosotros_imagen">
					</div>
					<input type="submit" class="btn btn-success btn-sm px-5" value="Actualizar Sección">
				</form>
			</div>
		</div>
		@endforeach
	</div>
</section>
<script type="text/javascript">
	let publicidad_inputs = document.querySelectorAll('.file-input');
	console.log(publicidad_inputs);

	publicidad_inputs.forEach(input => {
		input.onchange = function(e) {
			let padre = e.target.parentNode.parentNode.parentNode.parentNode
			let imgContainer = padre.children[0];


			let reader = new FileReader();
			reader.readAsDataURL(e.target.files[0]);

			reader.onload = function() {
				imgContainer.src = reader.result;
			}
		}
	});
</script>
@endsection