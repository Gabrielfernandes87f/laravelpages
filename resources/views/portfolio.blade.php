@extends('layouts.main')

@section('title', 'About')

@section('content')

    
    <link href="/css/carousel.css" rel="stylesheet">


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-banner" src="/image/_rsf7724.jpg" width="50px" alt="fotoPorDoSol" >

        <div class="container">
            <div class="carousel-caption text-center">
                <p><a class="btn btn-lg btn-primary text-center" href="#">Galeria</a></p>
            </div>
            
        </div>
        </div>
        <div class="carousel-item">
            <img class="img-banner" src="/image/GSf_0390.jpg" alt="fotoPorDoSol" >
        <div class="container">
            <div class="carousel-caption">
            
            <p><a class="btn btn-lg btn-primary text-center" href="#">Galeria</a></p>
            </div>
        </div>
        </div>
        <div class="carousel-item">
            <img class="img-banner" src="/image/GSf_2714.jpg" alt="fotoPorDoSol" >

        <div class="container">
            <div class="carousel-caption text-center">
            <p><a class="btn btn-lg btn-primary text-center" href="#">Galeriay</a></p>
            </div>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle"src="/image/eu.jpg"width="140" height="140"alt="eu" srcset="">

        <h2>Gabriel</h2>
        <p>contribuidor.</p>
        <p><a class="btn btn-secondary" href="#">Github &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle"src="/image/gsf_2304.jpg"width="140" height="140"alt="eu" srcset="">

        <h2>Ohona</h2>
        <p>Contribuidora</p>
        <p><a class="btn btn-secondary" href="#">github &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle"src="/image/dsc_0743.jpg"width="140" height="140"alt="eu" srcset="">

        <h2>Fernandes</h2>
        <p>contribuidor.</p>
        <p><a class="btn btn-secondary" href="#">github &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
        <h2 class="featurette-heading">Ludinha.</h2>
        <p class="lead">A modelo nao economizou beleza para fazer esse lindo ensaio</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/image/GSf_2714.jpg" alt="fotoPorDoSol" >
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Renally.</h2>
        <p class="lead">O fotógrafo Gabriel Fernandes fez lindas fotos da modelo Renally.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/image/GSf_0359.jpg" alt="fotoPorDoSol" >

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
        <h2 class="featurette-heading">Renally</h2>
        <p class="lead">A bailarina acordou cedinho eu partiu ensaio fotográfico</p>
        </div>
        <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="/image/GSf_0390.jpg" alt="fotoPorDoSol" >

        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    

@endsection