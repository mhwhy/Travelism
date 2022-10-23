<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- fonts google -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&family=Viga&display=swap" rel="stylesheet" />

    <!-- style ku -->
    <link rel="stylesheet" href="{{ asset('/Assets/css/style.css') }}" />

    <title>Travelism</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="p-4 navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
      <div class="container">
        <a class="navbar-brand brand-app" href="#"> TRAVELISM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#about-us">About Us</a>
            </li>

            @if (Route::has('login'))
            <li class="nav-item mx-2">
            @auth
                    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item mx-2">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar ends -->



    <!-- hero section -->
    <section id="hero">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col hero-tagline my-auto me-auto">
            <h1 class="fw-bold fs-1 text-white" style="margin-top: 100px">Discover Your <br />Journey</h1>
            <p class="fw-bold pb-3 fs-4">
              find your journey by exploring the tour in our land, explore <br />
              our world gems and enjoy your journey
            </p>

            <a class="button-lg-primary rounded">Get Started</a>
          </div>
        </div>
      </div>
    </section>

    <!-- hero section ends-->

    <!-- container -->
    <div class="container">

        <!-- panel -->
        <div class="row">
          <div class="col-lg-8 info-panel">
            <div class="row">
              <div class="col-lg">
               <a href="#"> <img src="/Assets/panel/button3.png" alt=""></a>
              </div>
              <div class="col-lg">
                <a href="#"><img src="/Assets/panel/button2.png" alt=""></a>
              </div>
              <div class="col-lg">
                <a href="#"><img src="/Assets/panel/button1.png" alt=""></a>
              </div>
            </div>

          </div>
          <div class="col-lg-10 info-panel2">
            <input id="search" class="rounded-pill" type="text" placeholder="   FIND SOMETHING..."><a href="#search"><i class="fa-solid fa-magnifying-glass-location ms-3  fa-3x" style="position: absolute;"></i></a>
          </div>
        </div>
      </div>
      <!-- container end -->

    <!-- content -->
    <section id="content" class="bg-secondary bg-opacity-10">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-md-6">
            <h1 class="py-5 fw-bold">
              Most <br />
              Popular Destination
            </h1>
          </div>
          <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <h1 class="p-5 fw-bold fs-5 mt-5" style="margin-left: 130px">
              <span class="text-info">500++ </span>Destination <br />
              lets find out and start your trip
            </h1>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: 100px">
          <div class="col">
            <div class="">
              <img src="{{ asset('/Assets/img/komodoisland.png') }}" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="">
              <img src="{{ asset('/Assets/img/bromotengger.png') }}" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="">
              <img src="{{ asset('/Assets/img/kelimutulake.png') }}" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="">
              <img src="{{ asset('/Assets/img/komodoisland.png') }}" class="card-img-top" alt="..." />
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h1 class="fw-bold text-center" style="margin-top: 160px; margin-bottom: 50px">DISCOVER</h1>
        <div class="row">
          <div class="col-sm-5 col-md-6">
            <h1 class="py-5 fw-bold">Travel Destination</h1>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-bottom: 500px">
            <div class="col">
              <div class="card mb-3" style="width: 588; height: 410; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="Assets/content/Rectangle 19.png" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-6 p-3">
                    <div class="card-body">
                      <h5 class="card-title fw-bold fs-5 mb-4">Raja Ampat</h5>
                      <p class="card-text" style="font-size: 13px">
                        this is the reason why to many people visit indonesai because in here we have a most beautyfull view of mountain, you can feel havenly when you came here. so what you wait come here right now to Raja Ampat we wait
                        your arrival
                      </p>
                      <a class="text-decoration-none py-1" style="font-size: 12px" href="#"> More Detail <i class="fa-solid fa-arrow-right"></i></a>
                      <p class="card-text pt-4">
                        <a class="text-decoration-none fw-bold" style="font-size: 11px" href="#"><i class="fa-solid fa-location-dot mr-2 me-2"></i>Papua Indonesia</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-3" style="width: 588; height: 410; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="Assets/content/Rectangle 19 (1).png" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-6 p-3">
                    <div class="card-body">
                      <h5 class="card-title fw-bold fs-5 mb-4">Kelimutu Lake</h5>
                      <p class="card-text" style="font-size: 13px">
                        this is the reason why to many people visit indonesai because in here we have a most beautyfull view of mountain, you can feel havenly when you came here. so what you wait come here right now to Kelimutu Lake we wait
                        your arrival
                      </p>
                      <a class="text-decoration-none py-1" style="font-size: 12px" href="#">More Detail<i class="fa-solid fa-arrow-right"></i></a>
                      <p class="card-text pt-4">
                        <a class="text-decoration-none fw-bold" style="font-size: 11px" href="#"><i class="fa-solid fa-location-dot mr-2 me-2"></i>East Nusa Tenggara Indonesia</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-3" style="width: 588; height: 410; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="Assets/content/Rectangle 19 (2).png" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-6 p-3">
                    <div class="card-body">
                      <h5 class="card-title fw-bold fs-5 mb-4">Komodo Island</h5>
                      <p class="card-text" style="font-size: 13px">
                        this is the reason why to many people visit indonesai because in here we have a most beautyfull view of mountain, you can feel havenly when you came here. so what you wait come here right now to Komodo National
                        Island we wait your arrival
                      </p>
                      <a class="text-decoration-none py-1" style="font-size: 12px" href="#"> More Detail <i class="fa-solid fa-arrow-right"></i></a>
                      <p class="card-text pt-4">
                        <a class="text-decoration-none fw-bold" style="font-size: 11px" href="#"><i class="fa-solid fa-location-dot mr-2 me-2"></i> East Nusa Tenggara Indonesia</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-3" style="width: 588; height: 410; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="Assets/content/Rectangle 19 (3).png" class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-6 p-3">
                    <div class="card-body">
                      <h5 class="card-title fw-bold fs-5 mb-4">Bromo Tengger</h5>
                      <p class="card-text" style="font-size: 13px">
                        this is the reason why to many people visit indonesai because in here we have a most beautyfull view of mountain, you can feel havenly when you came here. so what you wait come here right now to Bromo Semeru Tengger
                        we wait your arrival
                      </p>
                      <a class="text-decoration-none py-1" style="font-size: 12px" href="#"> More Detail <i class="fa-solid fa-arrow-right"></i></a>
                      <p class="card-text pt-4">
                        <a class="text-decoration-none fw-bold" style="font-size: 11px" href="#"><i class="fa-solid fa-location-dot mr-2 me-2"></i> East Java Indonesia</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="content2" class="bg-secondary bg-opacity-10"></section> -->
    <!-- content end-->

    <!-- footer -->

    <footer class="d-flex align-items-center position-relative">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-flex align-items-center justify-content-md-start justify-content-center">
              <img src="Assets/Logo Icon.png" alt="" />
              <a href="#" class="ms-3">TRAVELISM</a>
            </div>
            <div class="col-md-5 d-flex justify-content-evenly justify-content-center">
              <a href="#hero">Home</a>
              <a href="#contact">Contact</a>
              <a href="#about-us">About Us</a>
            </div>
          </div>
          <div class="row position-absolute copyright start-50 translate-middle">
            <div class="col-12">
              <p class="text-center">Copyright @2022 TRAVELISM Designed By <span class="text-danger">Oceanic team</span></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- java scripts -->

    <script src="{{ asset('/Assets/js/script.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/fb7b96bb2d.js') }}" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
