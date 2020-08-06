@extends('cms')


@section('content')
<section>

  <div class="d-flex justify-content-around flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  	<a href="/cms/cursos/home" class="btn btn-sm btn-outline-success">Agregar Cursos</a>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
    	<a href="/cms/course/resource" class="btn btn-sm btn-outline-success">Crear Recursos de Curso</a>
      </div>
    </div>
  </div>
</section>
@endsection