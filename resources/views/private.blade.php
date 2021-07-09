@extends('layouts.main')

@section('title', 'About')

@section('content')

<style>

    .paralax{
        background-color: rgb(135, 69, 69);
        background-image: url('/image/backgroud/code.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%;
    }
    .image-login{
        margin-top: 1em;
        margin-bottom:1em;
        width: 70%;

    }
    .display-4 {
        font-size: 17pt;
        text-align: center;
        margin-top: 1em;
    }
    .display-5 {
        width: 100%;
        font-size: 13pt;
        margin-left: 5em;
        text-align: center;
    }
  
    .for-alt{
        background-color: rgba(189, 188, 204, 0.809);
        height: 27em;
        border-radius: 1em;
        box-shadow: 5em 5em 3em 7em solid black;
       
    }
    form{
        margin-top: 1em
    }
    .formulario {
       
        width: 100%;
        height: 100%;
    }
    body{
        overflow: hidden;
         background-color: #0c73fa;
    }
</style>


<div class="formulario">
    <div class="container-fluid containar-general col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
            

            <img class="image-login" src="/image/img-login.png" alt="img-login" srcset="">
            </div>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
             @endif
            <div class="for-alt col-md-10 mx-auto col-lg-5">
                <h1 class="display-4 fw-bold lh-1 mb-3">Seja bem vindo!</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="email" value="{{ __('Email') }}">Email address</label>
                </div>
                <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" required autofocus placeholder="Password">
                <label for="password"value="{{ __('Password') }}">Password</label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button  for="POST" class="w-100 btn btn-lg btn-primary">
                        {{ __('entrar') }}
                    </button>

                </div>

                <label>
                    <input type="checkbox" value="remember-me"{{ __('Remember me') }}> Remember me
                </label>
                <hr class="my-4">
                <a class="cadastrar display-5" href="/register">Ainda nao tem uma conta?</a>
            </form>
            </div>
           
        </div>
    </div>
</div>


@endsection