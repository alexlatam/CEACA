<style>
  .video_main {
    position: relative;
  }
  .cursor{
    cursor: pointer;
  }
  .reproducir_button {
    position: absolute;
    top: calc(50% - 40px);
    left: calc(50% - 40px);
    cursor: pointer;
  }
</style>
<!-- Video -->
@if(isset($videos[0]) && !empty($videos))
<section class="container-fluid">
  @foreach($videos as $video)
  <div class="row justify-content-center my-5 py-2 video_main">
    @if(isset($video->video))
    <video src="{{asset('video/' . $video->video)}}" onclick="pausar()" style="width: 100vw; height: 65vh;" id="video_Tag"></video>
    @endif
    <span class="reproducir_button" onclick="reproducir()" id="span_play">
      <svg xmlns="http://www.w3.org/2000/svg" height="80" viewBox="0 0 24 24" width="80">
        <path  d="M0 0h24v24H0z" fill="none" />
        <path fill="#fff" d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" /></svg>
    </span>
  </div>
  @endforeach
</section>
@endif
<script>
window.reproducir = function() {
    document.getElementById("video_Tag").play();
    document.getElementById("video_Tag").classList.add('cursor');
    document.getElementById("span_play").setAttribute("hidden", "hidden"); 
};

window.pausar = function() {
    document.getElementById("video_Tag").pause();
    document.getElementById("video_Tag").classList.remove('cursor');
    document.getElementById("span_play").removeAttribute("hidden", "hidden");
};

</script>