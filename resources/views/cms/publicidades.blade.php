@extends('cms')


@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	  <h1 class="h2">Publicidades</h1>
	  <div class="btn-toolbar mb-2 mb-md-0">
	    <div class="btn-group mr-2">
	      <a href="/cms/crear/publicidad" type="button" class="btn btn-sm btn-outline-secondary">Agregar Publicidad</a>
	    </div>
	  </div>
	</div>
	<section class="publicidades">
		<div class="publicidades-tipo-1 mb-5">
			<h2>Principales</h2>
			@foreach($publicidades->where('tipo', 1) as $publicidad)
				<div class="publicidades_card-main mb-5">
					<img class="publicidades_card-img" src="{{$publicidad->imagen}}">
					<div class="publicidades_card-body">
						<form>
							<div class="form-group">
								<h5>Titulo</h5>
								<input type="text" name="publicidad_titulo" value="{{$publicidad->titulo}}" placeholder="Titulo..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>descripción</h5>
								<input type="text" name="publicidad_descripcion" value="{{$publicidad->descripción}}" placeholder="Descripcion..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>Imagen</h5>
								<input type="text" name="publicidad_imagen" value="{{$publicidad->imagen}}" placeholder="Imagen..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>Tipo</h5>
								<select name="publicidad_tipo" class="form-control form-control">
								  <option>Seleccionar Tipo de publicidad</option>
								</select>
							</div>
							<input type="submit" class="btn btn-primary btn-sm" value="Guardar" name="">
						</form>
					</div>
				</div>
			@endforeach
		</div>
		<div class="publicidades-tipo-2">
			<h2>Secundarias</h2>
			@foreach($publicidades->where('tipo', 2) as $publicidad)
				<div class="publicidades_card-main mb-5">
					<img class="publicidades_card-img" src="{{$publicidad->imagen}}">
					<div class="publicidades_card-body">
						<form>
							<div class="form-group">
								<h5>Titulo</h5>
								<input type="text" name="publicidad_titulo" value="{{$publicidad->titulo}}" placeholder="Titulo..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>descripción</h5>
								<input type="text" name="publicidad_descripcion" value="{{$publicidad->descripción}}" placeholder="Descripcion..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>Imagen</h5>
								<input type="text" name="publicidad_imagen" value="{{$publicidad->imagen}}" placeholder="Imagen..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>Tipo</h5>
								<select name="publicidad_tipo" class="form-control form-control">
								  <option>Seleccionar Tipo de publicidad</option>
								</select>
							</div>
							<input type="submit" class="btn btn-primary btn-sm" value="Guardar" name="">
						</form>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection