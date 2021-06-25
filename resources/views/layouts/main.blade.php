<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


    <link rel="stylesheet" href="/css/main.css">
    </head>
    

    <body>
        
        <header class="main">
           
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Login</a>
                      </li>
                    
                  </ul>
                  <form class="d-flex">
                  </form>
                </div>
              </div>
            </nav>
        </header>

        <footer class="bottom">

            <div class="contato">
                <h3 class="h3">Contato</h3>
                <p class="p">Gabrielfernandesfotografias@outlook.com</p>
                <p class="p">(83) 9 9672-4226</p>
                </div>
                <div class="eu"><img src="https://gabrielfernandesweb.online/wp-content/uploads/2021/06/eu-aqui-300x300.jpg" alt=""></div>
                <div class="acessos">
                <h3 class="h3">Acessos</h3>

                <nav class="nav-footer">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Minha Conta</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Store</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </nav>

                </div>
                <p></p>
                <p class="copi">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
                <p></p>
        </footer>

        <script src="/js/javascript.js"></script>
        <script src="/js/bootstrap.js"></script>
        
    </body>
</html>
