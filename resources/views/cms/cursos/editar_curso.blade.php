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
      <form action="/cms/actualizar/curso/{{$curso->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12 mb-4">
            <label>Titulo</label>
            <input class="form-control" type="text" name="titulo_curso" value="{{$curso->titulo}}" placeholder="Titulo">
          </div>
          <div class="col-12 mb-4">
            <label>Descripción</label>
            <textarea class="form-control" name="descripcion_curso">{{$curso->descripcion}}</textarea>
          </div>
          <div class="col-12 mb-4">
            <label>Duración</label>
            <input class="form-control" type="number" name="duracion_curso" value="{{$curso->duracion}}" placeholder="Duracion">
          </div>
          <div class="col-12 mb-4">
            <label>Fecha de inicio</label>
            <input class="form-control" type="date" name="fecha_curso" value="{{$curso->fecha_inicio}}" placeholder="Fecha de inicio">
          </div>
          <div class="col-12 mb-4">
            <label>instructor</label>
            <input class="form-control" type="text" name="instructor_curso" value="{{$curso->instructor}}" placeholder="Instructor">
          </div>

          <div class="col-12 mb-4">
            <label style="display: block">Imagen</label>
            <input type="file" name="imagen_curso">
          </div>

          <div class="col-12 mb-4">
            <label>Categoria Curso</label>
            <select name="categoria_curso" class="form-control form-control">
              @foreach($categorias as $categoria)
              <option value="{{$categoria->id}}" <?php if($curso->categoria->id == $categoria->id) echo 'selected'?> >{{$categoria->titulo}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 mb-5">
            <input type="submit" class="btn btn-primary" value="Actualizar">
          </div>
        </div>
      </form>
  </div>
</section>

@endsection