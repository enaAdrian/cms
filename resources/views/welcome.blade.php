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
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/video.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	var maxLength = 300;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
</script>
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
                    <li><a href="#autor">Autor</a></li>
                    <li><a href="#aktual">Aktualności</a></li>
                    <li><a href="{{route('multimedia')}}">Multimedia</a></li>
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
    <div class="homepage-hero-module">
    <div class="video-container">
        <div class="title-container">
          <div name="klip">
            <div class="row">

                      <div class="col-md-10 col-md-offset-2">
                        <div class="block">
                          <h1 class="animated fadeInUp">Dominik Kozicki</h1>
                          <p class="animated fadeInUp">oficjalna strona artysty</p>
                        </div>
                      </div>
            </div>
          </div>
        </div>
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="video/source.mov" type="video/mp4" />Przeglądarka nie obługuje tego video. Sugerujemy aktualizację przeglądarki</video>
        <div class="poster hidden">
            <img src="/img/slider_bg_dominik.jpg" alt="">
        </div>
    </div>
</div>

    <!-- Wrapper -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <a name="autor"></a>
              <div class="section-title">
                <h2>O mnie</h2>
                <p><span style="color: #808080;">W 2006 r. pojawił się na scenie muzycznej Dominik Kozicki Dave jako jeden z wykonawc&oacute;w <a href="http://www.youtube.com/watch?v=2k-NcAfCGoc" target="_blank">studenckiej grupy perkusyjnej</a> Akademii Muzycznej w Poznaniu, na co dzień posiadającej w swoim repertuarze utwory <a href="http://www.youtube.com/watch?v=nmzyl8Fu4c8" target="_blank">klasyki perkusyjnej</a>. Będąc studentem III roku klasy perkusji, w 2008 r. zdobył I nagrodę ABSOLUTE w kategorii werbla i III nagrodę w kategorii DRUM SET (Jury w tej kategorii I nagrody nie przyznało) na VI Międzynarodowym Konkursie Perkusyjnym w Fermo we Włoszech. Zainteresowania muzyczne Dominika wykraczają poza uczelniane mury. W domowym studio tworzy projekty muzyki perkusyjnej, kt&oacute;re cechuje szeroka kolorystyka brzmieniowa, rytmika i zr&oacute;żnicowanie stylistyczne. Jest muzykiem poszukującym. Fascynują go r&oacute;żne style oraz zabawa z dźwiękiem. Inspiracje muzyczne czerpie z otaczającej natury i brzmienia instrument&oacute;w. To właśnie walory brzmieniowe instrumentu decydują o wyborze stylistyki w trakcie tworzenia nowego utworu. Muzyk jest wierny klawiszom. Pianino elektroniczne, syntezatory to kolejne pasje, kt&oacute;re rozwija &bdquo;po godzinach&rdquo; &ndash; najczęściej w nocy gdy zasady wsp&oacute;łżycia społecznego ograniczają możliwość grania na dynamicznych bębnach. Miłość do muzyki klawiszowej zrodziła się w dzieciństwie gdy Dominik odkrył taśmy z nagraniami nadanymi na przełomie lat 80 w audycjach radiowych Programu III PR. Od 2002 r. tworzy także muzykę ilustracyjną. </span></p>

              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/dominik_5.jpg" alt="Img">
            <!-- </div> -->
          </div>
        </div>
      </div>
    </section>

  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <p><span style="color: #d0d0d0;">Część jego utwor&oacute;w znalazła się na płytach &bdquo;<a href="multimedia.html">Okna czasu</a>&rdquo;, ponadto na poszerzonej wersji tego albumu "The Windows of Time" oraz (maxi-singlu) "The Dawn" - wydanych (w oparciu o własny budżet) przez Wydawnictwo Fonograficzne <a href="kontakt--wydawca.html">KK&amp;D Records</a>. Muzyka zawarta na tych krążkach odsłania wnętrze kreatywnego autora, aranżera i instrumentalisty..W 2011 r. wprowadza w życie plan nagrania kolejnego albumu z rockowymi utworami przełomu lat 60 i 70 ubiegłego wieku. Projekt powstał z myślą o ocaleniu od zapomnienia wspaniałej muzyki cenionych tw&oacute;rc&oacute;w i wykonawc&oacute;w, m.in.: Led Zeppelin, Deep Purple, Brainbox, Breakout, Czerwone Gitary. Dominik nagrał płytę wsp&oacute;łpracując z wokalistami i instrumentalistami r&oacute;żnych pokoleń (podkarpackiej i krajowej sceny muzycznej). Premierę albumu poprzedziło wydanie singla z (budzącą emocje) wersją utworu pt. "<a href="http://www.youtube.com/watch?v=h-J-4mDqoQM">My z XX wieku</a>" <a href="http://m.trojmiasto.pl/rozrywka/Klenczon-poemat-rockowy-imp303798.html">Krzysztofa Klenczona</a>. W nagraniu płyty wziął udział <a href="http://marekpiekarczyk.pl/">Marek Piekarczyk</a> (TSA) - wokalista, kt&oacute;ry na stałe zapisał się w historii polskiego Rock and Rolla.<br /></span></p>

        </div>
      </div>
    </div>
  </section>

    <!-- Service Start -->
    <section id="service">
      <div class="container">
        <div class="row">
          <a name="aktual"></a>
          <div class="section-title">
            <h2>Aktualności</h2>

          </div>
        </div>
        @foreach($posts as $post)
          <div class="row">
            <div class="col-md-3">
              <div class="service-item">
                <div class="circular"><img src="{{ asset('images/' . $post->image) }}" alt=""/>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="service-item" >
                        <h3>{{$post->title}}</h3>
                        <h5><small>Opublikowano: {{date('j-m-Y', strtotime($post->created_at))}}</small></h5>
                        <p class="show-read-more">{{ $post->body }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <a name="dysko"></a>
          <div class="col-md-12">
            <div class="block">
              <h2>Dyskografia Dominika Kozickiego</h2>
              <p>
                {{-- 2017 r. Singel (CD) „Ósmy zmysł” Dominik Kozicki & Rock Friends.<br>
                2016 r. Singel (CD) „Euforia” Dominik Kozicki & Rock Friends.<br>
                2015 r. Singel (CD) „Kredo” Dominik Kozicki & Rock Friends.<br>
                2014 r. Singel (CD) „Wolnością bądź” Dominik Kozicki & Rock Friends.<br>
                2014 r. Singel (CD) „Blue” Dominik Kozicki & Daria Kutkowska.<br>
                2014 r. Singel (CD) „Inside” Dominik Kozicki & Rock Friends.<br>
                2013 r. Płyta (DVD) Dominik Kozicki and Rock Friends - Live (gościnnie Marek Piekarczyk).<br>
                2012 r. Album (CD) „Look Behind” Dominik Kozicki and Session Rock Friends (gościnnie Marek Piekarczyk).<br>
                2012 r. (DVD) wideoklip do utworu pt. „Życie Nali” pochodzącego z płyty OKNA CZASU.<br>
                2012 r. Singel (CD) pt. „My z XX wieku” z utworem promującym płytę LOOK BEHIND nagranej pod szyldem  Dominik Kozicki & Session Rock Friends.<br>

                2010 r. Singel (CD) pt. „W imię króla” z utworem autorstwa Dominika Kozickiego promującym płytę OKNA CZASU oraz THE WINDOWS OF TIME.<br>

                2010 r. Maxi-singel (CD) pt. „The Dawn” – z utworami autorstwa Dominika Kozickiego promującymi płytę THE WINDOWS OF TIME.<br>
                2010 r. Album (CD) pt. „The Windows of Time” reedycja płyty OKNA CZASU.
                2008 r. (DVD) wideoklip do utworu pt. „Daimonion” - dodatek do płyty OKNA CZASU.<br>
                2006 r. Album (CD) pt. OKNA CZASU.
                2004 r. Płyta (CD) „Okna czasu - Demo” z utworami autorstwa Dominika Kozickiego.<br> --}}
                @foreach($discographies as $discography)
                    <p>{{$discography->title}}</p>
                @endforeach
              </p>
              <br>
              <a class="btn btn-primary btn-lg" href="{{route('multimedia')}}" >Multimedia</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->
    <section id="testimonial">
      <div class="container">
        <div class="row">

          <div class="section-title text-center">
            <h2>Zamów Płytę</h2><br>
            <p>Płyta "Okna czasu"<br>
               Płyta "The Dawn"<br>
               Album "Look Behind"<br></br>
               Płytę CD (studyjną) + DVD (live) można uzyskać drogą wysyłkową <br>
               poprzez zamówienie kierowane do Wydawnictwa Fonograficznego KK&D Records;<br>
                pod adres e-mail: elgalespl@gmail.com<br>
            </p>
            <br>
            <a href="" class="btn btn-primary btn-lg"  role="button">Zamów</a>
          </div>
        </div>
      </div>
    </section>
    <a name="kontakt"></a>
@extends('partrials.footer')


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<script type="text/javascript">$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    &&
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
</script>
</body>
</html>
