@extends('cms')


@section('content')
<section class="seccion-informacion-cms">
	<div class="container-fluid">
		<h2>Información</h2>
		<form action="">
			<div class="row">
				<div class="col-12 mb-4">
					<label>Telefono 1</label>
					<input class="form-control" type="text" name="telefono_uno" value="" placeholder="Telefono1">
				</div>
				<div class="col-12 mb-4">
					<label>Telefono 2</label>
					<input class="form-control"  type="text" name="telefono_dos" value="" placeholder="Telefono 2">
				</div>
				<div class="col-12 mb-4">
					<label>Email</label>
					<input class="form-control"  type="text" name="email" value="" placeholder="Email">
				</div>
				<div class="col-12 mb-4">
					<label>Twitter</label>
					<input class="form-control"  type="text" name="twitter" value="" placeholder="Twiter">
				</div>
				<div class="col-12 mb-4">
					<label>Facebook</label>
					<input class="form-control"  type="text" name="facebook" value="" placeholder="Facebook">
				</div>
				<div class="col-12 mb-4">
					<label>linkedin</label>
					<input class="form-control"  type="text" name="linkedin" value="" placeholder="linkedin">
				</div>
				<div class="col-12 mb-4">
					<label>Instagram</label>
					<input class="form-control"  type="text" name="instagram" value="" placeholder="Instagram">
				</div>
				<div class="col-12 mb-5">
					<input type="submit" class="btn btn-primary" name="">
				</div>
			</div>
			
		</form>
	</div>
</section>
@endsection