@extends('cms')


@section('content')
<section class="publicidades">
	<div class="publicidades-tipo-1 mb-5">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h3 class="h2">Imagenes Slider</h3>
			<div class="btn-toolbar mb-2 mb-md-0">
			  <div class="btn-group mr-2">
			    <a href="/cms/crear/slider/image" type="button" class="btn btn-sm btn-outline-success">Agregar Imagen a slider</a>
			  </div>
			</div>	
		</div>
		@foreach($sliders as $slider)
			<div class="publicidades_card-main mb-5">
				@if(substr($slider->imagen, 0, 4) === 'http')
                    <img src="{{ $slider->imagen }}" class="publicidades_card-img" alt="">
                @elseif($slider->imagen)
                     <img src="{{ asset('/img/banners/'. $slider->imagen) }}" class="publicidades_card-img" alt="">
                @endif
				<div class="publicidades_card-body">			
					<form action="/cms/actualizar/slider/image/{{$slider->id}}" id="sliders_form" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<h5>Titulo</h5>
							<input type="text" name="slider_titulo" value="{{$slider->titulo}}" placeholder="Titulo..." class="form-control">
						</div>
						<div class="form-group">
							<h5 title="Pequeña descripción que se mostrara en el Banner">Descripción</h5>
							<textarea class="form-control" name="slider_descripcion" >{{$slider->descripcion}}</textarea>
						</div>
						<!--div-- class="form-group">
							<h5 title="Al darle click sera redirigido a este enlace">Url de redirección</h5>
							<input type="text" name="slider_url" value="{{$slider->url}}" placeholder="Titulo..." class="form-control">
						</!--div-->
						<!--div-- class="form-group">
							<h5>Orden</h5>
							<input type="text" name="slider_orden" value="{{$slider->orden}}" placeholder="Titulo..." class="form-control">
						</!--div-->
						<div class="form-group">
							<h5>Cambiar Imagen</h5>
							<input type="file" id="sliders_file" class="file-input" name="slider_imagen">
						</div>
						<input type="submit" class="btn btn-primary px-5" id="sliders_submit" value="Actualizar Slider">
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
let slidersSubmit = document.getElementById('sliders_submit');
let slidersFile = document.getElementById('sliders_file');
let slidersForm = document.getElementById('sliders_form')

slidersSubmit.addEventListener('click', (e) => {
	e.preventDefault();

	if(slidersFile.files.length <= 0) return;

	const archivo = slidersFile.files[0];
	

	if(archivo.size > maximoBytes) {
		const alertSize = maximoBytes / 1000000;

		alert(`el tamaño máximo por imagen es ${alertSize} MB`);

		slidersFile.value = "";
	} else {
		slidersForm.submit();
	}
});
</script>


@endsection