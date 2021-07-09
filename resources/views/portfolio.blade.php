@extends('layouts.main')

@section('title', 'About')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>

<style>
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}

/* GLOBAL STYLES
--------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  color: #5a5a5a;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}

/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}

.carousel-item>img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}

.marketing h2 {
  font-weight: 400;
}

.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0;
  /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}
.paralax{
    background-color: rgb(135, 69, 69);
    background-image: url('/image/backgroud/code.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
}
</style>
    <div class="paralax">
        <div class="container-fluid">
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

            </div>
        </div>
    </div>
        
        
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
    </div>
   
    

@endsection