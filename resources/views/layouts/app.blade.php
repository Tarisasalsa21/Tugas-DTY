<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DTY Indorama</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <link href="{{ asset('sailor/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('sailor/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="{{ asset('sailor/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sailor/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('sailor/assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('sailor/assets/img/logo (2).png') }}" alt="Indorama Logo" style="max-height: 32px;">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#about" class="active">Company Profile</a></li>
          <li><a href="#main-product">Product Profile</a></li>
          <li><a href="#services">Production Process</a></li>
          <li><a href="#clients">Customers</a></li>
          <li><a href="#portfolio">Product Utilization</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#contact">Contact Us</a>

    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
             <img src="{{ asset('sailor/assets/img/logo (2).png') }}" alt="Indorama Logo" style="max-height: 30px; filter: brightness(0) invert(1);">
          </a>
          <p class="mt-3">Pusat pelatihan vokasi dan produksi benang poliester terintegrasi untuk mencetak tenaga ahli yang siap bersaing di industri global.</p>
          <div class="footer-contact pt-3">
            <p>Kawasan Industri Kembang Kuning, Ubrug</p>
            <p>Jatiluhur, Purwakarta, Jawa Barat 41152</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 264 200 345</span></p>
            <p><strong>Email:</strong> <span>info@dtyindorama.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Navigasi Cepat</h4>
          <ul>
            <li><a href="#about">Company Profile</a></li>
            <li><a href="#main-product">Product Profile</a></li>
            <li><a href="#services">Production Process</a></li>
            <li><a href="#clients">Customers</a></li>
            <li><a href="#portfolio">Product Utilization</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Informasi</h4>
          <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="#faq">F.A.Q</a></li>
            <li><a href="#team">Tim Kami</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Langganan Berita Kami</h4>
          <p>Dapatkan informasi terbaru mengenai produk dan layanan kami langsung ke email Anda!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© 2025 Tarisa Salsabila. All Rights Reserved.</p>
      <div class="credits">
        Template by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('sailor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('sailor/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('sailor/assets/js/main.js') }}"></script>

</body>
</html>