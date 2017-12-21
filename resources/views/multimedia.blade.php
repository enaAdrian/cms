<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multimedia</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/bootstrap3.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/footer-with-social-icons.css">
    <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/min/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.js"></script>
    <script src="/js/google-map-init.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/video.js"></script>
    {{Html::style('css/modal.css')}}
</head>
<body>

    <!-- Header -->
  <header>
    <div class="nav-container">
      <div class="row">
        <div class="col-md-12">

          <nav class="navbar navbar-default">
            <div class="container-fluid">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                  <img src="img/logo4.png" alt="Logo" >
                </a>
              </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route ('welcome')}}">Strona Główna</a></li>
                    <li><a href="">Multimedia</a></li>
                    <li><a href="{{route ('gallery') }}">Galeria</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div id="background-multi">
    <section id="media">
      <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Multimedia</h1>
        </div>
    </div>
    @foreach($medias as $media)
      <div class="media-input">
      <div class="row">
        <div class="col-md-3">
          <div class="media-img">
            <div class="circular"><img src="{{ asset('images/' . $media->image) }}" alt=""/>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="media-title" >
                    <p>{{$media->title}}<a href="{{$media->link}}" class="btn btn-primary" role="button">Zobacz</a></p>

        </div>
      </div>
    </div>
  </div>
    @endforeach
  </div>
  </section>
</div>
    <a name="kontakt"></a>
    @extends('partrials.footer')
</body>
</html>
