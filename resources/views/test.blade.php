@extends('layouts.main')
@section('title', 'menu')

@section('content')




<!-- @guest tudo que tiver aqui dentro nao so vai mostrar se nao tiver logado @endguest -->

@guest   
    


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
                <form method="POST" action="http://127.0.0.1:8000/login">
                 <input type="hidden" name="_token" value="PD1ThczdYyWWW6OGEHO9aL1H9pVo8rVrXlpn84Gj">
                    @csrf
                <div class="form-floating mb-3">
                <input type="email" class="form-control"id="email" name="email" required="required" autofocus="autofocus" placeholder="name@example.com">
                <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" name="password" required="required" autocomplete="current-password" placeholder="Password">
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

@endguest



@endsection