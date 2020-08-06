@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
	<div class="row align-items-center">
			<h2 class="my-3">
				@isset($faq)
					Editar FAQ
				@else
					Crear FAQ
				@endisset
			</h2>
			<div class="col-auto ml-auto">
			<a href="/cms/faq" class="btn btn-sm btn-outline-success px-5">Volver</a>
			</div>
		</div>
		<hr>
		@if(session('message'))
		<div class="alert alert-success" role="alert">
			{{session('message')}}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-danger" role="alert">
			{{session('error')}}
		</div>
		@endif

		@isset($faq)
		<form action="/cms/faq/{{$faq->id}}" class="row" id="form_faq" method="POST" >
			@csrf
			@method('PUT')
		@else
		<form action="/cms/faq" class="row" id="form_faq" method="POST" >
			@csrf
		@endisset
			<div class="form-group col-12">
				<h5>Titulo</h5> 
				<input type="text" id="titulo" name="titulo" placeholder="Titulo..." class="form-control" maxlength="191" 
				@isset($faq)
					value="{{$faq->titulo}}"
				@endisset
				required>
			</div>
			<div class="form-group col-12">
				<div class="form-group">
					<h5>
						<label for="topicos">Tópicos</label>
					</h5>
				  <select class="form-control" name="topico" id="topicos" required>
					  <option value="0" disabled selected>Seleccione un tópico</option>
					  @foreach($topicos as $topico)
					  <option value ="{{$topico->id}}" 
						@isset($faq)
							@if ($faq->faq_topic_id == $topico->id)
								selected
							@endif
						@endisset
						>{{$topico->topico}}</option>
					@endforeach
				  </select>
				</div>
			</div>
			<div class="form-group col-12">
				<h5>Contenido</h5>
				<textarea class="form-control" id="contenido" name="contenido" required>@isset($faq){{$faq->cuerpo}}@endisset</textarea>
			</div>
			<div class="col-auto mt-3">
				<button type="submit" class="btn btn-success px-5 col-auto" id="seccion_submit">
					@isset($faq)
						Actualizar FAQ
					@else
						Crear FAQ
					@endisset
			</button>
			</div>
		</form>
	</div>
</section>

<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea crear este recurso sin un archivo?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
      	<button type="button" class="btn btn-success px-4" id="submitModalEliminar">Continuar</button>
      </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	//vars
</script> 

@endsection