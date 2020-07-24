@extends('cms')


@section('content')
<section class="px-0">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Miembros del club</h1>
    <a href="/cms/club" class="px-5 btn btn-outline-success col-auto ml-auto">Volver</a>
  </div>  
  <div class="container-fluid">
    @if(session('message'))
          <div class="alert alert-success my-3" role="alert">
            {{session('message')}}
          </div>
    @endif


    @if(session('error'))
          <div class="alert alert-danger my-3" role="alert">
            {{session('error')}}
          </div>
    @endif
    <div class="table-responsive" style="max-width:100%!important;">
      <table class="table table-hover" id="table1">
        <thead class="thead-light">
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Status</th>
            <th>País</th>
            <th>Empresa</th>
            <th>Planta</th>
            <th>Cargo</th>
            <th>Tipo caldera</th>
            <th>Actividad</th>
            <th>Especialidad</th>
            <th>membresia</th>
            <th>Sector</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->status}}</td>
            <td>{{$user->pais}}</td>
            <td>{{$user->empresa}}</td>
            <td>{{$user->planta}}</td>
            <td>{{$user->cargo}}</td>
            <td>{{$user->tipo_caldera}}</td>
            <td>{{$user->actividad}}</td>
            <td>{{$user->especialidad}}</td>
            <td>{{$user->plan->title}}</td>
            <td>{{$user->sector}}</td>
            <td class="d-flex">
              @if($user->status === 'activo')
              <form action="/club/user/pause/{{$user->id}}" method="POST">
                @csrf
                <input type="submit" value="Pausar" class="btn btn-sm btn-outline-success">
              </form>
              @else
              <form action="/club/user/active/{{$user->id}}" method="POST">
                @csrf
                <input type="submit" value="Activar" class="btn btn-sm btn-outline-success">
              </form>
              @endif
              <button type="button" id="{{ $user->id }}" class="btn btn-sm btn-outline-success ml-2 editar"  data-toggle="modal" data-target="#modalMembresia">Membresia</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

<div class="modal fade" id="modalMiembro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar miembro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="pais" placeholder="Pais">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="empresa" placeholder="Empresa">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="modalMembresia" tabindex="-1" role="dialog" aria-labelledby="modalMembresia" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Cambiar Membresia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="form_change_membership">
            @csrf
            <div class="form-group">
              <h5 id="form_user_name"></h5>
              <hr>
            <div>
              <h5>Tipo de membresia</h5>
              @foreach($membresias as $membresia)
                <div class="form-check">
                    <input id="radio-{{$membresia->id}}" type="radio" class="form-check-input member-radio @error('cargo') is-invalid @enderror" name="user_membership" value="{{$membresia->id}}"  autocomplete="cargo"
                    >
                    <label class="form-check-label">
                        {{$membresia->title}}
                    </label>
                </div>
              @endforeach
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success px-4" id="submitMembership">Actualizar membresia</button>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script type="text/javascript">
  let userEdits = document.querySelectorAll('.editar');
  let formUser = document.getElementById('form_change_membership');



  document.getElementById('submitMembership').addEventListener('click', () => {
    formUser.submit();
  });

  if(userEdits)
  {
    userEdits.forEach( userEdit => {
      userEdit.addEventListener('click', (e) => {
        formMembership(e.target.id);
      });
    });
  }


  function formMembership(id)
  {
    axios.get(`/user/${id}`)
      .then(response => {
        membershipModal(response.data);
      });
  }

  function membershipModal(user){
    let modalName = document.getElementById('form_user_name');
    let radioButtons = document.querySelectorAll('.member-radio');


    radioButtons.forEach(radio => {
      if(radio.id === `radio-${user.plan_id}`)
      {
        radio.setAttribute('checked', true);
      }
    });

    modalName.textContent = `Nombre: ${user.name} | Correo ${user.email}`;
    formUser.action = `/user/membership/update/${user.id}`
  }

</script>

<script>
  window.onload = function() {
  $('#table1').DataTable({
    language: {
      "lengthMenu": "Mostrar _MENU_ registros",
      "zeroRecords": "No se encontraron resultados",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar:",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "sProcessing": "Procesando...",
    },
    //para usar los botones   
    responsive: "true",
    pageLength: 50,
    dom: 'Bfrtilp',
    buttons: [{
        extend: 'excelHtml5',
        text: '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-info'
      },
    ]
  });
  }
</script>

@endsection