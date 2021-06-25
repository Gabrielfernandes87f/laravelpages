<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
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
            <div class="text-center">
                <div class="modal-dialog modal-fullscreen-sm-down">
                    <div class="form-signin">
                        <form class="si" >
                            <?xml  version="1.0" encoding="iso-8859-1"?>
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

                            <svg class="mb-4" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="72" height="57" viewBox="0 0 25.452 25.452" style="enable-background:new 0 0 25.452 25.452;"
                                xml:space="preserve">
                                <g>
                                    <path d="M24.301,23.281l-0.721-4.043c-0.192-1.09-1.192-2.121-2.275-2.354l-3.702-0.777l-0.76-1.559
                                        c-0.04-0.082-0.109-0.142-0.188-0.188c0.665-0.855,1.197-1.87,1.581-2.89c0.663-0.24,1.33-0.832,1.521-1.6
                                        c0.258-1.023-0.013-1.937-0.646-2.33V6.076C19.11,2.555,16.424,0,12.726,0C9.026,0,6.342,2.555,6.342,6.076v1.465
                                        C5.708,7.934,5.437,8.848,5.693,9.869c0.193,0.772,0.865,1.367,1.53,1.604c0.378,1.021,0.906,2.033,1.568,2.892
                                        c-0.075,0.045-0.142,0.102-0.181,0.182l-0.76,1.557l-3.703,0.779c-1.083,0.23-2.083,1.262-2.276,2.352l-0.72,4.043
                                        c-0.102,0.57,0.034,1.113,0.382,1.529c0.348,0.416,0.858,0.646,1.438,0.646h19.506c0.58,0,1.091-0.229,1.438-0.646
                                        C24.268,24.395,24.402,23.852,24.301,23.281z M23.229,24.232c-0.174,0.207-0.438,0.322-0.749,0.322h-3.757v-2.17
                                        c0-0.248-0.202-0.451-0.45-0.451s-0.449,0.203-0.449,0.451v2.17H7.631v-2.17c0-0.248-0.202-0.451-0.45-0.451
                                        s-0.45,0.203-0.45,0.451v2.17H2.975c-0.309,0-0.575-0.115-0.749-0.322s-0.24-0.488-0.186-0.793l0.72-4.043
                                        c0.13-0.729,0.852-1.476,1.576-1.629l3.447-0.728c0.019,0.017,0.033,0.035,0.055,0.049l3.737,2.162
                                        c0.069,0.041,0.147,0.062,0.226,0.062c0.044,0,0.088-0.006,0.131-0.021c0.119-0.034,0.218-0.121,0.273-0.231l0.522-1.07l0.522,1.07
                                        c0.055,0.11,0.153,0.197,0.272,0.231c0.043,0.015,0.087,0.021,0.131,0.021c0.079,0,0.156-0.021,0.227-0.062l3.737-2.162
                                        c0.021-0.014,0.035-0.032,0.055-0.049l3.447,0.728c0.726,0.153,1.445,0.897,1.575,1.629l0.721,4.043
                                        C23.47,23.744,23.403,24.025,23.229,24.232z M8.97,15.871l0.24-0.49l0.559,0.322l0.583,0.338l0.583,0.336l1.232,0.713l-0.558,1.143
                                        L9.08,16.768l-0.428-0.246l0.067-0.137L8.97,15.871z M16.485,15.871l0.25,0.514l0.067,0.137l-0.428,0.246l-2.528,1.465
                                        l-0.558-1.143l1.232-0.713l0.583-0.336l0.583-0.338l0.56-0.322L16.485,15.871z M7.916,10.664C7.562,10.74,6.749,10.295,6.586,9.65
                                        c-0.165-0.656-0.008-1.271,0.35-1.371C7.042,8.248,7.152,8.271,7.263,8.33V6.08c0-3.182,2.446-5.154,5.464-5.154
                                        c3.02,0,5.465,1.973,5.465,5.154v2.252c0.109-0.061,0.221-0.084,0.326-0.053c0.356,0.1,0.516,0.715,0.351,1.371
                                        c-0.16,0.641-0.97,1.082-1.32,1.014c-0.553,1.682-1.75,3.912-3.483,4.713c-0.416,0.191-0.861,0.305-1.336,0.305
                                        c-0.482,0-0.931-0.111-1.349-0.303C9.646,14.587,8.471,12.386,7.916,10.664z"/>
                                </g>
                            </svg>

                            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                        
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        
                            <div class="checkbox mb-3">
                                <label>
                                <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="modal-fullscreen-sm-down">Extra large modal</button>
            </div>
        

        
        </main>

        <footer class="fixed-bottom">
                <p class="copi">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p>
        </footer>
        <script src="/js/javascript.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>




