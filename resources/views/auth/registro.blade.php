@extends('layouts.sesion_user')


@section('title')
    <title>Ceaca | Registro</title>
    <style type="text/css">
        .navbar{
            background-color: #fff;
        }
    </style>
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
                    <form method="POST" id="registro_form" action="/user/registrar">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Membresia *') }}</label>

                            <div class="col-md-6">
                                <select name="membership" id="membresia" class="form-control">
                                    <option value="0">Seleccionar membresia</option>
                                    @foreach($membresias as $membresia)
                                        <option value="{{$membresia->id}}" <?php if(strtolower($membresia->title) == $actual) echo 'selected'?>>{{$membresia->title}}</option>
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
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Pais *') }}</label>

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
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Empresa *') }}</label>

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
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Planta *') }}</label>

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
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Cargo *') }}</label>

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
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Tipos de calderas *') }}</label>

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
                                    <input id="cargo" type="radio" checked class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Operación" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Operación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Mantenimiento" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Mantenimiento
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Reparación" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Reparación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Inspección" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Inspección
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Ingeniería" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Ingeniería
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Combustión" required autocomplete="cargo">
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
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Eficiencia" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Eficiencia
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Análisis de falla - Confiabilidad" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Análisis de falla - Confiabilidad
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Suministros" required autocomplete="cargo">
                                    <label class="form-check-label">
                                        Suministros
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="radio" class="form-check-input @error('cargo') is-invalid @enderror" name="actividad" value="Profesor (a)" required autocomplete="cargo">
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
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Hoteles"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Hoteles
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Hospitales"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Hospitales*
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Farmacéutica"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Farmacéutica*
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Alimentos y bebidas"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Alimentos y bebidas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Ingeniería"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Ingeniería
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Azúcar y/o Alcohol"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Azúcar y/o Alcohol
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Pulpa & Papel"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Pulpa & Papel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Plásticos y Petroquímica"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Plásticos y Petroquímica
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Refinería de Petróleo"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Refinería de Petróleo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Termoeléctricas"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Termoeléctricas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Servicios"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Servicios
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Suministros y materiales"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Suministros y materiales
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Instituciones Reguladoras"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Instituciones Reguladoras
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="cargo" type="checkbox" class="form-check-input @error('cargo') is-invalid @enderror" name="sector[]" value="Univerisidades - Academia"  autocomplete="cargo">
                                    <label class="form-check-label">
                                        Univerisidades - Academia
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Especialidad en particular *') }}</label>

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="registro_submit" class="btn btn-success px-5 ">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let submitRegistro = document.getElementById('registro_submit');

    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let pais = document.getElementById('pais');
    let empresa = document.getElementById('empresa');
    let planta = document.getElementById('planta');
    let cargo = document.getElementById('cargo');
    let especialidad = document.getElementById('especialidad');

    let sector = document.getElementsByName('sector[]');


    console.log(sector);

    submitRegistro.addEventListener('click', (e) => {
        e.preventDefault();
        let form = document.getElementById('registro_form');
        let password = document.getElementById('password');
        let confirmPass = document.getElementById('password-confirm');
        let membresia = document.getElementById('membresia');

        if(validarCheckbox(sector) === 0){
            return alert('Debes escoger un sector');
        }

        if(name.value == ''){
            return alert('Debes agregar tu nombre')
        }else if (email.value == ''){
            return alert('Debes agregar tu email')
        }else if(pais.value == ''){
            return alert('Debes agregar tu país')
        }else if(empresa.value == ''){
            return alert('Debes agregar tu empresa');
        }else if(planta.value  == ''){
            return alert('Debes agregar tu planta');
        }else if(cargo.value == ''){
            return alert('Debes agregar tu cargo');
        }else if(especialidad.value == ''){
            return alert('Debes agregar tu especialidad');
        }else if(membresia.selectedIndex === 0){
            return alert('Debe seleccionar una membresia');
        }

        if(password.value === confirmPass.value && password.value != ''){
            form.submit();
        } else {
            alert('Las contraseñas tienen que ser iguales');
            password.value = ''
            confirmPass.value = ''
        }

    });

    const validarCheckbox = (sectores) => {
        let contador = 0;
        sectores.forEach(sector => {
            if(sector.checked){
                contador++
            }
        });

        return contador
    }

</script>
@endsection
