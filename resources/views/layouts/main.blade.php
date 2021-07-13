<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/icon/iconweb.png" />
        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css.main.css">
        <link rel="stylesheet" href="/css/general.css">
 
    </head>
    
    <body>
      

      <nav class="header navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
          <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="bg-nav navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/github">Github</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/private">Private</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/portfolio">Portfolio</a>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                  <li><a class="dropdown-item " href="/dashboard">Entrar</a></li>
                  <li><a class="dropdown-item" href="/Register">Criar conta</a></li>
                  <li><a class="dropdown-item" onclick="event.preventDefault();this.closest('form').submit();">Sair</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      
      <main class="container-main">
          <div class="row">
            @yield('content')
            
          </div>

          
          
        </main>

        <footer class="fixed-bottom">
          <p class="copi">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
        </footer>
        
        <script src="/js/bundle.min.js"></script>
        <script src="/js/toggle.js"></script>
      </body>
      </html>


    