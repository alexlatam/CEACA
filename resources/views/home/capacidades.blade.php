<!-- FEATURES
    ================================================== -->
<section class="section bg-light" id="about">
    <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
    <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
</section>
<section class="section">
    <div class="line line-top"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <h2 class="text-center mb-4">
                    MEMBRESÍAS CLUB CEACA
                </h2>
                <p class="text-center text-muted mb-5">
                Te permitirá obtener los mejores beneficios con acceso a contenido de primera y a la vez ser parte de una comunidad digital productiva y especializada. Selecciona la que más te convenga y disfruta de cada una de sus ventajas. 
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="text-center mb-5 mb-md-0">
                    <div class="text-primary mb-4">
                        <span class="icon icon-businessman icon-2x"></span>
                    </div>
                    <h4 class="mb-3">
                    Mejor relación precio beneficio
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center mb-5 mb-md-0">
                    <div class="text-primary mb-4">
                        <span class="icon icon-shield icon-2x"></span>
                    </div>
                    <h4 class="mb-3">
                    Acceso al mejor contenido
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="text-primary mb-4">
                        <span class="icon icon-clock icon-2x"></span>
                    </div>
                    <h4 class="mb-3">
                    Asesorías continuas
                    </h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center py-4">
            <a class="btn btn-outline-success px-5" href="/download/membresias" onclick="descargarMembresias()">Descargar Membresias del club ceaca</a>
        </div>
    </div>
</section>

<script>
    function descargarMembresias() {
        const toast = swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 10000
        });
        toast({
            type: 'success',
            title: '¡Ya se esta descargando! \n \n Recuerda que puedes consultarnos cualquier inquietud que tengas.',
        });
    }
</script>