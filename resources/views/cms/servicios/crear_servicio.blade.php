@extends('cms')


@section('content')
<section>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Servicios</h1>
    <div class="btn-group mr-2">
      <a href="/cms/servicios/tecnicos" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>


  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif
    <form action="/cms/guardar/servicio" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Titulo</h5>
          <input class="form-control" id="input-title" type="text" name="titulo_servicio" value="" placeholder="Titulo" maxlength="191">
        </div>
        <div class="col-6 mb-4">
          <h5>Categoría</h5>
          <select name="categoria_servicio" id="servicio-categoria" class="form-control form-control">
            <option value="">Seleccionar Categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 mb-4">
          <h5>Descripción</h5>
          <textarea class="ckeditor" id="input_descripcion" name="descripcion_servicio"></textarea>
          <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
        </div>
        <div class="col-12 mb-4">
          <h5 style="display: block">Imagen</h5>
          <input type="file" id="file_input" name="imagen_servicio">
        </div>
        <div class="col-12 mb-4">
          <h5 style="display: block">Logo</h5>
          <input type="file" id="file_logo" name="logo_servicio">
        </div>
        <div class="col-12 mb-5">
          <a href="/cms/servicios/tecnicos" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="submit" id="submit_button" class="btn btn-success px-5" value="Crear Servicio">
        </div>
      </div>
    </form>
  </div>
</section>

<script type="text/javascript">
  let submit = document.getElementById('submit_button');
  let file = document.getElementById('file_input');
  let formulario = document.getElementById('form');
  let logo = document.getElementById('file_logo');
  let tituloServico = document.getElementById('input-title');
  let descripcionServicio = document.getElementById('input_descripcion');
  let categoriaServicio = document.getElementById('servicio-categoria');


  console.log(categoriaServicio.selectedIndex)

  //inputs



  document.addEventListener('DOMContentLoaded', () => {
    if (submit) {
      submit.addEventListener('click', (e) => {
        e.preventDefault();

        if (!validarServicio()) {
          return;
        }

        const archivo = file.files[0];


        if (logo) {
          const logoArchivo = logo.files[0];
          if (archivo.size > maximoBytes || logoArchivo.size > maximoBytes) {
            const alertSize = maximoBytes / 1000000;

            alert(`el tamaño máximo por archivo es ${alertSize} MB`);

            file.value = "";
            logo.value = "";
          } else {
            formulario.submit();
          }


        } else {
          if (archivo.size > maximoBytes) {
            const alertSize = maximoBytes / 1000000;

            alert(`el tamaño máximo por archivo es ${alertSize} MB`);

            file.value = "";
          } else {
            formulario.submit();
          }
        }
      });
    }
  });


  const validarServicio = () => {
    if (tituloServico.value <= 0) {
      alert('Debe agregar un titulo');
      return false;
    } else if(CKEDITOR.instances.input_descripcion.getData() == '') {
      alert('Debes agregar una descripción');
      return false;
    } else if (file.files.length <= 0) {
      alert('Debe cargar una imagen')
      return false

    } else if (logo.files.length <= 0) {
      alert('Debe Cargar un logo');
      return false
    } else if (categoriaServicio.selectedIndex === 0) {
      alert('Debe seleccionar una carategoria');
      return false
    } else {
      return true;
    }
  }
</script>
@endsection