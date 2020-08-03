<!-- publicidad -->
@if(isset($publicidad[0]) && !empty($publicidad))
<section class="container-fluid">
  @foreach($publicidad as $p)
  	<div class="row justify-content-center my-5 py-2">
  	  @if(isset($p->url))
  	  <a class="col-12 mx-0 px-0" href="{{$p->url}}">
  	    <img src="{{asset('img/publicidad/' . $p->imagen)}}" style="max-height:70vh;width:100%;">
  	    <a>
  	      @else
  	      <img src="{{asset('img/publicidad/' . $p->imagen)}}" style="max-height:70vh;width:100%;">
  	      @endif
  	</div>
  @endforeach
</section>
@endif