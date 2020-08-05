@extends('layouts.sesion_user')


@section('title')
<title>Ceaca | Registro</title>
<style type="text/css">
    .navbar {
        background-color: #fff;
    }
</style>
{{-- recaptcha  --}}
<script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
@include('common.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if($actual != '')
                <div class="card-header">Registrarse con membresia {{$actual}}</div>
                @else
                <div class="card-header">{{ __('Registrarse') }}</div>
                @endif

                <div class="card-body">
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                    @endif
                    <form method="POST" id="registro_form" action="/user/registrar">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Membresia *') }}</label>

                            <div class="col-md-6">
                                <select name="membership" id="membresia" class="form-control">
                                    <option value="0">Seleccionar membresia</option>
                                    @foreach($membresias as $membresia)
                                    <option value="{{$membresia->id}}" <?php if (strtolower($membresia->title) == $actual) echo 'selected' ?>>{{$membresia->title}}</option>
                                    @endforeach
                                </select>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre *') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo *') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Pais *') }}</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais" value="{{ old('pais') }}" required autocomplete="pais">

                                @error('pais')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Empresa o Institución *') }}</label>

                            <div class="col-md-6">
                                <input id="empresa" type="text" class="form-control @error('empresa') is-invalid @enderror" name="empresa" value="{{ old('empresa') }}" required autocomplete="empresa">

                                @error('empresa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Planta / Instalación *') }}</label>

                            <div class="col-md-6">
                                <input id="planta" type="text" class="form-control @error('planta') is-invalid @enderror" name="planta" value="{{ old('planta') }}" required autocomplete="planta">

                                @error('planta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Cargo *') }}</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{ old('cargo') }}" required autocomplete="cargo">

                                @error('cargo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Tipos de calderas *') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="cargo" type="radio" checked class="form-check-input @error('cargo') is-invalid @enderror" name="tipo_caldera" value="calefacción" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        De calefacción
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="tipo_caldera" value="Pequeñas y medianas Pirotubulares" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Pequeñas y medianas Pirotubulares
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="tipo_caldera" value="Pequeñas y medianas Acuatubulares" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Pequeñas y medianas Acuatubulares
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="tipo_caldera" value="Grandes Acuatubulares" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Grandes Acuatubulares
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Su área de actividad *') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="" type="radio" checked class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Operación" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Operación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Mantenimiento" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Mantenimiento
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Reparación" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Reparación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Inspección" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Inspección
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Ingeniería" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Ingeniería
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Combustión" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Combustión
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Tratamiento de agua" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Tratamiento de agua
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Eficiencia" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Eficiencia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Análisis de falla - Confiabilidad" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Análisis de falla - Confiabilidad
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Suministros" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Suministros
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Profesor (a)" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Profesor (a)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Sector *') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Hoteles" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Hoteles
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Hospitales" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Hospitales*
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Farmacéutica" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Farmacéutica*
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Alimentos y bebidas" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Alimentos y bebidas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Ingeniería" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Ingeniería
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Azúcar y/o Alcohol" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Azúcar y/o Alcohol
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Pulpa & Papel" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Pulpa & Papel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Plásticos y Petroquímica" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Plásticos y Petroquímica
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Refinería de Petróleo" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Refinería de Petróleo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Termoeléctricas" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Termoeléctricas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Servicios" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Servicios
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Suministros y materiales" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Suministros y materiales
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Instituciones Reguladoras" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Instituciones Reguladoras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Univerisidades - Academia" autocomplete="cargo">
                                    <label class="form-check-label">
                                        Univerisidades - Academia
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Especialidad en particular *') }}</label>

                            <div class="col-md-6">
                                <input id="especialidad" type="text" class="form-control @error('cargo') is-invalid @enderror" name="especialidad" value="{{ old('cargo') }}" required autocomplete="cargo">

                                @error('cargo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password *')  }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password *')  }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group my-2">
                            <input id="aceptoTerminos" type="checkbox" onchange="terminos()" checked>
                            Acepto recibir las notificaciones relacionadas con el Club CEACA y la Revista Calderas…Guía del Usuario (en la Industria y Comercio): *
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                {{-- recaptcha --}}
                                <input type="hidden" name="action" value="validate_captcha">
                                <button id="registro_submit" class="btn btn-success px-5  g-recaptcha" data-sitekey="6LcnwLIZAAAAAKQiVWCAHH72PWf2-Dg-69YaV41e" data-callback='onSubmit' data-action='submit'>
                                    {{ __('Registrarse') }}
                                </button>
                            </div>

                            <hr>
                        </div>
                    </form>
                    <hr>
                    <div class="d-flex justify-content-center mt-3" style="position: relative; left: -5px">
                        <a href="/sesion" class="btn btn-outline-success px-5">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function terminos() {
        let checkboxterminos = document.getElementById("aceptoTerminos");
        let bottonSubmit = document.getElementById("registro_submit");
        if (checkboxterminos.checked) {
            bottonSubmit.removeAttribute("disabled");
        } else {
            bottonSubmit.setAttribute("disabled","");
        }
    }
</script>
{{-- recaptcha  --}}
<script type="text/javascript">
    var sector = document.getElementsByName('sector[]');

    console.log(sector);
    const validarCheckbox = (sectores) => {
        let contador = 0;
        sectores.forEach(sector => {
            if (sector.checked) {
                contador++
            }
        });
        return contador
    }

    function onSubmit(token) {
        // vars
        var membresia = document.getElementById('membresia');
        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var pais = document.getElementById('pais');
        var empresa = document.getElementById('empresa');
        var planta = document.getElementById('planta');
        var cargo = document.getElementById('cargo');

        var especialidad = document.getElementById('especialidad');

        let form = document.getElementById('registro_form');
        let password = document.getElementById('password');
        let confirmPass = document.getElementById('password-confirm');
        // e.preventDefault();

        if (membresia.selectedIndex === 0) {
            return alert('Debe seleccionar una membresia');
        }
        if (name.value == '') {
            return alert('Debes agregar tu nombre')
        }
        if (email.value == '') {
            return alert('Debes agregar tu email')
        }

        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if (!emailRegex.test(email.value)) {
            return alert("Verifique la dirección de email.");
        }
        if (pais.value == '') {
            return alert('Debes agregar tu país')
        }
        if (empresa.value == '') {
            return alert('Debes agregar tu empresa');
        }
        if (planta.value == '') {
            return alert('Debes agregar tu planta');
        }
        if (cargo.value == '') {
            return alert('Debes agregar tu cargo');
        }

        if (validarCheckbox(sector) === 0) {
            return alert('Debes escoger un sector');
        }
        if (especialidad.value == '') {
            return alert('Debes agregar tu especialidad');
        }

        if (password.value == '') {
            return alert('Debe agregar la contraseña');
        }
        if (confirmPass.value == '') {
            return alert('Debe repetir la contraseña');
        }

        if (password.value === confirmPass.value && password.value != '') {
            form.submit();
        } else {
            alert('Las contraseñas tienen que ser iguales');
            password.value = ''
            confirmPass.value = ''
        }


    }
</script>

@endsection