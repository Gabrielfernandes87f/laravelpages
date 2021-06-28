<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/carousel.css">
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

        <main class="container">
          @yield('content')
            
          
        </main>

        <footer class="fixed-bottom">
                <p class="copi">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
        </footer>
        <script src="/js/javascript.js"></script>
        <script src="/js/bootstrap.js"></script>
        
    </body>
</html>
