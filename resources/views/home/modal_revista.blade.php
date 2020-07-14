<div class="modal fade modalRevista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suscribete y podrás descargar nuestra revista gratuitamente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModalRevista">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/user/createmagazine" method="POST">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Nombre Completo*" required id="name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email*" required id="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="pais" placeholder="Pais*" required id="pais">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="empresa" placeholder="Empresa*" required id="empresa">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="planta" placeholder="Planta*" required id="planta">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="cargo" placeholder="Cargo*" required id="cargo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" onclick="descargarRevista()">Suscribirse y Descargar la Revista</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function descargarRevista() {
        var name = document.getElementById("name").value.trim()
        var email = document.getElementById("email").value.trim()
        var pais = document.getElementById("pais").value.trim()
        var empresa = document.getElementById("empresa").value.trim()
        var planta = document.getElementById("planta").value.trim()
        var cargo = document.getElementById("cargo").value.trim()
        if (name != "" && email != "" && pais != "" && empresa != "" && planta != "" &&
            cargo != "") {
            document.getElementById("closeModalRevista").click();
            const toast = swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 10000
            });
            toast({
                type: 'success',
                title: '¡Gracias por suscribirte! \n \n Como muestra de agradecimiento te regalamos nuestra revista! \n \n ¡Disfrutala!',
            });
        } else {
            const toast = swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 10000
            });
            toast({
                type: 'info',
                title: 'Debes llenar todos los campos',
            });
        }

    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.0/dist/sweetalert2.all.min.js"></script>