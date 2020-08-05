@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		@if(session('message'))
		  <div class="alert alert-success my-4" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<h2 class="mt-3">Información General</h2>
		<hr>
		<form action="/cms/guardar/informacion" id="form" method="POST">
			@csrf
			<div class="row mt-3">
				<div class="col-md-6 mb-4">
					<label>Telefono Principal</label>
					<input class="form-control" type="text" id="tlf_principal" name="telefono_uno" value="{{$telefono1->valor}}" placeholder="Telefono1" maxlength="191">
				</div>
				<div class="col-md-6 mb-4">
					<label>Telefono 2</label>
					<input class="form-control"  type="text" id="tlfn_secundario" name="telefono_dos" value="{{$telefono2->valor}}" placeholder="Telefono 2" maxlength="191">
				</div>
				<div class="col-12 mb-4">
					<label>Emails</label>
					<textarea class="form-control" name="email" id="email" rows="3">{{$email->valor}}</textarea>
				</div>
				<div class="col-12 mb-4">
					<label>Dirección</label>
					<textarea class="form-control" name="direccion" id="direccion" rows="3">{{$direccion->valor}}</textarea>
				</div>
				<div class="col-12">
				<hr> 
				</div>
				<div class="col-12 mb-3">
				<h6><strong>Redes Sociales</strong> </h6>
				</div>
				
				
				<div class="col-md-6 mb-4">
					<label>Twitter</label>
					<input class="form-control"  type="text" id="twitter" name="twitter" value="{{$twitter->valor}}" placeholder="Twiter" maxlength="191">
				</div>
				<div class="col-md-6 mb-4">
					<label>Facebook</label>
					<input class="form-control"  type="text" id="facebook" name="facebook" value="{{$facebook->valor}}" placeholder="Facebook" maxlength="191">
				</div>
				<div class="col-md-6 mb-4">
					<label>linkedin</label>
					<input class="form-control"  type="text" id="linkedin" name="linkedin" value="{{$linkedin->valor}}" placeholder="linkedin" maxlength="191">
				</div>
				<div class="col-md-6 mb-4">
					<label>Instagram</label>
					<input class="form-control"  type="text" id="instagram" name="instagram" value="{{$instagram->valor}}" placeholder="Instagram" maxlength="191">
				</div>
				<div class="col-12 mb-5">
					<input type="submit" id="submit_button" class="btn btn-success px-5" value="Guardar informacion">
				</div>
			</div>
		</form>
	</div>
</section>

<script type="text/javascript">
	let tlf_uno = document.getElementById('tlf_principal'), 
		tlfn_dos = document.getElementById('tlfn_secundario'),
		email = document.getElementById('email'),
		direccion = document.getElementById('direccion'),
		twitter = document.getElementById('twitter'),
		facebook = document.getElementById('facebook'),
		linkedin = document.getElementById('linkedin'),
		instagram = document.getElementById('instagram');

	let submitButton = document.getElementById('submit_button');

	submitButton.addEventListener('click', (e) => {
		e.preventDefault();

		if(tlf_uno.value.trim() != '' && tlfn_dos.value.trim() != '' && email.value.trim() != '' && direccion.value.trim() != '' && twitter.value.trim() != '' && facebook.value.trim() != '' && linkedin.value.trim() != '' && instagram.value.trim() != ''){

			let formInfo = document.getElementById('form');
			
			formInfo.submit();
		
		}else {
			alert('Por favor rellene todos los campos');
		}
	});
</script>

@endsection