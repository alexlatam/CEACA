<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--script-- src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></!--script-->
<script src="{{asset('vendor/flickity/dist/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/flickity-fade/flickity-fade.js')}}"></script>
<script src="{{asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/waypoints/lib/shortcuts/inview.min.js')}}"></script>
<!--script-- src="{{asset('vendor/jquery-parallax.js/parallax.min.js')}}"></!--script-->
<!--script-- src="{{asset('vendor/fullpage.js/vendors/scrolloverflow.min.js')}}"></!--script-->
<!--script-- src="{{asset('vendor/fullpage.js/dist/fullpage.min.js')}}"></script-->
<script src="{{asset('vendor/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('js/theme.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript">

    //agregar id de la revista a descargar

    const botonesDescargar = document.querySelectorAll('.descargar_button')
    let revistaId = document.getElementById('revista_id')

    if(botonesDescargar) {
        botonesDescargar.forEach(boton => {
            boton.addEventListener('click', e => {
                revistaId.value = e.target.id
            })
        })
    }
</script>