<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RAMADHAN KAREEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{asset('sbadmin')}}/img/cc1.jpg" rel="icon">
  <link href="{{asset('sbadmin')}}/img/cc1.jpg" rel="apple-touch-icon">

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

<audio hidden autoplay loop>
    <source src="{{asset('depan')}}/music/miduacinta.mp3" type="audio/mpeg">
</audio>

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
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Berita</span></a></li>
        <li><a href="#testimonials" class="nav-link scrollto"><i class='bx bxs-message-dots'></i></i> <span>Saran</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class='bx bx-mail-send'></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>
        YUWAN
      </h1>
      <h2 class="text-white" id="demo"></h2>
      <script>
        // Tetapkan tanggal kita menghitung mundur
        var countDownDate = new Date("august 12, 2022 23:59:59").getTime();
        
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
      <p> <span class="typed" data-typed-items="Terima Kasih, Sudah Berkunjung,  "></span></p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>RAMADHAN</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <h4>“Barang siapa yang bergembira akan hadirnya bulan Ramadhan, maka jasadnya tidak akan tersentuh sedikit pun oleh api neraka.”</h4>
              <p>(HR. an-Nasa’i)</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <h4>"Hai orang-orang yang beriman, diwajibkan atas kamu berpuasa sebagaimana diwajibkan atas orang-orang sebelum kamu agar kamu bertakwa."</h4>
              <p>Al Baqarah 184-185</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <h4>Barangsiapa yang berpuasa yang melakukan salat malam pada bulan Ramadhan dengan penuh keimanan dan mengharap pahala dari Allah SWT, niscaya diampuni dosa-dosanya yang telah lalu."</h4>
              <p>HR. Bukhari dan Muslim</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    


    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="title1">
          <h2>tanggal</h2>
        </div>
        <div class="mask mask-custom shadow md-4">
          <div class="d-flex justify-content-center align-items-center h-100">
            <h3 class="text-white text-center"><span id="tanggalwaktu"></span></h3>
                    <script>
                        var tw = new Date();
                    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                    else (a=tw.getTime());
                    tw.setTime(a);
                    var tahun= tw.getFullYear ();
                    var hari= tw.getDay ();
                    var bulan= tw.getMonth ();
                    var tanggal= tw.getDate ();
                    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+"-"+bulanarray[bulan]+"-"+tahun+",  " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" WIB ");
                        </script>
          </div>
        </div>

        <div class="row">

      </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-update">Update</li>
              <li data-filter=".filter-masakan">Masakan</li>
              <li data-filter=".filter-game">Game</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


          @foreach ($t_project as $pro)

          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$pro->type}}">
            <div class="card shadow mb-4">
          <div class="card portfolio-wrap">
            <img src="{{asset('gambarproject')}}/{{$pro->image}}"  alt=""> 
            <div class="portfolio-info">
              <h4>{{$pro->nama}}</h4>
              <p>{{$pro->type}}</p>
              <div class="portfolio-links">
                <a href="gambarproject/{{$pro->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$pro->nama}}"><i class="bx bx-plus"></i></a>
                <a href="{{$pro->link}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$pro->nama}}</h5>
            <p class="card-text">{{$pro->deskripsi}}</p>
            <a href="{{$pro->link}}" type="button" class="btn text-white portfolio-details-lightbox" data-glightbox="type: external" style="background: #18d26e">Selengkapnya</a>
          </div>
          </div>
          </div>
          @endforeach

         

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PESAN</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($t_pesan as $cvd)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('depan')}}/img/saran/cc1.jpg" class="testimonial-img" alt="">
                <h3>{{$cvd->nama}}</h3>
                <h4>{{$cvd->status}}</h4>
                <p>{{$cvd->tgl}}</p>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{$cvd->pesan}}
                  
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->            

            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <br>
        <br>
        <div class="text-center">
          <button  class="text-center btn" style="background: #18d26e"><a href="/addpesan" class="text-white">Tambah Pesan</a></button>
        </div>
          
        </div>
        <br>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info" id="infoo">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>BONDOWOSO</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>anyougitr3@gmail.com </p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 085607.....</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            {!! Form::open(['route'=>'contact.submit'])!!}
            @if(Session::has('message'))
                      <div class="alert text-white" style="background: #f39">
                      {{Session('message')}}
                      </div>
                      @endif
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Kaka" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Kaka" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Pesan Kaka" required></textarea>
                </div>
                <br>
               
                <div class="text-center "><button class="btn"  type="submit">Send Message</button></div>
                {!!Form::close()!!}

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Yuwandana</h3>
      <p>Marhaban Ya Ramadhan <br>Terima kasih Kaka</p>
      <div class="social-links">
        <a href="https://t.me/yuwann99" class="twitter"><i class="bx bxl-telegram"></i></a>
        <a  class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/yuwanm20" class="instagram"><i class="bx bxl-instagram"></i></a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Yuwan</span></strong>. All Rights Reserved 2022
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
      </div>
    </div>
  </footer><!-- End Footer -->


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