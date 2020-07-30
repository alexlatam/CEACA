@extends('cms')

@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Encabezado</h1>
  </div>

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif
    <form action="/cms/guardar/encabezado" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Titulo</h5>
          <input class="form-control" id="input-title" type="text" name="titulo_encabezado" value="" placeholder="Titulo" maxlength="191">
        </div>
        <div class="col-12 mb-4">
          <h5>Descripción</h5>
          <textarea id="input-descripcion" class="form-control" name="descripcion_encabezado"></textarea>
        </div>
        <div class="col-6 mb-4">
          <h5 title="Sección de la página web donde será visible este encabezado">Sección de la página</h5>
          <select name="seccion_encabezado" id="servicio-categoria" class="form-control form-control">
            <option value="">Seleccionar Sección</option>
            <option value="servicio">Servicios</option>
            <option value="revista">Revista</option>
            <option value="capacitacion ceaca">Capacitacion Ceaca</option>
            <option value="capacitacion asme">Capacitacion ASME</option>
          </select>
        </div>
        <div class="col-12 mb-4">
          <h5 style="display: block">Imagen</h5>
          <input type="file" id="file_input" name="imagen_encabezado">
        </div>
        <div class="col-12 mb-5">
          <input type="submit" id="submit_button" class="btn btn-success px-5" value="Crear Encabezado">
        </div>
      </div>
    </form>
  </div>
</section>

<script type="text/javascript">
  let submit = document.getElementById('submit_button');
  let file = document.getElementById('file_input');
  let formulario = document.getElementById('form');
  let tituloServico = document.getElementById('input-title');
  let descripcionServicio = document.getElementById('input-descripcion');
  let categoriaServicio = document.getElementById('servicio-categoria');
  //inputs
  texts = document.querySelectorAll('.input-text');

  document.addEventListener('DOMContentLoaded', () => {
    if (submit) {
      submit.addEventListener('click', (e) => {
        e.preventDefault();

        if (!validarServicio()) {
          return;
        }

        formulario.submit();

      });
    }
  });

  const validarServicio = () => {
    if (categoriaServicio.selectedIndex === 0) {
      alert('Debe seleccionar una sección');
      return false
    } else {
      return true;
    }
  }
</script>
@endsection