<!-- publicidad -->
@if(isset($videos[0]) && !empty($videos))
<section class="container-fluid">
  @foreach($videos as $video)
  	<div class="row justify-content-center my-5 py-2">
  	  @if(isset($video->video))
        @if(substr($video->video, 0, 4) === 'http')
  	       <iframe frameborder="0" src="{{$video->video}}" style="width: 100vw; height: 80vh;"></iframe>
        @else
           <video src="{{asset('video/' . $video->video)}}" controls style="width: 100vw; height: 80vh;"></video>
        @endif
  	  @endif
  	</div>
  @endforeach
</section>
@endif