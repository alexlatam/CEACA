@extends('perfil')


@section('head')
  <title>Ceaca | recursos</title>
@endsection

@section('content')
<div class="container section pb-0">
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
                <h6 class="title">
                    Recursos de membresia
                </h6>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-md-1">
                @foreach (auth()->user()->plan->resources as $recurso)
                <div class="row align-items-center text-nounderline">
                    <!-- <div class="col-12 col-md-3">
                        <img src="#" alt="{{ $recurso->titulo }}" class="img-fluid mb-3 mb-md-0">
                    </div> -->
                    <div class="col-12 col-md-9">
                        <h4>
                            {{ $recurso->titulo }}
                        </h4>
                        <a href="{{asset('recursos/' . $recurso->recurso)}}" target="_blank" class="btn btn-sm btn-outline-success mt-2">Ver en linea</a>
                        @if($recurso->recurso)
                            <a href="/download/recurso/{{$recurso->id}}" class="btn btn-sm btn-success px-5 mt-2">Descargar</a>
                        @endif
                        <button class="btn btn-sm btn-success px-5 mt-2 detalle_button" data-toggle="modal" data-target="#modalDetalles" id="{{$recurso->id}}">Detalle</button>
                    </div>
                </div>
                <hr class="my-4">
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDetalles" tabindex="-1" role="dialog" aria-labelledby="modalDetalles" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5> <strong id="mensaje_title"></strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h6 id="recurso_nombre">Nombre: </h6>
                    </div>
                    <hr>
                    <div class="form-group">
                        <h6><strong>Descripción</strong> </h6>
                        <div id="recurso_descripcion"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let detalleButtons = document.querySelectorAll('.detalle_button');


        if(detalleButtons)
        {
            detalleButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    getRecurso(e.target.id);
                });
            });
        }

        function getRecurso(id){
            axios.get(`/cms/obtener/recurso/${id}`)
                .then(response => {
                    editModal(response.data.titulo, response.data.descripcion)
                });
        }

        function editModal(nombre, descripcion){
            let nombreModal = document.getElementById('recurso_nombre');
            let descripcionModal = document.getElementById('recurso_descripcion');

            nombreModal.textContent = `Titutlo: ${nombre}`;
            descripcionModal.textContent = descripcion;
        }
    </script>

@endsection