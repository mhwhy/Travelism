@extends('layouts.home')

@section('content')




<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tour</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <h1>Keindahan pesona Indonesia yang membuatnya wajib dijelajahi</h1>
                <p>Dengan bentangan gugusan pulau dari Sabang hingga Merauke, Indonesia memiliki keberagaman wisata alam, budaya, hingga kuliner yang menggoda. Ramah tamah warga lokal yang membuat wisatawan nyaman dan merasa di kampung halaman juga semakin indah ketika unsur adat istiadat tradisional yang masih autentik dikenalkan. Selain itu, kekayaan flora serta fauna langka nan memesona pun tak kalah seru untuk menambah daftar pengalaman terbaik yang bisa dirasakan saat menjelajahi Indonesia. Semua keindahan ini cuma bisa ditemukan #DiIndonesiaAja.</p>
                <hr>
                {{-- danau toba --}}
                <div class="col-md-4 ftco-animate">
                    <div class="destination">
                              <a href="/danautoba" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                                      <span class="icon-search2"></span>
                                 </div>
                              </a>

                              <div class="text p-3">
                                  <div class="d-flex">
                                      <div class="one">
                                          <h3><a href="#">Danau Toba</a></h3>
                                      </div>
                                      <div class="two">
                                          <span class="price">Rp.200</span>
                                      </div>
                                  </div>
                                  <p>Danau Toba adalah sebuah keajaiban alam yang sangat menakjubkan</p>
                                  <hr>
                                  <p class="bottom-area d-flex">
                                      <span><i class="icon-map-o"></i> Sumatera Utara</span>
                                      <span class="ml-auto"><a href="/danautoba">Lihat Selengkapnya</a></span>
                                  </p>
                              </div>
                    </div>
                </div>

                {{-- borobudur --}}
                      <div class="col-md-4 ftco-animate">
                          <div class="destination">
                              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                              <span class="icon-search2"></span>
                          </div>
                              </a>
                              <div class="text p-3">
                                  <div class="d-flex">
                                      <div class="one">
                                          <h3><a href="#">Candi Borobudur</a></h3>
                                      </div>
                                      <div class="two">
                                          <span class="price">Rp.200</span>
                                      </div>
                                  </div>
                                  <p>Sobat Pesona pastinya sudah tidak asing kan dengan Candi Borobudur?</p>
                                  <hr>
                                  <p class="bottom-area d-flex">
                                      <span><i class="icon-map-o"></i> Magelang,Jateng</span>
                                      <span class="ml-auto"><a href="#">Lihat Selengkapnya</a></span>
                                  </p>
                              </div>
                          </div>
                      </div>

                      {{-- mandalika --}}
                      <div class="col-md-4 ftco-animate">
                          <div class="destination">
                              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                              <span class="icon-search2"></span>
                          </div>
                              </a>
                              <div class="text p-3">
                                  <div class="d-flex">
                                      <div class="one">
                                          <h3><a href="#">Mandalika</a></h3>
                                      </div>
                                      <div class="two">
                                          <span class="price">Rp.200</span>
                                      </div>
                                  </div>
                                  <p> salah satu kepingan surga tersembunyi di Bumi Ibu Pertiwi ini bisa ditemukan di NTB</p>
                                  <hr>
                                  <p class="bottom-area d-flex">
                                      <span><i class="icon-map-o"></i> Lombok ,NTB</span>
                                      <span class="ml-auto"><a href="#">lihat Selengkapnya</a></span>
                                  </p>
                              </div>
                          </div>
                      </div>

                      {{-- labuan bajo --}}
                      <div class="col-md-4 ftco-animate">
                          <div class="destination">
                              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                              <span class="icon-search2"></span>
                          </div>
                              </a>
                              <div class="text p-3">
                                  <div class="d-flex">
                                      <div class="one">
                                          <h3><a href="#">Labuan Bajo</a></h3>
                                      </div>
                                      <div class="two">
                                          <span class="price">$200</span>
                                      </div>
                                  </div>
                                  <p>Sepetak Surga yang Terletak di Indonesia Timur</p>
                                  <hr>
                                  <p class="bottom-area d-flex">
                                      <span><i class="icon-map-o"></i> Manggarai Barat, NTT</span>
                                      <span class="ml-auto"><a href="#">lihat Selengkapnya</a></span>
                                  </p>
                              </div>
                          </div>
                      </div>

                      {{-- lIKUPANG --}}
                      <div class="col-md-4 ftco-animate">
                          <div class="destination">
                              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                              <span class="icon-search2"></span>
                          </div>
                              </a>
                              <div class="text p-3">
                                  <div class="d-flex">
                                      <div class="one">
                                          <h3><a href="#">Pantai likupang</a></h3>
                                      </div>
                                      <div class="two">
                                          <span class="price">$200</span>
                                      </div>
                                  </div>
                                  <p>Mempersembahkan Keindahan Indonesia yang Tak Tertandingi</p>
                                  <hr>
                                  <p class="bottom-area d-flex">
                                      <span><i class="icon-map-o"></i>Sulawesi Utara</span>
                                      <span class="ml-auto"><a href="#">Lihat Selengkapnya</a></span>
                                  </p>
                              </div>
                          </div>
                      </div>

                      {{-- Bali --}}
                      <div class="col-md-4 ftco-animate">
                          <div class="destination">
                              <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
                                  <div class="icon d-flex justify-content-center align-items-center">
                              <span class="icon-search2"></span>
                          </div>
                              </a>
                              <div class="text p-3">
                                  <div class="d-flex">
                                      <div class="one">
                                          <h3><a href="#">Bali</a></h3>
                                      </div>
                                      <div class="two">
                                          <span class="price">$200</span>
                                      </div>
                                  </div>
                                  <p>Siapa pun tak ada yang bisa menyangkal keindahan yang ditawarkan Pulau Dewata.</p>
                                  <hr>
                                  <p class="bottom-area d-flex">
                                      <span><i class="icon-map-o"></i> Bali</span>
                                      <span class="ml-auto"><a href="#">Lihat Selengkapnya</a></span>
                                  </p>
                              </div>
                          </div>
                      </div>
            </div>

        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->


    @endsection
