@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Servicios</h1>
  </div>


  <div class="">
      @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif

      <form action="/cms/actualizar/servicio/{{$servicio->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12 mb-4">
            <h5>Titulo</h5>
            <input class="form-control" type="text" name="titulo_servicio" value="{{$servicio->titulo}}" placeholder="Titulo" maxlength="191">
          </div>
          <div class="col-12 mb-4">
            <h5>Descripción</h5>
            <textarea class="form-control" name="descripcion_servicio">{{$servicio->descripcion}}</textarea>
          </div>
          <div class="col-12 mb-4">
            <h5>Cambiar Imagen</h5>
            <input type="file" name="imagen_servicio">
          </div>
          <div class="col-12 mb-4">
            <h5>Cambiar Logo</h5>
            <input type="file" name="logo_servicio">
          </div>
          <div class="col-12 mb-4">
            <h5>Categoría</h5>
            <select name="categoria_servicio" class="form-control form-control">
              <option>Seleccionar Categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}" <?php if($servicio->categoria->id == $categoria->id) echo 'selected'?> >{{$categoria->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 mb-5">
            <input type="submit" class="btn btn-success" value="Actualizar Servicio">
          </div>
        </div>
      </form>


  </div>
</section>

@endsection