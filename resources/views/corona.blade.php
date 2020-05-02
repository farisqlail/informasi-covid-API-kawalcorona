<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/img/logo.png')}}" rel="icon">
    <title>Live Data Corona</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light mt-2"><a href="{{url('/')}}">Lail Info</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#features">Indonesia</a></li>
          <li><a href="#table">Provinsi</a></li>
          <li><a href="#berita">Kamu Harus Tau</a></li>
          <li><a href="#berita">Hotline</a></li>

          {{-- <li class="get-started"><a href="#features">Get Started</a></li> --}}
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Website Informasi Live COVID-19</h1>
            <h2>Website penyedia informasi tentang corona yang ada di Indonesia secara lengkap</h2>
            <a href="#features" class="get-btn">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{asset('assets/img/banner.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>


  </section><!-- End Hero -->
    

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Corona Virus live Data</h2>
          <p>Total kasus COVID-19 yang terjadi di Indonesia sampai saat ini.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="icofont-simple-smile"></i>
                  <h4>Total Sembuh</h4>
                  <h6 class="ml-3">&nbsp;&nbsp;&nbsp;{{ $labelSembuh }} total orang sembuh</h6>
                  
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="icofont-sad"></i>
                  <h4>Total Positif</h4>
                  <h6 class="ml-3">&nbsp;&nbsp;&nbsp;{{ $labelPositif }} total orang positif</h6>
                  
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="icofont-crying"></i>
                  <h4>Total Orang Meinggal</h4>
                  <h6 class="ml-3">&nbsp;&nbsp;&nbsp;{{ $labelMeninggal }} total orang meninggal</h6>
                </div>

              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('assets/img/haha.png')}}" width="400px" class="img-fluid" style="margin-top: 50px;" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <section id="table" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Corona Virus live Data Setiap Provinsi</h2>
          <p>Live data kasus corona dalam setiap provinsi di Indonesia</p>
        </div><br><b></b>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Positif</th>
              <th scope="col">Sembuh</th>
              <th scope="col">Meninggal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataDaerah as $data1)
              @foreach ($data1 as $data2)
             
              <tr>
              <th scope="row">{{ $form_counter++ }}</th>
                <td>{{ $data2["Provinsi"] }}</td>
                <td>{{ $data2["Kasus_Posi"] }}</td>
                <td>{{ $data2["Kasus_Semb"] }}</td>
                <td>{{ $data2["Kasus_Meni"] }}</td>
              </tr>
              @endforeach
                
            @endforeach
                
            
            
          </tbody>
        </table>
      </div>
    </section>

    <section id="berita" class="berita">
      <div class="container">

        <div class="section-title">
          <h2>Baca Juga tentang COVID</h2>
          <p>Baca juga informasi tentang Corona Virus yang menjadi pandemi sekarang.</p>
        </div>

        <div class="row no-gutters">
          <div class="image col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('assets/img/baca.png')}}" width="350px" class="img-fluid" style="margin-top: 50px;" alt="">
          </div>

          <div class="col-md-7 pt-8">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                 <a href="https://infeksiemerging.kemkes.go.id/" target="blank">
                   <div class="card">
                    <div class="card-body">
                      <h6 style="font-weight: 600 !important;">Media resmi Indonesia tentang penyebaran COVID-19 di Indonesia</h6>
                      <small>Kementrian Kesehatan</small>
                    </div>
                  </div>
                 </a>
                  
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                 <a href="https://www.sehatq.com/artikel/daftar-rumah-sakit-untuk-penanganan-virus-corona-covid-19" target="blank">
                  <div class="card">
                    <div class="card-body">
                      <h6 style="font-weight: 600;">Daftar Rumah Sakit Rujukan Virus Corona untuk Tangani Covid-19 </h6>
                      <small>Sehatq.com</small>
                    </div>
                  </div>
                  
                 </a>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" target="blank">
                    <div class="card">
                      <div class="card-body">
                        <h6 style="font-weight: 600;">Coronavirus disease (COVID-19) advice for the public</h6>
                        <small>WHO</small>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <a href="https://www.unicef.org/indonesia/id/coronavirus" target="blank">
                    <div class="card">
                      <div class="card-body">
                        <h6 style="font-weight: 600;">Novel coronavirus (COVID-19): Hal-hal yang perlu Anda ketahui</h6>
                        <small>Unicef Indonesia</small>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="hotline" class="hotline">
      <div class="container">

        <div class="section-title">
          <h2>Layanan Hotline</h2>
          <p>Layanan hotline untuk setiap daerah di Indonesia.</p>
        </div><br>

        <div class="row"  data-aos="fade-up">
          <div class="col">
            <div class="card">
              <div class="card-body" align="center">
                <img src="{{ asset('assets/img/mentri.png') }}" width="70px" alt="">
                <a href="tel:021-5210-411"><h5 class="mt-2">021-5210-411</h5></a>
                <small>Kementrian Kesehatan</small>
              </div>
            </div><br>
          </div><br>
          <div class="col">
            <div class="card">
              <div class="card-body" align="center">
                <img src="{{ asset('assets/img/logo-dki.png') }}" width="68px" alt="">
                <a href="tel:0813-8837-6955"><h5 class="mt-2">0813-8837-6955</h5></a>
                <small>Pemprov DKI Jakarta</small>
              </div>
            </div><br>
          </div><br>
          <div class="col">
            <div class="card">
              <div class="card-body" align="center">
                <img src="{{ asset('assets/img/jatengnew.png') }}" width="70px" alt="">
                <a href="tel:024-358-0713"><h5 class="mt-2">024-358-0713</h5></a>
                <small>Pemprov Jawa Tengah</small>
              </div>
            </div><br>
          </div><br>
          <div class="col">
            <div class="card">
              <div class="card-body" align="center">
                <img src="{{ asset('assets/img/jatim.png') }}" width="79px" alt="">
                <a href="tel:031-843-0313"><h5 class="mt-2">031-843-0313</h5></a>
                <small>Pemprov Jawa Timur</small>
              </div>
            </div>
          </div>

        </div><br>

          <div class="row" align="center"  data-aos="fade-up">
            <div class="col">
              <div class="card">
                <div class="card-body" align="center">
                  <img src="{{ asset('assets/img/jabar.png') }}" width="70px" alt="">
                  <a href="tel:0811-209-3306"><h5 class="mt-2">0811-209-3306</h5></a>
                  <small>Pemprov Jawa Barat</small>
                </div>
              </div><br>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body" align="center">
                  <img src="{{ asset('assets/img/yogya.png') }}" width="65px" alt="">
                  <a href="tel:0274-555-585"><h5 class="mt-2">0274-555-585</h5></a>
                  <small>Pemprov D.I Yogyakarta</small>
                </div>
              </div><br>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body" align="center">
                  <img src="{{ asset('assets/img/papua.png') }}" width="72px" alt="">
                  <a href="tel:0967-533616"><h5 class="mt-2">0967-533616</h5></a>
                  <small>Provinsi Papua</small>
                </div>
              </div><br>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body" align="center">
                  <img src="{{ asset('assets/img/bali.png') }}" width="110px" alt="">
                  <a href="tel:0361-227911-15"><h5 class="mt-2">0361-227911-15</h5></a>
                  <small>Provinsi Bali</small>
                </div>
              </div><br>
            </div>


          </div>
      </div>
    </section>
        
{{-- 
        <div class="chart">
            <div class="row" align="center">
                <div class="col-lg-12" style="width: 50%;">
                    {!! $chartDaerah->container() !!}
                </div>
            </div>
        </div>
        {!! $chartDaerah->script() !!} 
        --}}

        <footer id="footer">
      
          <div class="container py-4">
            <div class="copyright">
              &copy; Copyright All Rights Reserved
            </div>
            <div class="credits">
              Build and Designed by <a href="https://github.com/faris110900" style="color: #fff;">Faris Rizqilail</a>
            </div>
          </div>
        </footer><!-- End Footer -->
      
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>
</html>