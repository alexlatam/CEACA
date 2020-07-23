@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Capacitación</h1>
    <div class="btn-group mr-2">
        <a href="/cms/capacitaciones" type="button" class="btn btn-sm btn-outline-success">Volver</a>
    </div>
  </div>


  <div class="">
      @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif



      <form action="/cms/actualizar/capacitacion/{{$capacitacion->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row col-md-6">
          <div class="col-12 mb-4">
            <h5>Titulo</h5>
            <input class="form-control" type="text" name="titulo_capacitacion" value="{{$capacitacion->titulo}}" placeholder="Titulo">
          </div>
          <div class="col-12 mb-4">
            <h5>Descripción</h5>
            <textarea class="form-control" name="descripcion_capacitacion">{{$capacitacion->descripcion}}</textarea>
          </div>
          <div class="col-12 mb-4">
            <h5>Cambiar Imagen</h5>
            <input type="file" name="imagen_capacitacion">
          </div>
          <div class="col-12 mb-4">
            <h5>Cambiar Logo</h5>
            <input type="file" name="logo_capacitacion">
          </div>
          <div class="col-12 mb-4">
            <h5>Categoría</h5>
            <select name="categoria_capacitacion" class="form-control form-control">
              <option>Seleccionar Categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}" <?php if($capacitacion->categoria->id == $categoria->id) echo 'selected'?> >{{$categoria->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 mb-5">
            <input type="submit" class="btn btn-primary" value="Actualizar Capacitación">
          </div>
        </div>
      </form>


  </div>
</section>

@endsection