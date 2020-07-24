@extends('cms')

@section('content')
<section>
  <div class="row mt-4">
  <div class="col-auto"><h4>Club CEACA</h4></div>
  </div>
  <hr>
  <div class="row justify-content-around">
      <a href="/cms/membresias" class="btn btn-outline-success px-5 py-1">Membresias del Club</a>
      <a href="/cms/recursos" class="btn btn-outline-success px-5 py-1">Recursos Descargables</a>
      <a href="/cms/miembros" class="btn btn-outline-success px-5 py-1">Miembros del Club</a>
  </div>
</section>
@endsection