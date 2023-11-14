<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RAMADHAN KAREEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('depan')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('depan')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('depan')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('depan')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('depan')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('depan')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('depan')}}/css/style1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type='text/css'>.element,html{scrollbar-width:none}html::-webkit-scrollbar,.element::-webkit-scrollbar{display:none}</style>
</head>

<body>

<audio autoplay loop>
    <source src="{{asset('depan')}}/music/miduacinta.mp3" type="audio/mpeg">
  <source src="{{asset('depan')}}/music/miduacinta.mp3" type="audio/wav">
</audio>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a onclick="myFunction()" class="nav-link scrollto"><i class='bx bxs-moon'></i></i> <span>DARK - MODE</span></a></li>
        {{-- <li><a href="" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="" class="nav-link scrollto"><i class='bx bxs-star-half'></i></i> <span>Ramadhan</span></a></li>
        <!-- <li><a href="#resume" class="nav-link scrollto"><i class='bx bxs-moon'></i></i> <span>DARK - MODE</span></a></li> -->
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#testimonials" class="nav-link scrollto"><i class='bx bxs-message-dots'></i></i> <span>Saran</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class='bx bx-mail-send'></i> <span>Contact</span></a></li> --}}
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tambah Pesan</h2>
          <p></p>
        </div>
        @yield('isi')
        <br>
        <br>
      </div>
    </section>
    

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('depan')}}/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('depan')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('depan')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('depan')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('depan')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('depan')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('depan')}}/vendor/typed.js/typed.min.js"></script>
  <script src="{{asset('depan')}}/vendor/waypoints/noframework.waypoints.js"></script>



  <!-- Template Main JS File -->
  <script src="{{asset('depan')}}/js/main11.js"></script>
  <script src="{{asset('depan')}}/js/jsdark.js"></script>



</body>

</html>