@extends('layouts.home')

@section('content')



<div class="hero-wrap js-fullheight" style="background-image: url('images/danautoba/danautoba.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"></span> <span class="mr-2"><a href="hotel.html">Wisata</a></span> <span>Detail Wisata</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Danau Toba</h1>
        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <h1>Danau Toba</h1>
                    <hr>
                    <p class="bold">Danau Toba adalah sebuah keajaiban alam yang sangat menakjubkan. Danau ini diperkirakan terbentuk dari letusan dahsyat sebuah gunung api, Gunung Toba, yang terjadi sekitar 74.000 tahun yang lalu. Dengan luas lebih dari 1.145 kilometer persegi dan kedalaman 450 meter,Danau Toba sebenarnya lebih mirip lautan daripada danau. Di tengah danau vulkanik terbesar di dunia ini juga terdapat sebuah pulau yang berukuran cukup besar, yaitu Pulau Samosir.</p>
                    <div class="single-slider owl-carousel">
                        <div class="item">
                            <div class="hotel-img" style="background-image: url(images/danautoba/danautoba1.jpg);"></div>
                        </div>
                        <div class="item">
                            <div class="hotel-img" style="background-image: url(images/danautoba/danautoba2.jpg);"></div>
                        </div>
                        <div class="item">
                            <div class="hotel-img" style="background-image: url(images/danautoba/danautoba3.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                    <h2>Tempat yang menenangkan</h2>
                          <p>Danau Toba menjadi tempat yang sempurna untuk bersantai, karena udaranya sangat sejuk dan suasananya pun amat tenang. Tentu saja, sebab letak Danau Toba berada di 900 meter di atas permukaan laut. Selain panorama danau yang memukau, Sobat Pesona juga akan disuguhkan keindahan pemandangan deretan pegunungan dan pepohonan hijau yang menyegarkan mata. Pokoknya, cocok jadi tempat untuk melepas penat, deh</p>
                          <h2>Cara ke Danau Toba</h2>
                          <div class="d-md-flex mt-5 mb-5">
                              <ul>
                                <li>Jalur Udara</li>
                                  <li>Jika Sobat Pesona berencana untuk ke Danau Toba menggunakan transportasi udara, terdapat dua jalur yang bisa dipilih. Pilihan pertama, dari Bandara Internasional Kualanamu, Medan, Sobat Pesona bisa naik pesawat menuju Bandara Internasional Sisingamangaraja XII yang terletak di Siborongborong, Tapanuli Utara. Kemudian, dari bandara ini, Sobat Pesona bisa meneruskan perjalanan ke Danau Toba menggunakan jalur darat.</li>
                                  <li>
                                    Pilihan kedua, Sobat Pesona bisa langsung memilih penerbangan ke Bandara Internasional Sisingamangaraja XII dari Jakarta atau dari beberapa kota besar lainnya. Cek dulu ketersediaan maskapai penerbangan dari daerahmu ya, Sobat Pesona!</li>

                              </ul>
                              <ul class="ml-md-5">
                                  <li>Jalur Darat</li>
                                  <li>Nah, jika Sobat Pesona menggunakan jalur darat dari Medan, Sobat Pesona bisa menggunakan bus jurusan Medan-Parapat yang bisa ditempuh dalam waktu kurang lebih 4 jam. Namun, bila ingin melakukan perjalanan yang lebih pribadi dan santai, tersedia pula agen-agen perjalanan di kota Medan yang bisa membantu Sobat Pesona untuk mengatur penyewaan mobil dan supir ke Danau Toba.</li>
                                  <li>
                                    Sobat Pesona juga bisa melanjutkan perjalanan dari Danau Toba ke Pulau Samosir. Pilihannya adalah naik kapal feri yang dijadwalkan berangkat setiap satu jam sekali di Pelabuhan Ajibata menuju Pelabuhan Tomok. Atau, Sobat Pesona juga bisa berangkat dari Pelabuhan Muara ke Pelabuhan Sipinggan yang jadwal keberangkatan kapalnya hanya dua kali sehari, yaitu jam 06.30 WIB dan 15.00 WIB. Jadwal ini dapat berubah sewaktu-waktu, pastikan Sobat Pesona selalu mencari info terbaru, ya!</li>

                              </ul>
                          </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-4">Apa yang bisa dilakukan selama di Danau Toba?</h4>
                    <div class="block-16">
                  <img src="{{ asset('/images/danautoba/samosir1.jpg') }}" alt="samosir" width="800">
                    <p>Ada banyak sekali aktivitas yang bisa kamu lakukan selama berada di Danau Toba. Sobat Pesona bisa menyewa sepeda motor untuk mengitari kawasan Pulau Samosir. Jangan lupa untuk mampir ke puncaknya ya, sebab pemandangan yang disuguhkan kian indah saat dilihat dari ketinggian. Sedangkan, jika Sobat Pesona mampir ke Desa Tuktuk, cara terbaik untuk menikmati pulau ini adalah dengan berjalan kaki dan menyusuri jalan-jalan utama desa yang sejuk dan asri.</p>
                  </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-4">Our Rooms</h4>
                    <div class="row">
                        <div class="col-md-4">
                                  <div class="destination">
                                      <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-4.jpg);"></a>
                                      <div class="text p-3">
                                          <div class="d-flex">
                                              <div class="one">
                                                  <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                  <p class="rate">
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star-o"></i>
                                                      <span>8 Rating</span>
                                                  </p>
                                              </div>
                                              <div class="two">
                                                  <span class="price per-price">$40<br><small>/night</small></span>
                                              </div>
                                          </div>
                                          <p>Far far away, behind the word mountains, far from the countries</p>
                                          <hr>
                                          <p class="bottom-area d-flex">
                                              <span><i class="icon-map-o"></i> Miami, Fl</span>
                                              <span class="ml-auto"><a href="#">Book Now</a></span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="destination">
                                      <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-5.jpg);"></a>
                                      <div class="text p-3">
                                          <div class="d-flex">
                                              <div class="one">
                                                  <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                  <p class="rate">
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star-o"></i>
                                                      <span>8 Rating</span>
                                                  </p>
                                              </div>
                                              <div class="two">
                                                  <span class="price per-price">$40<br><small>/night</small></span>
                                              </div>
                                          </div>
                                          <p>Far far away, behind the word mountains, far from the countries</p>
                                          <hr>
                                          <p class="bottom-area d-flex">
                                              <span><i class="icon-map-o"></i> Miami, Fl</span>
                                              <span class="ml-auto"><a href="#">Book Now</a></span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="destination">
                                      <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-6.jpg);"></a>
                                      <div class="text p-3">
                                          <div class="d-flex">
                                              <div class="one">
                                                  <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                  <p class="rate">
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star-o"></i>
                                                      <span>8 Rating</span>
                                                  </p>
                                              </div>
                                              <div class="two">
                                                  <span class="price per-price">$40<br><small>/night</small></span>
                                              </div>
                                          </div>
                                          <p>Far far away, behind the word mountains, far from the countries</p>
                                          <hr>
                                          <p class="bottom-area d-flex">
                                              <span><i class="icon-map-o"></i> Miami, Fl</span>
                                              <span class="ml-auto"><a href="#">Book Now</a></span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-5">Check Availability &amp; Booking</h4>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                            </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                              <div class="select-wrap one-third">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control" placeholder="Guest">
                                <option value="0">Guest</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                              <div class="form-group">
                              <div class="select-wrap one-third">
                              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                              <select name="" id="" class="form-control" placeholder="Children">
                                <option value="0">Children</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-4">Review &amp; Ratings</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" class="star-rating">
                                        <div class="form-check">
                                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                              <label class="form-check-label" for="exampleCheck1">
                                                  <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
                                              </label>
                                        </div>
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                             <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
                                       </label>
                                        </div>
                                        <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                                          </label>
                                        </div>
                                      </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                    <h4 class="mb-4">Related Hotels</h4>
                    <div class="row">
                        <div class="col-md-4">
                                  <div class="destination">
                                      <a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-1.jpg);"></a>
                                      <div class="text p-3">
                                          <div class="d-flex">
                                              <div class="one">
                                                  <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                  <p class="rate">
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star-o"></i>
                                                      <span>8 Rating</span>
                                                  </p>
                                              </div>
                                              <div class="two">
                                                  <span class="price per-price">$40<br><small>/night</small></span>
                                              </div>
                                          </div>
                                          <p>Far far away, behind the word mountains, far from the countries</p>
                                          <hr>
                                          <p class="bottom-area d-flex">
                                              <span><i class="icon-map-o"></i> Miami, Fl</span>
                                              <span class="ml-auto"><a href="#">Book Now</a></span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="destination">
                                      <a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-2.jpg);"></a>
                                      <div class="text p-3">
                                          <div class="d-flex">
                                              <div class="one">
                                                  <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                  <p class="rate">
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star-o"></i>
                                                      <span>8 Rating</span>
                                                  </p>
                                              </div>
                                              <div class="two">
                                                  <span class="price per-price">$40<br><small>/night</small></span>
                                              </div>
                                          </div>
                                          <p>Far far away, behind the word mountains, far from the countries</p>
                                          <hr>
                                          <p class="bottom-area d-flex">
                                              <span><i class="icon-map-o"></i> Miami, Fl</span>
                                              <span class="ml-auto"><a href="#">Book Now</a></span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="destination">
                                      <a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-3.jpg);"></a>
                                      <div class="text p-3">
                                          <div class="d-flex">
                                              <div class="one">
                                                  <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                  <p class="rate">
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star"></i>
                                                      <i class="icon-star-o"></i>
                                                      <span>8 Rating</span>
                                                  </p>
                                              </div>
                                              <div class="two">
                                                  <span class="price per-price">$40<br><small>/night</small></span>
                                              </div>
                                          </div>
                                          <p>Far far away, behind the word mountains, far from the countries</p>
                                          <hr>
                                          <p class="bottom-area d-flex">
                                              <span><i class="icon-map-o"></i> Miami, Fl</span>
                                              <span class="ml-auto"><a href="#">Book Now</a></span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                    </div>
                </div>

            </div>
        </div> <!-- .col-md-8 -->

        <div class="col-lg-3 sidebar">
            <div class="sidebar-wrap bg-light ftco-animate">
                <h3 class="heading mb-4">Cari Wisata</h3>
                <form action="#">
                    <div class="fields">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Kota ,Tujuan">
                  </div>
                  <div class="form-group">
                    <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Pilih Lokasi">
                      <option value="">Candi Borobudur</option>
                      <option value="">Labuan Bajo</option>
                      <option value="">Mandalika</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <input type="text" id="checkin_date" class="form-control" placeholder="Tanggal Dari">
                  </div>
                  <div class="form-group">
                    <input type="text" id="checkin_date" class="form-control" placeholder="Tanggal Ke">
                  </div>
                  <div class="form-group">
                      <div class="range-slider">
                          <span>
                                        <input type="number" value="25000" min="0" max="120000"/>	-
                                        <input type="number" value="50000" min="0" max="120000"/>
                                      </span>
                                      <input value="1000" min="0" max="120000" step="500" type="range"/>
                                      <input value="50000" min="0" max="120000" step="500" type="range"/>
                                      </svg>
                                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Mencari" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
            </form>
            </div>
            <div class="sidebar-wrap bg-light ftco-animate">
                <h3 class="heading mb-4">Peingkat Bintang</h3>
                <form method="post" class="star-rating">
                          <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                                </label>
                          </div>
                          <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">
                               <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                          </label>
                          </div>
                          <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">
                              <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                         </label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">
                              <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                          </label>
                          </div>
                          <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">
                              <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                          </div>
                        </form>
            </div>
      </div>


      </div>
    </div>
  </section> <!-- .section -->





<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>






@endsection
