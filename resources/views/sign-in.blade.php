
@extends('layouts.main')
@section('title', 'welcome')

@section('content')


<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>



@endsection


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
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                <label  for="password"value="{{ __('Password') }}">Password</label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button class="w-100 btn btn-lg btn-primary">
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


