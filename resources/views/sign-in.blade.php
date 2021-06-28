
@extends('layouts.main')
@section('title', 'welcome')

@section('content')
<link rel="stylesheet" href="/css/sign.css">

   <form action="POST" autocomplete="off" class="boxAll">
            <div class="containermain">
                <img class="admin" src="/svg/user.svg" alt="adm" srcset="">
                <div class="subContainer" >
                    <a class="sig" href="#">Criar conta</a>
                    <p class="accounts">Ainda nao tem uma conta?</p>
                    
                </div>

            </div>
                <div class="for1">
                    <div class="formulario1">
                        <img src="/svg/user.svg" alt="" srcset="">
                        <input type="nome" autocomplete="off" required placeholder="username">
                    </div>

                    <div class="formulario2">
                        <img class="svgPassword" src="/svg/password.svg" alt="" srcset="">
                        <input type="password" autocomplete="off" required placeholder="password">
                    </div>
                    <div class="textos">
                        <input class="inputcheck" type="checkbox" name="remanber" id="active">
                        <label  class="check" for="checbox">remenber me</label>
                        <a class="forgot1" href="#">forgot password?</a>
                    </div>
        
                <input  class="submits" type="submit" value="login">

</form>

@endsection