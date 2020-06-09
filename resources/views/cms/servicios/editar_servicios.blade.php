@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Servicios</h1>
  </div>


  <div class="">
      @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif
      <form action="/cms/actualizar/servicio/{{$servicio->id}}" method="POST">
        @csrf
        <div class="row">
          <div class="col-12 mb-4">
            <label>Titulo</label>
            <input class="form-control" type="text" name="titulo_servicio" value="{{$servicio->titulo}}" placeholder="Titulo">
          </div>
          <div class="col-12 mb-4">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion_servicio" value="{{$servicio->descripcion}}" placeholder="Descripción">
          </div>
          <div class="col-12 mb-4">
            <label>Imagen</label>
            <input class="form-control" type="text" name="imagen_servicio" value="{{$servicio->imagen}}" placeholder="Descripción">
          </div>
          <div class="col-12 mb-4">
            <label>Categoría</label>
            <select name="categoria_servicio" class="form-control form-control">
              <option>Seleccionar Categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}" <?php if($servicio->categoria->id == $categoria->id) echo 'selected'?> >{{$categoria->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 mb-5">
            <input type="submit" class="btn btn-primary" value="Crear">
          </div>
        </div>
      </form>
  </div>
</section>

@endsection