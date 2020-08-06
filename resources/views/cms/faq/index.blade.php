@extends('cms')

@section('content')
<section>
	<div class="row mt-4 px-3">
			<h4>FAQs (Pregunta Frecuentes)</h4>
			<div class=" col-auto ml-auto">
				<a href="/cms/faq_" class="btn btn-sm btn-outline-danger px-4">Volver</a>
				<a href="/cms/faq/create" class="btn btn-sm btn-outline-success">Agregar FAQ</a>
			</div>
	</div>
	<hr>
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

</section>
	  <table class="table table-striped table-sm">
	    <thead>
	      <tr>
	    	<th>#</th>
          	<th>FAQ</th>
	        <th>Tópico</th>
	        <th>Acciones</th>
	      </tr>
	    </thead>
	    <tbody>
			@php
				$c=0;
			@endphp
			@foreach($faqs as $faq)
			@php
				$c++;
			@endphp
			<tr>
	    		<td>{{$c}}</td>
	    		<td>{{$faq->titulo}}</td>
	    		<td>
					@isset($faq->topico->topico)
					{{$faq->topico->topico}}
					@else
						Sin categoria
					@endisset
				</td>
	    		<td class="d-flex">
	    			<a href="/cms/faq/{{$faq->id}}/edit"class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
					<form action="/cms/faq/{{$faq->id}}" method="POST">
						@method('delete')
						@csrf
	    			  <button type="submit" class="btn btn-sm btn-outline-danger recurso_eliminar">Eliminar</button>
	    			</form>
	    		</td>
			</tr>
	    	@endforeach
	    </tbody>
	  </table>
{{-- 
	 <div class="modal fade" id="EliminarUsuarios" tabindex="-1" role="dialog" aria-labelledby="EliminarUsuarios" aria-hidden="true" >
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
	 </div> --}}

@endsection