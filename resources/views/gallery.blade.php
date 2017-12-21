<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dominik</title>
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
                    <li><a href="{{route ('multimedia')}}">Multimedia</a></li>
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
<div id="background">


  <div class="container">
    <div class="row">
      <div class="row">
          <div id="gallery">
          {{-- <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 1"><img src="../img/gal_1.jpg" class="thumbnail img-responsive"></a></div> --}}
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 2"><img src="../img/gal_2.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 3"><img src="../img/gal_3.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 4"><img src="../img/gal_4.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 5"><img src="../img/gal_5.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 6"><img src="../img/gal_6.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 7"><img src="../img/gal_7.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 8"><img src="../img/gal_8.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 9"><img src="../img/gal_9.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 10"><img src="../img/gal_10.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 11"><img src="../img/gal_11.jpg" class="thumbnail img-responsive"></a></div>
          <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="zdjęcie 12"><img src="../img/gal_12.jpg" class="thumbnail img-responsive"></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">

	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
<a name="kontakt"></a>
@extends('partrials.footer')
</body>
<script type="text/javascript">
$('.thumbnail').click(function(){
  $('.modal-body').empty();
  var title = $(this).parent('a').attr("title");
  $('.modal-title').html(title);
  $($(this).parents('div').html()).appendTo('.modal-body');
  $('#myModal').modal({show:true});
});
</script>
</html>
