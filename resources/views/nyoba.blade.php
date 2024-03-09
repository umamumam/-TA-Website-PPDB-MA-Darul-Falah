<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="l_assets/img/favicon.png" rel="icon" />
    <link href="l_assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <link
    rel="stylesheet"
    href="https://unpkg.com/leaflet/dist/leaflet.css"/>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Vendor CSS Files -->
    <link href="l_assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="l_assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="l_assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="l_assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="l_assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="l_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="l_assets/css/style.css" rel="stylesheet" />
    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        

        <nav id="navbar" class="navbar">
          
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p>Informasi Pendaftaran Peserta Didik Baru</p>
          </header>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3>Gelombang Pertama</h3>
                <p><b>1 Maret s.d. 13 April 2023</b></p>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="service-box green">
                <i class="ri-discuss-line icon"></i>
                <h3>Gelombang Kedua</h3>
                <p><b>1 Mei s.d. 30 Juni 2023</b></p>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="service-box orange">
                <i class="ri-discuss-line icon"></i>
                <h3>Informasi Hari Pendaftaran</h3>
                <p>
                  <b>Hari Sabtu s.d Kamis</b>
                </p>
                <p><b> (Jumat Tutup)</b></p>
                <p><b>Pukul 07.30 s.d. 13.00 WIB</b></p>
              </div>
            </div>

            
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Contact</h2>
            <p>Contact Us</p>
          </header>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>Jln. Raya Tayu - Jepara Km. 18 Sirahan Cluwak Pati</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>WA :<a href="https://wa.me/6285728129782?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20pendaftaran" target="_blank"><b>085728129782</b></a></p></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>ma.darulfalahsirahan20@gmail.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Sabtu s.d Kamis<br />
                      <b>Jumat Tutup</b><br>Pukul 07.30 s.d. 13.00 WIB</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              
              <div class="info-box">
                <h3>LOKASI</h3>
                <div id="map" style="height: 300px;"></div>
              </div>
              <script>
                var map = L.map("map").setView([-6.522477838055217, 110.91696652514663], 15); // Gantilah koordinat sesuai kebutuhan
                L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                  
                }).addTo(map);
              </script>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      

      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="index.html" class="logo d-flex align-items-center">
                <img src="l_assets/img/logo.png" alt="" />
                <span>MA DARUL FALAH</span>
              </a>
              <p>
                Website Pendaftaran Peserta Didik Baru
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

            

            <div
              class="col-lg-3 col-md-12 footer-contact text-center text-md-start"
            >
              <h4>Contact Us</h4>
              <p>
                Jln. Raya Tayu - Jepara Km. 18 Sirahan Cluwak Pati<br />
                <strong>WA:</strong> 085728129782<br />
                <strong>Email:</strong> ma.darulfalahsirahan20@gmail.com<br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>mfthlmm</span></strong
          >. All Rights Reserved
        </div>
        
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="l_assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="l_assets/vendor/aos/aos.js"></script>
    <script src="l_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="l_assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="l_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="l_assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="l_assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="l_assets/js/main.js"></script>
  </body>
</html>


<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a :href="{{ route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"> Logout</a>
</form>