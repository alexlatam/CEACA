<!-- publicidad -->
@if(isset($publicidad[0]))
<section>	
  <!--a href="{{$publicidad[0]->url}}" target="_blank"-->
    <img src="{{asset('/img/publicidad/' . $publicidad[0]->imagen)}}" alt="" width="100%" style="max-height:70vh;">

  <!--a-->
</section>
@endif