  <!-- Carousel Start -->
  <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('ASET2/img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Temukan tempat terbaik untuk liburan</h4>
                        <h1 class="display-3 text-white mb-md-4">Destinasi Liburan Seru</h1>
                        @if (Route::has('login'))
                        <li class="nav-item mx-2">
                        @auth
                                <a class="btn btn-primary py-md-3 px-md-5 mt-2" href="{{ url('/dashboard') }}">Pesan Sekarang</a>
                            @else
                                <a class="btn btn-primary py-md-3 px-md-5 mt-2" href="{{ route('login') }}">Pesan Sekarang</a>
                        </li>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('ASET2/img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Temukan Tempat Menakjubkan Bersama Kami</h1>
                        @if (Route::has('login'))
                        <li class="nav-item mx-2">
                        @auth
                                <a class="btn btn-primary py-md-3 px-md-5 mt-2" href="{{ url('/dashboard') }}">Pesan Sekarang</a>
                            @else
                                <a class="btn btn-primary py-md-3 px-md-5 mt-2" href="{{ route('login') }}">Pesan Sekarang</a>
                        </li>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->
