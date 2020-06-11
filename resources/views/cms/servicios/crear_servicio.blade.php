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
      <form action="/cms/guardar/servicio" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row col-md-6">
          <div class="col-12 mb-4">
            <h5>Titulo</h5>
            <input class="form-control" type="text" name="titulo_servicio" value="" placeholder="Titulo">
          </div>
          <div class="col-12 mb-4">
            <h5>Descripción</h5>
            <textarea class="form-control" name="descripcion_servicio"></textarea>
          </div>
          <div class="col-12 mb-4">
            <h5 style="display: block">Imagen</h5>
            <input type="file" name="imagen_servicio">
          </div>
          <div class="col-12 mb-4">
            <h5>Categoría</h5>
            <select name="categoria_servicio" class="form-control form-control">
              <option>Seleccionar Categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->name}}</option>
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