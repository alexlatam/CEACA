@extends('layouts.sesion_user')

@section('title')
    <title>Iniciar sesion</title>
    @include('common.head')

     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .nav-item:hover {
        background-color: #4e8b3d;

      }

      .nav-item:hover .nav-link {
        color: #fff;

      }

      #sing_out:hover {
        background-color: inherit !important;
      }

    </style>

@endsection

@section('content')
@include('common.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesións') }}</div>
                @if(session('message'))
                  <div class="alert alert-success" role="alert">
                    {{session('message')}}
                  </div>
                @endif
                <div id="container-message">
                    
                </div>
                <div class="card-body">
                    <form method="POST" id="login_form" action="{{ route('user.login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="submit_login_sesion" class="btn btn-success px-4">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Has olvidado tu clave?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="/registro" class="btn btn-primary ">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let submit_login = document.getElementById('submit_login_sesion');
    let container_m = document.getElementById('container-message');

    submit_login.addEventListener('click', (e) => {
        e.preventDefault();

        let login_email = document.getElementById('email');
        let login_password = document.getElementById('password');
        

        if(login_password){
            login(login_email, login_password)
        }

        

        
    });


    function newPassword()
    {   
         let login_email = document.getElementById('email');
         let new_password = document.getElementById('new_password');
         let password_verify = document.getElementById('password_verify');


        axios.post('/user/login', {
            email: login_email.value,
            new_password: new_password.value,
            password_verify: password_verify.value,
        })
        .then( (response) =>{
            if(response.status == 200){
                location.href = "/perfil"

            } else if (response.status == 204 || response.status == 202){
                container_m.innerHTML= `
                    <div class="alert alert-danger" role="alert">
                        Las contraseñas no coinciden
                    </div>

                `

                new_password.value = ''

                password_verify.value = ''
            }
        })
        .catch((err) => {
            console.log(err);
        });
    }

    function login(login_email, login_password)
    {
        axios.post('/user/login', {
            email: login_email.value,
            password: login_password.value,
        })
        .then( (response) =>{
            statusOpcionLogin(response.status);
        })
        .catch((err) => {
            console.log(err);
        });
    }

    function makePassword()
    {
        let login_form = document.getElementById('login_form');
        let login_email = document.getElementById('email');

        container_m.innerHTML= `
            <div class="alert alert-success" role="alert">
                Usuario encontrado, por favor escriba una contraseña para continuar
            </div>

        `
        login_form.innerHTML =`
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="${login_email.value}" required autocomplete="email" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="new_password" type="password" class="form-control @error('password') is-invalid @enderror" name="new_password" autocomplete="current-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Verificar password') }}</label>

                <div class="col-md-6">
                    <input id="password_verify" type="password" class="form-control @error('password') is-invalid @enderror" name="password_verify" autocomplete="current-password">
                </div>
            </div>


            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" id="submit_newpass" class="btn btn-primary">
                        {{ __('Crear contraseña y ingresar') }}
                    </button>
                </div>
            </div>
        `

        let submit_newpass = document.getElementById('submit_newpass');

        if(submit_newpass)
        {
            submit_newpass.addEventListener('click', (e) => {
                e.preventDefault();

                newPassword();
                
            });
        }
    }



    function statusOpcionLogin(status)
    {
        if(status == 200){
            location.href = "/perfil"
        }else if (status == 202){
             makePassword();
        }else if (status == 204){
            container_m.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Correo o contraseña incorrectos
                </div>
            `
        }
    }




</script>

@endsection
