@extends('cms')

@section('content')
<section>
<div class="row mt-4">
<h4>Club CEACA</h4>
</div>
<hr>
  <div class="d-flex justify-content-around flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <a href="/cms/membresias" class="btn btn-outline-success px-5">Membresias del Club</a>
    <a href="/cms/recursos" class="btn btn-outline-success px-5">Recursos descargables</a>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="/cms/miembros" class="btn btn-outline-success px-5">Miembros del Club</a>
      </div>
    </div>
  </div>
</section>
@endsection