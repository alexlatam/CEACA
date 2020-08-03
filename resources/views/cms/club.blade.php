@extends('cms')


@section('content')
<section class="px-0">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Miembros del club</h1>
    <a href="/cms/club" class="px-5 btn btn-outline-success col-auto ml-auto">Volver</a>
  </div>
  @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
  @endif
  <div class="container-fluid px-0">

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
            <th>Sector</th>
            <th>Membresia</th>
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
            <td>{{$user->sector}}</td>
            <td>{{$user->plan->title}}</td>
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
              <button type="button" id="{{$user->id}}" class="btn btn-sm btn-outline-success ml-2 membresia_modal" data-toggle="modal" data-target="#modalMembresia">Membresia</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

<div class="modal fade" id="modalMembresia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tipo de membresia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-membresias-modal" method="POST">
          @csrf
          <div id="membresia_modal_content">
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="modalMembresiaSubmit" class="btn btn-success">Actualizar Membresia</button>
      </div>
    </div>
  </div>
</div>


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

<script type="text/javascript">
   let modalButton = document.querySelectorAll('.membresia_modal');
   let formModal = document.getElementById('form-membresias-modal');
   let containerModal = document.getElementById('membresia_modal_content');
   let modalSubmit = document.getElementById('modalMembresiaSubmit');


   modalSubmit.addEventListener('click', () => {
    formModal.submit();
   });  

   if(modalButton){
    modalButton.forEach(button => {
      button.addEventListener('click', (e) => {
        containerModal.innerHTML = '';
        getMemberhip(e.target.id)
      });
    });
   }


   function getMemberhip(id)
   {
    axios.get(`/club/user/membresia/${id}`)
      .then(response => {
        let user_id = response.data.user_id
        let membresia_id = response.data.membresia_id
        let membresias = response.data.membresias;

        renderMembership(user_id, membresia_id, membresias)

      });
   }



   function renderMembership(user_id, m_id, membresias){
      

      if(membresias.length > 0)
      {
        membresias.forEach(membresia => {

          let m_template = document.createElement('div')
          m_template.classList.add('form-check');

           m_template.innerHTML = `

                <input id="" type="radio" class="form-check-input" name="membership" value="${membresia.id}" required autocomplete="cargo">
                <label class="form-check-label">
                    ${membresia.title}
                </label>


          `

          if(membresia.id == m_id)
          {
            m_template.firstElementChild.setAttribute('checked', true);
          }

          containerModal.appendChild(m_template)

        })

        formModal.action = `/club/user/membership/${user_id}`;
      }
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