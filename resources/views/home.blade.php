    @extends('layouts.home')

    @section('content')


      <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                 Destinasi liburan seru
              </h1>
              <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Temukan tempat terbaik untuk menginap, makan, berbelanja, atau kunjungi dari pakar lokal</p>
              <div class="block-17 my-4">
                <form action="" method="post" class="d-block d-flex">
                  <div class="fields d-block d-flex">
                    <div class="textfield-search one-third">
                      <input type="text" class="form-control" placeholder="Ex: food, service, hotel" />
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control" placeholder="Keyword search">
                        <option value="">Where</option>
                        <option value="">San Francisco USA</option>
                        <option value="">Berlin Germany</option>
                        <option value="">Lodon United Kingdom</option>
                        <option value="">Paris Italy</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Search" />
                </form>
              </div>
              <p>Atau Telusuri Sorotan</p>
              <p class="browse d-md-flex">
                <span class="d-flex justify-content-md-center align-items-md-center"
                  ><a href="#"><i class="flaticon-fork"></i>Restoran</a></span
                >
                <span class="d-flex justify-content-md-center align-items-md-center"
                  ><a href="#"><i class="flaticon-hotel"></i>Hotel</a></span
                >
                <span class="d-flex justify-content-md-center align-items-md-center"
                  ><a href="#"><i class="flaticon-meeting-point"></i>Tempat</a></span
                >

              </p>
            </div>
          </div>
        </div>
      </div>

      <section class="ftco-section services-section bg-light">
        <div class="container">
          <div class="row d-flex">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center">
                  <div class="icon"><span class="flaticon-guarantee"></span></div>
                </div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">Jaminan Harga Terbaik</h3>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center">
                  <div class="icon"><span class="flaticon-like"></span></div>
                </div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">Wisatawan Mencintai Kami</h3>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center">
                  <div class="icon"><span class="flaticon-detective"></span></div>
                </div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">Agen Perjalanan Terbaik</h3>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services d-block text-center">
                <div class="d-flex justify-content-center">
                  <div class="icon"><span class="flaticon-support"></span></div>
                </div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">Dukungan Khusus Kami</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FITUR DESTINASI -->

      <section class="ftco-section ftco-destination">
        <div class="container">
          <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
              <span class="subheading">Unggulan</span>
              <h2 class="mb-4"><strong>Destinasi </strong> Pilihan</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="destination-slider owl-carousel ftco-animate">
                <div class="item">
                  <div class="destination">
                    <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg)">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search2"></span>
                      </div>
                    </a>
                    <div class="text p-3">
                      <h3><a href="#">Danau Toba</a></h3>

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="destination">
                    <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg)">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search2"></span>
                      </div>
                    </a>
                    <div class="text p-3">
                      <h3><a href="#">Borobudur</a></h3>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="destination">
                    <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg)">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search2"></span>
                      </div>
                    </a>
                    <div class="text p-3">
                      <h3><a href="#">Mandalika</a></h3>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="destination">
                    <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg)">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search2"></span>
                      </div>
                    </a>
                    <div class="text p-3">
                      <h3><a href="#">Labun Bajo</a></h3>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="destination">
                    <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg)">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search2"></span>
                      </div>
                    </a>
                    <div class="text p-3">
                      <h3><a href="#">Likupang</a></h3>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="destination">
                    <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg)">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search2"></span>
                      </div>
                    </a>
                    <div class="text p-3">
                      <h3><a href="#">Bali</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- HOTEL -->

      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
              <h2 class="mb-4"><strong>Kita</strong> Punya Lebih Dari Hotel</h2>
              <span class="subheading">Temukan akomodasi yang pas dengan kebutuhanmu.</span>

            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm col-md-6 col-lg ftco-animate">
              <div class="destination">
                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-1.jpg)">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <div class="d-flex">
                    <div class="one">
                      <h3><a href="#">Apartemen</a></h3>
                      <p class="rate">

                        <span>8 Rating</span>
                      </p>
                    </div>
                    <div class="two">
                      <span class="price per-price">$40<br /><small>/night</small></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
              <div class="destination">
                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-2.jpg)">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <div class="d-flex">
                    <div class="one">
                      <h3><a href="#">Pemginapan Unik</a></h3>
                      <p class="rate">

                        <span>8 Rating</span>
                      </p>
                    </div>
                    <div class="two">
                      <span class="price per-price">$40<br /><small>/night</small></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
              <div class="destination">
                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-3.jpg)">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <div class="d-flex">
                    <div class="one">
                      <h3><a href="#">Villa</a></h3>
                      <p class="rate">

                        <span>8 Rating</span>
                      </p>
                    </div>
                    <div class="two">
                      <span class="price per-price">$40<br /><small>/night</small></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
              <div class="destination">
                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-4.jpg)">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <div class="d-flex">
                    <div class="one">
                      <h3><a href="#">Penginapan Budget</a></h3>
                      <p class="rate">

                        <span>8 Rating</span>
                      </p>
                    </div>
                    <div class="two">
                      <span class="price per-price">$40<br /><small>/night</small></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-sm col-md-6 col-lg ftco-animate">
              <div class="destination">
                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-5.jpg)">
                  <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                  </div>
                </a>
                <div class="text p-3">
                  <div class="d-flex">
                    <div class="one">
                      <h3><a href="#">Rumah</a></h3>
                      <p class="rate">

                        <span>8 Rating</span>
                      </p>
                    </div>
                    <div class="two">
                      <span class="price per-price">$40<br /><small>/night</small></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- TESTIMONI -->
      <section class="ftco-section testimony-section bg-light">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-md-5 heading-section ftco-animate">

              <h2 class="mb-4 pb-3"><strong>Apa </strong> Kata Mereka?</h2>
              <p>Ikut TOW yang ke-4 kalinya, pastinya happy banget, ini jadi pengalaman pertama kali lagi untuk keluar dari rumah dengan protokol kesehatan dan segala adaptasi kenormalan baru. Tapi di lain sisi juga sedih karena liat anjloknya pariwisata Indonesia. Bersyukur Kemenparekraf mengemas TOW dengan cara yang berbeda, jadi bisa sosialisasi CHSE ke masyarakat yang pastinya bisa ngebantu ekonomi buat Indonesia juga.</p>


            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 heading-section ftco-animate">
              <span class="subheading">Testimony</span>
              <h2 class="mb-4 pb-3"><strong>Kata</strong> mereka</h2>
              <div class="row ftco-animate">
                <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel">
                    <div class="item">
                      <div class="testimony-wrap d-flex">
                        <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text ml-md-4">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Guest from italy</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap d-flex">
                        <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text ml-md-4">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Guest from London</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap d-flex">
                        <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text ml-md-4">
                          <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                          <p class="name">Dennis Green</p>
                          <span class="position">Guest from Philippines</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>





    @endsection





