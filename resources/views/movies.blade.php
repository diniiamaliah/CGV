<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies - CGV Cinemas</title>


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
  <header>

  </header>
  <div class="page-wrapper">
    <div clas = "container">
    @foreach ($movies as $movie)
    <ul class="list-group" id="movies_list">
        
            <li class="list-group-item">
                <div class="movie__item__right col-10">
                  {{  $movie->image }} <br>
                    <p>ACTION, ADVENTURE, FANTASY</p>
            
                    {{ $movie->judul }} <br>
                    {{ $movie->sinopsis }} <br>
                    <a href="{{ $movie->linktrailer }}">{{ $movie->sinopsis }}<i class="fa fa-angle-right"></i></a>
                    <div class="timing row">
                        <div class="timing__left col-9">
                            <i class="fa fa-clock"></i>
                            <span>Viewing Times</span>
                            
  <form action="{{ route('show.movie', $movie->jam_id)}}" method="GET">
    @csrf                      
                        @foreach ($jamtayang as $item)       
                   
                        <select name="jam_id">
                            <option value="{{ $item->jam_id}}">
                              {{ $item->jamtayang->jamtayang}}</option>
                        </div>
                      </select>
                        @endforeach
                        
                        <div class="timing__right col-3">
                            <span>{{ $movie->durasi }}</span>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
            <button type="submit">check detail</button>
          </form>
    </ul>


  <!-- Add your other sections and content here -->

  <!-- Add your footer code here -->

  <!-- Add your script tags here -->
</body>
</html>



   

   

      <div class="tab-content" id="myTabContent">
        
        <div class="tab-pane fade show active" id="mon-tab-pane" role="tabpanel" aria-labelledby="home-tab"
          tabindex="0">
        
          <div class="tab-pane fade" id="wed-tab-pane" role="tabpanel" aria-labelledby="wed-tab" tabindex="0">Wednesday
          </div>

          <div class="tab-pane fade" id="thurd-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            Thursday</div>

          <div class="tab-pane fade" id="fri-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            Friday</div>

          <div class="tab-pane fade" id="sar-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            Saturday</div>

          <div class="tab-pane fade" id="sun-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            Sunday</div>
        </div>
        </div>
      </div>
  </section>


  <!-- COMING SOON -->
  <section class="coming__soon">
    <div class="coming__soon__content container">
      <div class="content__top">
        <span>COMING SOON</span>
      </div>

      <div class="content__bottom row">
        <div class="content__bottom__left col-6">
          <p class="first__row">COMEDY, CRIME</p>
          <p class="second__row">The Hangover Part III</p>
          <div class="d-flex align-items-center middle__part">
            <div class="star__part"><i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <i class="fa fa-calendar-alt calendar"></i>
            <p>30 Septemper 2020</p>
          </div>
          <p class="longest">When one of their own is kidnapped by an angry gangster, the Wolf Pack must track down Mr.
            Chow, who has escaped from prison and is on the run.
          </p>
          <a href="">MORE INFO</a>
        </div>

        <div class="content__bottom__right col-6">
          <a class="my-link venobox" data-vbtype="iframe" href="https://youtu.be/embed/24IZukEzBzk">
            <img src="./img/slide-3-video.png" alt="">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- MOVIELIST -->
  <section class="movieList section">
    <div class="container">
        <div class="row">
            <div class="col-4 col-lg-2 mb-3 mb-lg-0">
                <div class="movieList__item">
                    <img class="img-fluid" src="./img/movie-9.jpg" alt="">
                    <div class="movieList__overlay"></div>
                </div>
            </div>
            <div class="col-4 col-lg-2 mb-3 mb-lg-0">
                <div class="movieList__item">
                    <img class="img-fluid" src="./img/movie-8.jpg" alt="">
                    <div class="movieList__overlay"></div>
                </div>
            </div>
            <div class="col-4 col-lg-2 mb-3 mb-lg-0">
                <div class="movieList__item">
                    <img class="img-fluid" src="./img/movie-11.jpg" alt="">
                    <div class="movieList__overlay"></div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <div class="movieList__item">
                    <img class="img-fluid" src="./img/movie-13.jpg" alt="">
                    <div class="movieList__overlay"></div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <div class="movieList__item">
                    <img class="img-fluid" src="./img/movie-12.jpg" alt="">
                    <div class="movieList__overlay"></div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2">
                <div class="movieList__item">
                    <img class="img-fluid" src="./img/movie-14.jpg" alt="">
                    <div class="movieList__overlay"></div>
                </div>
            </div>
        </div>
    </div>
</section>
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

<style>
  /* Styling for the filter section */
.mb-3 {
  margin-bottom: 20px;
}

.mb-3 label {
  margin-right: 10px;
}

.mb-3 a {
  margin-right: 10px;
  text-decoration: none;
  color: #007bff;
}

.mb-3 a.active {
  font-weight: bold;
}

/* Styling for the "Add Movie" button */
.btn-primary.mb-3 {
  display: inline-block;
  padding: 8px 16px;
  background-color: #007bff;
  border: none;
  color: #fff;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border-radius: 4px;
}

.btn-primary.mb-3:hover {
  background-color: #0056b3;
}

/* Styling for the movie list */
.list-group {
  list-style-type: none;
  padding: 0;
}

.list-group-item {
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.movie__item__right {
  width: 100%;
}

.movie__item__right p {
  margin-bottom: 5px;
}

.movie__item__right strong {
  display: block;
  margin-top: 10px;
}

.timing {
  margin-top: 10px;
  display: flex;
  align-items: center;
}

.timing__left {
  flex-grow: 1;
}

.timing__left .btn {
  margin-right: 10px;
}

.timing__right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  font-size: 14px;
}


     </div>
     </div>
     </div>
     </div>
</style>
    </div>
      