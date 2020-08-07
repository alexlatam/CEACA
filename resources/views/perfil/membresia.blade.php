@extends('perfil')


@section('head')
  <title>Ceaca | membresia</title>
@endsection

@section('content')

@if(session('message'))
  <div class="alert alert-success mt-5" role="alert">
    {{session('message')}}
  </div>
@endif

<div class="container section pb-0">
    <div class="row">
        <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
            <h6 class="title">
                Nuestras membresias
            </h6>
        </div>
        <div class="col-12 col-md-9 col-lg-10 order-md-1">
            @foreach ($planes as $plan)
            <div class="row align-items-center text-nounderline">
                <div class="col-12 col-md-3">
                    <img src="{{asset('img/membresias/'. $plan->imagen )}}" alt="{{ $plan->title }}" class="img-fluid mb-3 mb-md-0">
                </div>
                <div class="col-12 col-md-9">
                    <h4>
                        {{ $plan->title }}
                    </h4>

                    @if(auth()->user()->plan->title == $plan->title)
                        <a class="btn btn-sm btn-success px-5 mt-2" style="background: grey; border: none; cursor: initial; color: #fff">Actual</a>
                    @else
                        <a href="#" data-toggle="modal" id="{{$plan->id}}" data-target="#CambiarMembresia" class="btn btn-sm btn-success px-5 mt-2 membership_change">Actualizar membresia</a>
                    @endif

                </div>
            </div>
            <hr class="my-4">
            @endforeach
        </div>
    </div>
</div>

<div class="modal fade" id="CambiarMembresia" tabindex="-1" role="dialog" aria-labelledby="CambiarMembresia" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">¿Seguro que desea cambiar de membresia?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal_cambiar_membresia_form" action="/club/change/membership" method="POST">
          @csrf
          <input id="m_value" type="hidden" name="membership">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success px-4" id="submitModalMembresia">Solicitar Cambio</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  let membershipSubmit = document.querySelectorAll('.membership_change');
  console.log(membershipSubmit)


  document.getElementById('submitModalMembresia').addEventListener('click', () =>{
    let form = document.getElementById('modal_cambiar_membresia_form')

    form.submit();
  });

  if(membershipSubmit)
  {
    membershipSubmit.forEach(membership => {
      membership.addEventListener('click', (e) => {
        let membresia_id = e.target.id
        let input = document.getElementById('m_value');

        input.value = membresia_id;
        console.log(input)
        
      });
    });
  }
</script>

@endsection