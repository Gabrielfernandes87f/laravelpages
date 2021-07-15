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
                <form method="POST" action="http://127.0.0.1:8000/login" autocomplete="off">
                 <input type="hidden" name="_token" value="PD1ThczdYyWWW6OGEHO9aL1H9pVo8rVrXlpn84Gj">
                    @csrf
                <div class="form-floating mb-3">
                <input type="email" class="form-control"id="email" name="email" required="required" autofocus="autofocus" placeholder="name@example.com">
                <label for="email">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" name="password" required="required" autocomplete="off" placeholder="Password">
                <label for="password">Password</label>
                </div>
                
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button type="submit" class="w-100 btn  btn-primary">Entrar</button>
                </div>
                
                <label for="remember_me">
                    <input type="checkbox" value="remember-me" id="remember_me" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <hr class="my-4">
                
                
            </form>
            <a class="cadastrar display-5" href="/register">Ainda nao tem uma conta?</a>
            </div>
           
        </div>
    </div>
</div>

<!--<input class="form-control" id="profile_photo_path" type="file" name="profile_photo_path" required="required">
<label for="profile_photo_path"></label>
-->
@endsection