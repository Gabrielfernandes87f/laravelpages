
@extends('layouts.main')
@section('title', 'welcome')

@section('content')
<link rel="stylesheet" href="/css/sign.css">



<div class="formulario">   
    <div class="container-fluid containar-general col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Seja bem vindo!</h1>
            <p class="col-lg-10 fs-4">você estar entrando em area particular. Nao compartilhe sua senha com ninguém. Se ainda nao tem uma conta, click no botão, "Ainda nao tem uma conta?".</p>
            </div>
            <div class="for-alt col-md-10 mx-auto col-lg-5">
            <form class="for-aqui p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <hr class="my-4">
                <a class="cadastrar" href="/criar-conta">Ainda nao tem uma conta?</a>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection
