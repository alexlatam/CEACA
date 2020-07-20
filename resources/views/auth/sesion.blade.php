@extends('layouts.sesion_user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" id="login_form" action="{{ route('user.login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--div-- class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </!--div-->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="submit_login" class="btn btn-success px-4">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Has olvidado tu clave?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let submit_login = document.getElementById('submit_login');

    submit_login.addEventListener('click', (e) => {
        let login_email = document.getElementById('email');
        let login_password = document.getElementById('password');


        if(login_password){
            login(login_email, login_password)
        }

        e.preventDefault();

        
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
                console.log(response.data);
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
            if(response.status == 202){
                makePassword();
            }else {
                console.log(response.data);
            }
        })
        .catch((err) => {
            console.log(err);
        });
    }

    function makePassword()
    {
        let login_form = document.getElementById('login_form');

        login_form.innerHTML =`
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" id="submit_newpass" class="btn btn-primary">
                        {{ __('Crear contraseña y ingresar') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
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





</script>

@endsection
