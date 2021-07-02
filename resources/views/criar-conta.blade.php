@extends('layouts.main')

@section('title', 'welcome')

@section('content')

<form class="formularioPrincipal" action="/html/index.html" autocomplete="on" aria-required="true" method="POST">
    <label for="name">Nome:</label>
    <input type="name" id="name" class="name" autofocus
    required 
    placeholder="Digite seu nome completo"
    size="30"
    minlength="10"
    maxlength="50"
    pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"
    title="digite seu nome completo com minimo 10 letras"
    >
    <label for="contato">Contato:</label>
    <input type="numeric" id="contato" class="contato"
    required 
    placeholder="Seu numero com dd"
    size="8"
    minlength="9"
    maxlength="15"
    inputmode="numeric"
    pattern="[0-9]+$"
    title="apenas números"
    >   
    <label for="email">E-mail:</label>
    <input type="email" id="email" class="email"
    required 
    placeholder="Digite seu melhor e-mail"
    size="30"
    minlength="10"
    maxlength="30"
    >
    <label for="nova-senha">Criar senha:</label>
    <input type="password" id="nova-senha" class="nova-senha"
    required 
    placeholder="Digite sua senha"
    size="10"
    minlength="4"
    maxlength="8"
    >
    <label for="senha-repeat">senha:</label>
    <input type="password" id="senha-repeat" class="senha-repeat"
    required 
    placeholder="Digite novamente"
    size="11"
    minlength="4"
    maxlength="10"
    >
    <button class="submit" type="submit"
    
    >Enviar</button>


</form>   


@endsection