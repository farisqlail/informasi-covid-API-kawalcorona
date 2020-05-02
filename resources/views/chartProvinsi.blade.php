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
        <h1 class="text-light mt-2"><a href="{{url('/')}}">Lail Info</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#features">Info Seluruh Indonesia</a></li>
          <li><a href="#table">Info Seluruh Provinsi</a></li>
          <li><a href="{{ url('/ChartProvinsi') }}">Data Chart Perprovinsi</a></li>

          {{-- <li class="get-started"><a href="#features">Get Started</a></li> --}}
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


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



        <div class="chart" style="margin-top: 8%;">
            <div class="row mx-auto" align="center">
                <div class="col-lg-12"  style="width: 50%;">
                    {!! $chartDaerah->container() !!}
                </div>
            </div>
        </div>

        {!! $chartDaerah->script() !!} 

    </main>
    <footer id="footer" style="margin-top: 80px;">
    
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