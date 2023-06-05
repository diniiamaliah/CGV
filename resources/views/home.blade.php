<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - CGV Cinemas</title>


  <!-- Link to external Bootstrap CSS file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


  <!-- Link to Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- Link to external Google Font css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Link to Font Awesomm CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!-- Link to Venobox -->
  <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">


  <!-- Link to internal CSS file -->
  <link rel="stylesheet" href="{{ asset('css\index.css')}}">
</head>

<body>
  <!-- HEADER -->
  <header>
    <div class="header__top container">
      <i class="fa fa-search"></i>
    </div>


    <div class="header__narbar container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/logo.svg" alt="cgv-cinemas">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent__movie" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent__movie">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="movies">MOVIES</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">NEWS</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">LOGIN</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">SIGN UP</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
    </div>

    
  </header>

  <!-- Header move together with website
  <header id="carousel_moving">
    <div class="header__narbar container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./img/logo.svg" alt="cgv-cinemas">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent__movie" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent__movie">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="movies">MOVIES</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">NEWS</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">LOGIN</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">SIGN UP</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header> -->

  <!-- CAROUSEL -->
  <section class="cinema__carousel">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>



      <div class="carousel-inner">




        <div class="carousel-item active">

          <img src="./img/hero-1.jpg" class="d-block w-100" alt="...">

          <div class="overlay"></div>

          <div class="carousel-caption d-none d-md-block">

            <p class="animate__animated animate__bounceInDown">ACTION, ADVENTURE, FANTASY</p>
            <p class="animate__animated animate__bounceInDown">End of the World: Part 1</p>
            <p class="animate__animated animate__bounceInUp">Claritas est etiam processus dynamicus, qui sequitur
              mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamu.</p>
            <span class="span1 animate__animated animate__bounceInUp">PG</span>



            <button class="button animate__animated animate__bounceInUp">
              <span class="nana">
                PLAY TRAILER
              </span>
              <button>

          </div>

        </div>

        <div class="carousel-item">

          <img src="./img/hero-2.jpg" class="d-block w-100" alt="...">

          <div class="overlay"></div>

          <div class="carousel-caption d-none d-md-block">

            <p class="animate__animated animate__bounceInDown">ACTION, ADVENTURE, FANTASY</p>
            <p class="animate__animated animate__bounceInDown">End of the World: Part 1</p>
            <p class="animate__animated animate__bounceInUp">Claritas est etiam processus dynamicus, qui sequitur
              mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamu.</p>
            <span class="span1 animate__animated animate__bounceInUp">PG</span>



            <button class="button animate__animated animate__bounceInUp">
              <span class="nana">
                PLAY TRAILER
              </span>
              <button>

          </div>





        </div>

        <div class="carousel-item">
          <img src="./img/hero-3.jpg" class="d-block w-100" alt="...">

          <div class="overlay"></div>

          <div class="carousel-caption d-none d-md-block">

            <p class="animate__animated animate__bounceInDown">ACTION, ADVENTURE, FANTASY</p>
            <p class="animate__animated animate__bounceInDown">End of the World: Part 1</p>
            <p class="animate__animated animate__bounceInUp">Claritas est etiam processus dynamicus, qui sequitur
              mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamu.</p>
            <span class="span1 animate__animated animate__bounceInUp">PG</span>



            <button class="button animate__animated animate__bounceInUp">
              <span class="nana">
                PLAY TRAILER
              </span>
              <button>

          </div>
        </div>


      </div>
  </section>


  <!-- NEW_FEATURES -->
  <section class="new__features">
    <div class="new__features__main container">
      <div class="new__features__top">
        <p>Movie Selection</p>
      </div>

      <div class="new__features__bottom row">
        <div class="new__features__item col-3">
          <div class="new__features__item__content">
            <!-- class="img-fluid" -->
            <div class="new__feauture__img">
              <img src="./img/movie-1.jpg" alt="">
              <div class="overlay"></div>
              <div class="content">
                <i class="fa fa-play for_hover"></i>
                <p>READ MORE</p>
                <p>Released: 7 Mar, 2017</p>
              </div>
            </div>

            <p>The last post</p>
            <div class="start">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>

        <div class="new__features__item col-3">
          <div class="new__features__item__content">

            <div class="new__feauture__img">
              <img class="img-fluid" src="./img/movie-2.jpg" alt="">
              <div class="overlay"></div>
              <div class="content">
                <i class="fa fa-play for_hover"></i>
                <p>READ MORE</p>
                <p>Released: 7 Mar, 2017</p>
              </div>
            </div>

            <p>Dark and lonely
            </p>
            <div class="start">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>

        <div class="new__features__item col-3">
          <div class="new__features__item__content">

            <div class="new__feauture__img">
              <img class="img-fluid" src="./img/movie-3.jpg" alt="">
              <div class="overlay"></div>
              <div class="content">
                <i class="fa fa-play for_hover"></i>
                <p>READ MORE</p>
                <p>Released: 7 Mar, 2017</p>
              </div>
            </div>

            <p>Venture</p>
            <div class="start">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>

        <div class="new__features__item col-3">
          <div class="new__features__item__content">

            <div class="new__feauture__img">
              <img class="img-fluid" src="./img/movie-4.jpg" alt="">
              <div class="overlay"></div>
              <div class="content">
                <i class="fa fa-play for_hover"></i>
                <p>READ MORE</p>
                <p>Released: 7 Mar, 2017</p>
              </div>
            </div>

            <p>Hush</p>
            <div class="start">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- FOOTER -->
<footer>
    <div class="container footer__section">
        <div class="row section">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <h3>GET IN TOUCH</h3>
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Give us feedback</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <h3>ABOUT CGV</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Find us</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <h3>LEGAL STUFF</h3>
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Cookie policy</a></li>
                    
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <h3>CONNECT WITH US</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i> Google +</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="footer__copyright">
            <p>2023 © CJ CGV All RIGHTS RESERVED </p>
        </div>
    </div>
</footer>

  <!-- Link to external Jquery supporting library to run Bootstrap animation -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <!-- Link to external Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <!-- Link to venobox JS -->
  <script src="{{ asset('js/venobox.min.js') }}"></script>
  <script>
    $('.venobox').venobox()
  </script>

  <!-- JS Main -->
  <!-- MAIN JS -->
  <script>

    window.onscroll = function () {
      //Code tạo hiệu ứng xuất hiện thanh màu đen khi scroll
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        // translate(-50%,0)
        document.getElementById("carousel_moving").style.transform = "translateY(0)";
      } else {
        document.getElementById("carousel_moving").style.transform = "translateY(-100%)";
      }
    }
  </script>


  <!-- Link to internal JS file -->
  <script src="{{ asset('js/index.js') }}"></script>


</body>


</html>