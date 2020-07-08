@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Revista</h4>
</div>
<hr>
  <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <button class="revista-load-main btn btn-outline-success">Agregar Revista
    	<form action="" method="POST" enctype="multipart/form-data">
    		@csrf
    		<input class="input_revista" onchange="this.form.submit();" type="file" name="revista_file">
    	</form>
    </button>
  </div>
</section>
@endsection