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

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a onclick="myFunction()" class="nav-link scrollto"><i class='bx bxs-moon'></i></i> <span>DARK - MODE</span></a></li>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class='bx bxs-star-half'></i></i> <span>Ramadhan</span></a></li>
        <!-- <li><a href="#resume" class="nav-link scrollto"><i class='bx bxs-moon'></i></i> <span>DARK - MODE</span></a></li> -->
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#testimonials" class="nav-link scrollto"><i class='bx bxs-message-dots'></i></i> <span>Saran</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class='bx bx-mail-send'></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1><span>R</span>
        <span>A</span>
        <span>M</span>
        <span>A</span>
        <span>D</span>
        <span>H</span>
        <span>A</span>
        <span>N&nbsp;</span>
        <span>K</span>
        <span>A</span>
        <span>R</span>
        <span>E</span>
        <span>E</span>
        <span>M</span></h1>
      <h2 class="text-white" id="demo"></h2>
      <script>
        // Tetapkan tanggal kita menghitung mundur
        var countDownDate = new Date("april 2, 2022 23:59:59").getTime();
        
        // Perbarui hitungan mundur setiap 1 detik
        var x = setInterval(function() {
        
          // Dapatkan tanggal dan waktu hari ini
          var now = new Date().getTime();
            
          // Temukan jarak antara sekarang dan tanggal hitung mundur
          var distance = countDownDate - now;
            
          // Perhitungan waktu untuk hari, jam, menit dan detik
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Keluarkan hasil dalam elemen dengan id = "demo"
          document.getElementById("demo").innerHTML = "- "+ days + " Hari " + hours + "h "
          + minutes + "m " + seconds + "s";
            
          //Jika hitungan mundur selesai, tulis beberapa teks
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "SELAMAT MENUNAIKAN IBADAH PUASA";
          }
        }, 1000);
        </script>
      <br>
      <p>WAJIB <span class="typed" data-typed-items="SAHUR, BERBUKA, TARAWIH yah,"></span></p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </section><!-- End Hero -->

  <!-- POPUP -->

  <div class="popup-wrapper" id="popup">
    <div class="popup-container">
  
      <!-- Konten popup, silahkan ganti sesuai kebutughan -->
      <form action="/ramadhan"  class="popup-form">
        <h3>Kaka jangan pakai VPN yah!</h3>
        <div class="input-group">
          <input type="submit" value="Reload" >
          </p>
        </div>
      </form>
    </div>
  </div>


  <style>
    @-webkit-keyframes autopopup {
  from {opacity: 0;margin-top:-200px;}
  to {opacity: 1;}
}
@-moz-keyframes autopopup {
  from {opacity: 0;margin-top:-200px;}
  to {opacity: 1;}
}
@keyframes autopopup {
  from {opacity: 0;margin-top:-200px;}
  to {opacity: 1;}
}
/* end animasi popup */
/*style untuk popup */	
#popup {
  background-color: #000;
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:0;
  z-index: 999;
  -webkit-animation:autopopup 1s;
  -moz-animation:autopopup 1s;
  animation:autopopup 1s;
}
#popup:target {
  -webkit-transition:all 1s;
  -moz-transition:all 1s;
  transition:all 1s;
  opacity: 0;
  visibility: hidden;
}

@media (min-width: 768px){
  .popup-container {
    width:600px;
  }
}
@media (max-width: 767px){
  .popup-container {
    width:100%;
  }
}
.popup-container {
  position: relative;
  margin:7% auto;
  padding:30px 50px;
  background-color: #fafafa;
  color:#333;
  border-radius: 3px;
}

/* end style popup */

/* style untuk isi popup */
.popup-form {
  margin:10px auto;
}
  .popup-form h2 {
    margin-bottom: 5px;
    font-size: 37px;
    text-transform: uppercase;
  }
  .popup-form .input-group {
    margin:10px auto;
  }
    .popup-form .input-group input {
      padding:17px;
      text-align: center;
      margin-bottom: 10px;
      border-radius:3px;
      font-size: 16px; 
      display: block;
      width: 100%;
    }
    .popup-form .input-group input:focus {
      outline-color:#FB8833; 
    }
    .popup-form .input-group input[type="submit"] {
      background-color: #18d26e;
      color: #fff;
      border: 0;
      cursor: pointer;
    }
    .popup-form .input-group[type="submit"]:focus {
      box-shadow: inset 0 3px 7px 3px #ea7722;
    }

  </style>

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