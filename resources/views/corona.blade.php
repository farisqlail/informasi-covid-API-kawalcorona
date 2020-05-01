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
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light mt-2"><a href="index.html">LailInfo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#features">Info Seluruh Indonesia</a></li>
          <li><a href="#table">Info Seluruh Provinsi</a></li>

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
            <a href="#features" class="download-btn">Get Started</a>
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
              Designed by <a href="https://github.com/faris110900" style="color: #fff;">Faris Rizqilail</a>
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