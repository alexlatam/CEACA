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
					@if(substr($publicidad->imagen, 0, 4) === 'http')
                        <img src="{{ $publicidad->imagen }}" class="publicidades_card-img" alt="">
                    @elseif($publicidad->imagen)
                         <img src="{{ asset('publicidades_imagen/'. $publicidad->imagen) }}" class="publicidades_card-img" alt="">
                    @endif


					<div class="publicidades_card-body">
						<form action="/cms/actualizar/imagen/publicidad/{{$publicidad->id}}" method="POST" class="mb-3" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<h5>Cambiar Imagen</h5>
								<input type="file" name="publicidad_imagen">
							</div>
							<input type="submit" class="btn btn-primary btn-sm" value="Guardar Imagen">
						</form>

						
						<form action="/cms/actualizar/publicidad/{{$publicidad->id}}" method="POST">
							@csrf
							<div class="form-group">
								<h5>Titulo</h5>
								<input type="text" name="publicidad_titulo" value="{{$publicidad->titulo}}" placeholder="Titulo..." class="form-control" name="">
							</div>
							<div class="form-group">
								<h5>descripción</h5>
								<input type="text" name="publicidad_descripcion" value="{{$publicidad->descripcion}}" placeholder="Descripcion..." class="form-control" name="">
							</div>
							
							<div class="form-group">
								<h5>Tipo</h5>
								<select name="publicidad_tipo" class="form-control form-control">
								  <option value="1" <?php if($publicidad->tipo == 1) echo 'selected'?>>Principal</option>
								  <option value="2" <?php if($publicidad->tipo == 2) echo 'selected'?> >Secundaria</option>
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
					@if(substr($publicidad->imagen, 0, 4) === 'http')
                        <img src="{{ $publicidad->imagen }}" class="publicidades_card-img" alt="">
                    @elseif($publicidad->imagen)
                         <img src="{{ asset('publicidades_imagen/'. $publicidad->imagen) }}" class="publicidades_card-img" alt="">
                    @endif
					<div class="publicidades_card-body">

						<form action="/cms/actualizar/imagen/publicidad/{{$publicidad->id}}" class="mb-3" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<h5>Cambiar Imagen</h5>
								<input type="file" name="publicidad_imagen">
							</div>
							<input type="submit" class="btn btn-primary btn-sm" value="Guardar Imagen">
						</form>

						<form action="/cms/actualizar/publicidad/{{$publicidad->id}}" method="POST">
							@csrf
							<div class="form-group">
								<h5>Titulo</h5>
								<input type="text" name="publicidad_titulo" value="{{$publicidad->titulo}}" placeholder="Titulo..." class="form-control">
							</div>
							<div class="form-group">
								<h5>descripción</h5>
								<input type="text" name="publicidad_descripcion" value="{{$publicidad->descripcion}}" placeholder="Descripcion..." class="form-control">
							</div>
							<div class="form-group">
								<h5>Tipo</h5>
								<select name="publicidad_tipo" class="form-control form-control">
								  <option value="2" <?php if($publicidad->tipo == 2) echo 'selected'?> >Secundaria</option>
								  <option value="1" <?php if($publicidad->tipo == 1) echo 'selected'?>>Principal</option>
								  
								</select>
							</div>
							<input type="submit" class="btn btn-primary btn-sm" value="Guardar">
						</form>
					</div>
				</div>
			@endforeach
		</div>
	</section>
@endsection