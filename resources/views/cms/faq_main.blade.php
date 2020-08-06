@extends('cms')

@section('content')
<section>
  <div class="row mt-4">
  <div class="col-auto"><h4>FAQs (Preguntas Frecuentes)</h4></div>
  </div>
  <hr>
  <div class="container">
    <div class="jumbotron mt-2">
      <h1>Crea Tópicos</h1>
      <p class="lead">Un tópico es una categoria que representa un conjunto de preguntas frecuentes. Por ejemplo: El topico "Membresia" agrupa todos las FAQs (Preguntas frecuentes) asociadas a las membresias. </p>
      <a class="btn btn-lg btn-outline-success" href="/cms/faq_topic" role="button">Tópicos principales &raquo;</a>
    </div>
  </div>
  <div class="container">
    <div class="jumbotron mt-2">
      <h1>Crear FAQs (Preguntas frecuentes)</h1>
      <p class="lead">Las preguntas frecuentes son las dudas con las que se enfrenta un visitante de la página.</p>
      <a class="btn btn-lg btn-outline-success" href="/cms/faq" role="button">FAQs &raquo;</a>
    </div>
  </div>
</section>
@endsection