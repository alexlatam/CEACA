@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Curso</h1>
  </div>


  <div class="">
      @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
      @endif
      <form action="/cms/guardar/curso" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12 mb-4">
            <label>Titulo</label>
            <input class="form-control" type="text" name="titulo_curso" value="" placeholder="Titulo">
          </div>
          <div class="col-12 mb-4">
            <label>Descripción</label>
            <textarea class="form-control" name="descripcion_curso"></textarea>
          </div>
          <div class="col-12 mb-4">
            <label>Duración</label>
            <input class="form-control" type="number" name="duracion_curso" value="" placeholder="Duracion">
          </div>
          <div class="col-12 mb-4">
            <label>Fecha de inicio</label>
            <input class="form-control" type="date" name="fecha_curso" value="" placeholder="Fecha de inicio">
          </div>
          <div class="col-12 mb-4">
            <label>instructor</label>
            <input class="form-control" type="text" name="instructor_curso" value="" placeholder="Instructor">
          </div>

          <div class="col-12 mb-4">
            <label style="display: block">Imagen</label>
            <input type="file" name="imagen_curso">
          </div>

          <div class="col-12 mb-4">
            <label>Categoría</label>
            <select name="categoria_curso" class="form-control form-control">
              <option>Seleccionar Categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 mb-5">
            <input type="submit" class="btn btn-primary" value="Crear Curso">
          </div>
        </div>
      </form>
  </div>
</section>

@endsection