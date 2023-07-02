<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>เว็บแอพพลิเคชั่นร้านณิชชาเจริญยิ่ง จำกัด</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png')}}" >
  <link rel="apple-touch-icon" href="{{ asset('frontend/assets/img/apple-touch-icon.png')}}" >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" >
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" >
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" >
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" >
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css')}}" >
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" >

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}" >

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#hero">Nicha Charoen Ying</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Product</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>ณิชชาเจริญยิ่ง การไฟฟ้า</h1>
          <h2>ร้านจำหน่ายอุปกรณ์ไฟฟ้า ประปา ฮาร์ดแวร์ <br> รับเหมาเดินระบบไฟฟ้าภายในและนอกอาคาร.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#portfolio" class="btn-get-started scrollto">Product</a>
            <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>-->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('frontend/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              บริษัทณิชชาเจริญยิ่ง จำกัด ประกอบธุรกิจประเภทการขายส่งและการขายปลีกการซ่อมยานยนต์<br>
              และจักรยานยนต์ โดยให้บริการด้าน การขายส่งวัสดุก่อสร้างอื่นๆซึ่งมิได้จัดประเภทไว้ในที่อื่น
            </p>
            <p>
              ตัวเลือกของบริการ: การเลือกซื้อในร้านค้า · มารับของที่ร้าน · บริการจัดส่ง
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
              <li><i class="ri-check-double-line"></i>วันที่จดทะเบียน: 19 เมษายน 2545</li>
              <li><i class="ri-check-double-line"></i>ชื่อนิติบุคคล: ณิชชาเจริญยิ่ง จำกัด</li>
              <li><i class="ri-check-double-line"></i>หมวดธุรกิจ (A-U):G: การขายส่งและการขายปลีกการซ่อมยานยนต์และ จักรยานยนต์</li>
              <li><i class="ri-check-double-line"></i>กลุ่มธุรกิจ (TSIC): 46639 : การขายส่งวัสดุก่อสร้างอื่นๆซึ่งมิได้จัดประเภทไว้ในที่อื่น</li>
            </ul>
            <!-- <a href="#" class="btn-learn-more">Learn More</a>-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>WELCOME TO NICHA CHAROEN YING</h3>
            <p>ยินดีต้องรับเข้าสู่ เว็บไซต์ของร้านณิชาเจริญยิ่ง ร้านที่มีอุปกรณ์ ไฟฟ้าและเครื่องมือช่างมากมายที่พร้อม<br>จะอำนวยความสะดวกความต้องการ และพร้อมที่จะบริการทุกท่าน</p>
          </div>
          <!--
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
          -->
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PRODUCT</h2>
          <p>สินค้าดี มีคุณภาพ ราคาถูก ปลอดภัย การสั่งซื้อจัดส่งรวดเร็ว บริการด้วยความใส่ใจ</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">สายไฟ สวิตปลั๊ก ปลั๊กไฟ</li>
          <li data-filter=".filter-card">อุปกรณ์เครื่องมือช่าง</li>
          <li data-filter=".filter-web">ท่อ & ข้อต่อ</li>
        </ul>

<!--ชุดที่ 1-->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>CSCรางปลั๊กไฟ มอก.5 ช่อง 1สวิตซ์ <br> รุ่นAS551 ยาว 3 เมตร </h4>
              <p>ราคา: 379.00฿</p>
              <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
              title="<b>CSCรางปลั๊กไฟ มอก.5 ช่อง 1สวิตซ์ รุ่นAS551<br> ยาว 3 เมตร <br><br> ราคา: 379.00฿"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="" title=""><i class=""></i></a>
            </div>
        </div>
        </div>
<!--จบชุดที่ 1-->


        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>ติดต่อร้านณิชชา </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>หมู่ที่ 5 56/53 ถ. บางกรวย-ไทรน้อย ตำบล บางกร่าง อำเภอเมืองนนทบุรี นนทบุรี 11000</p>
              </div>

              <div class="facebook">
                <i class="bi bi-facebook"></i>
                <h4>Facebook:</h4>
                <p><a href="https://th-th.facebook.com/nitchaelectric/">ณิชชาเจริญยิ่ง การไฟฟ้า</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>02 923 2290</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30989.75353200166!2d100.4524786688917!3d13.855887127919287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29a8d292a56cd%3A0x7a3682422df2f80b!2z4Lia4LiI4LiBLiDguJPguLTguIrguIrguLLguYDguIjguKPguLTguI3guKLguLTguYjguIc!5e0!3m2!1sth!2sth!4v1673685736227!5m2!1sth!2sth" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
<!--
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
-->
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
