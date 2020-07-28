<!-- publicidad -->
@if(isset($publicidad[0]) && !empty($publicidad))
<section class="my-5 py-2 container-fluid">
  <div class="row justify-content-center">
    @if(isset($publicidad[0]->url))
    <a class="col-12 mx-0 px-0" href="{{$publicidad[0]->url}}">
      <img src="{{asset('img/publicidad/' . $publicidad[0]->imagen)}}" style="max-height:70vh;width:100%;">
      <a>
        @else
        <img src="{{asset('img/publicidad/' . $publicidad[0]->imagen)}}" style="max-height:70vh;width:100%;">
        @endif
  </div>
</section>
@endif