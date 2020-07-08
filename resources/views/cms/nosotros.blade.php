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
					<form action="/cms/actualizar/nosotros/{{$info->id}}" id="nosotros_form" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<h5 title="Al dar click sobre la publicidad se redireccionara a este enlace">Nombre Sección</h5>
							<input type="text" name="nosotros_title" value="{{$info->atributo}}" placeholder="Titulo..." class="form-control">
						</div>
						<textarea class="form-control" name="nosotros_atributo">{{$info->valor}}</textarea>
						<div class="form-group mt-3">
							<h5>Cambiar Imagen</h5>
							<input type="file" id="nosotros_file" class="file-input" name="nosotros_imagen">
						</div>
						<input type="submit" class="btn btn-primary btn-sm nosotros_submits" value="Actualizar Sección">
					</form>
				</div>
			</div>
		@endforeach
	</div>
</section>
<script type="text/javascript">
	let publicidad_inputs = document.querySelectorAll('.file-input');

	publicidad_inputs.forEach(input => {
		input.onchange = function (e){
			let padre = e.target.parentNode.parentNode.parentNode.parentNode
			let imgContainer = padre.children[0];


			let reader = new FileReader();
			reader.readAsDataURL(e.target.files[0]);

			reader.onload = function (){
				imgContainer.src = reader.result;
			}
		}
	});
</script>
	
<script type="text/javascript">
let nosotrosSubmits = document.querySelectorAll('.nosotros_submits');

nosotrosSubmits.forEach( submit => {
	submit.addEventListener('click', (e) => {
		e.preventDefault();
		
		const nosotrosForm = e.target.parentNode;
		const nosotrosFile = e.target.parentNode[3];
		

		if(nosotrosFile.files.length <= 0) return;

		const archivo = nosotrosFile.files[0];
		

		if(archivo.size > maximoBytes) {
			const alertSize = maximoBytes / 1000000;

			alert(`el tamaño máximo por imagen es ${alertSize} MB`);

			nosotrosFile.value = "";
		} else {
			nosotrosForm.submit();
		}
	});
});
</script>
@endsection