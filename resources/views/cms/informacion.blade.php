@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<h2 class="mt-3">Información General</h2>
		<hr>
		<form action="/cms/guardar/informacion" method="POST">
			@csrf
			<div class="row mt-3">
				<div class="col-md-6 mb-4">
					<label>Telefono Principal</label>
					<input class="form-control" type="text" name="telefono_uno" value="{{$telefono1->valor}}" placeholder="Telefono1">
				</div>
				<div class="col-md-6 mb-4">
					<label>Telefono 2</label>
					<input class="form-control"  type="text" name="telefono_dos" value="{{$telefono2->valor}}" placeholder="Telefono 2">
				</div>
				<div class="col-12 mb-4">
					<label>Emails</label>
					<textarea class="form-control" name="email" rows="3">{{$email->valor}}</textarea>
				</div>
				<div class="col-12 mb-4">
					<label>Dirección</label>
					<textarea class="form-control" name="direccion" rows="3">{{$direccion->valor}}</textarea>
				</div>
				<div class="col-12">
				<hr> 
				</div>
				<div class="col-12 mb-3">
				<h6><strong>Redes Sociales</strong> </h6>
				</div>
				
				
				<div class="col-md-6 mb-4">
					<label>Twitter</label>
					<input class="form-control"  type="text" name="twitter" value="{{$twitter->valor}}" placeholder="Twiter">
				</div>
				<div class="col-md-6 mb-4">
					<label>Facebook</label>
					<input class="form-control"  type="text" name="facebook" value="{{$facebook->valor}}" placeholder="Facebook">
				</div>
				<div class="col-md-6 mb-4">
					<label>linkedin</label>
					<input class="form-control"  type="text" name="linkedin" value="{{$linkedin->valor}}" placeholder="linkedin">
				</div>
				<div class="col-md-6 mb-4">
					<label>Instagram</label>
					<input class="form-control"  type="text" name="instagram" value="{{$instagram->valor}}" placeholder="Instagram">
				</div>
				<div class="col-12 mb-5">
					<input type="submit" class="btn btn-success px-5" value="Guardar informacion">
				</div>
			</div>
		</form>
	</div>
</section>


@endsection