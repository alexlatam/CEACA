@extends('cms')


@section('content')
<section>

  @if(session('message'))
  <div class="alert alert-danger" role="alert">
    {{session('message')}}
  </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Capacitaciones</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/capacitacion" class="btn btn-sm btn-outline-danger px-4 mr-3">Volver</a>
        <a href="/cms/crear/capacitacion" type="button" class="btn btn-sm btn-outline-success">Agregar Capacitación</a>
      </div>
    </div>
  </div>


  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>Titulo</th>
          <th>Descripción</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($capacitaciones as $capacitacion)
        <tr>
          <td>{{$capacitacion->id}}</td>
          <td>
            <img src="{{ asset('/capacitaciones/'. $capacitacion->imagen) }}" alt="" style="width: 40px; height: 40px;">
          </td>
          <td>{{$capacitacion->titulo}}</td>
          <td>
            @if(strlen($capacitacion->descripcion)>75)
            @php {{ $descripcion = substr($capacitacion->descripcion,0,75).'...'; }} @endphp
            @else
            @php {{ $descripcion=$capacitacion->descripcion; }} @endphp
            @endif
            @php {{ echo ($descripcion); }} @endphp
          </td>
          <td class="d-flex">
            <a href="/cms/editar/capacitacion/{{$capacitacion->id}}" class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
            <form action="/cms/eliminar/capacitacion/{{$capacitacion->id}}" method="POST">
              @csrf
              <button type="button" class="btn btn-sm btn-outline-danger cap_eliminar" data-toggle="modal" data-target="#EliminarUsuarios">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>


<!--Modal eliminar  -->

<div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea Eliminar esta capacitación?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal_eliminar_usuario_form" method="POST">
          @csrf
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger px-4" id="submitModalEliminar">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  //boton eliminar
  let eliminarButtons = document.querySelectorAll('.cap_eliminar');
  let formModal = document.getElementById('modal_eliminar_usuario_form')
  let submitEliminar = document.getElementById('submitModalEliminar');


  submitEliminar.addEventListener('click', () => {
    formModal.submit();
  });

  if (eliminarButtons) {
    eliminarButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();


        formPadre = e.target.parentNode;

        formModal.action = formPadre.action
      });
    });
  }
</script>
@endsection