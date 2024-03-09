@extends('layouts1.app')


@section('contents')
<div class="card-logo">
        <img src="{{ asset('admin_assets\img\Logo.png') }}" align="left" alt="Logo" />
        <header class="section-header">
            <p>SELAMAT DATANG DI WEBSITE PPDB</p>
            <p>MA DARUL FALAH SIRAHAN</p>
          </header>
</div>
<div class="galery">
<div style="background-image: url('{{ asset('l_assets/img/marwah.jpg') }}');"></div>
  <div style="background-image: url('{{ asset('l_assets/img/Prestasi.png') }}');"></div>
  <div style="background-image: url('{{ asset('admin_assets/img/Sekolah.png') }}');"></div>
  <div style="background-image: url('{{ asset('admin_assets/img/pelantikan.jpg') }}');"></div>
  <div style="background-image: url('{{ asset('admin_assets/img/ekskul.jpg') }}');"></div>
</div>
<style>
   /* Pop-up style */
   .popup {
    position: fixed;
    bottom: 20px; /* Mengatur jarak dari bawah */
    right: 20px; /* Mengatur jarak dari kanan */
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px;
    border-radius: 10px;
    color: white;
    z-index: 9999;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease; /* Tambahkan transition untuk animasi opacity dan transform */
    transform: translateY(100%); /* Sembunyikan pop-up di luar layar */
  }

  .popup.show {
    opacity: 1;
    transform: translateY(0); /* Tampilkan pop-up dengan animasi translasi */
  }

  .popup-content {
    text-align: center;
  }

  .popup-content .close {
    position: absolute;
    top: 10px;
    right: 10px;
    color: white;
    cursor: pointer;
    font-size: 20px;
  }

  .btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }  .card-logo {
        padding: 10px;
        text-align: center;
      }
  .card-logo img {
        width: 110px;
        height: 110px;
        margin-left: 110px;
      }
  .galery {
    display: flex;
    height: 20rem;
    gap: 1rem;
    margin-top: 60px;
    margin-right: 10px;
  }
  .galery > div {
    flex: 1;
    border-radius: 1rem;
    background-position: center;
    background-repeat: no-repeat;
    background-size: auto 100%;
    transition: all 0.8s cubic-bezier(0.25, 0.4, 0.45, 1.4);
  }
  .galery > div:hover {
    flex: 5;
  }
</style>
<br>
  <div class="card text-center">
  <div class="card-header">
  <h4 class="m-0 font-weight-bold text-primary" align="center">PENDAFTARAN PESERTA DIDIK MA DARUL FALAH TELAH DIBUKA</h4>
  </div>
  <div class="card-body">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    
    <meta content="" name="description" />
    <meta content="" name="keywords" />

<!-- Favicons -->
<link href="{{ asset('l_assets/img/favicon.png') }}" rel="icon" />
<link href="{{ asset('l_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- Vendor CSS Files -->
<link href="{{ asset('l_assets/vendor/aos/aos.css') }}" rel="stylesheet" />
<link href="{{ asset('l_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('l_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('l_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
<link href="{{ asset('l_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
<link href="{{ asset('l_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

<!-- Template Main CSS File -->
<link href="{{ asset('l_assets/css/style.css') }}" rel="stylesheet" />
    
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
                <p><b>4 Februari s.d. 31 Maret 2024</b></p>
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
                <p><b>21 April s.d. 30 Juni 2024</b></p>
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
            <div data-aos="fade-up" data-aos-delay="500">
              <div class="service-box green">
                <h3>Syarat Pendaftaran</h3>
                <br />
                <p>
                  <b>Fotokopi Ijazah dan SKL MTs/SMP dilegalisir 2 lembar</b>
                </p>
                <p>
                  <b>Fotokopi Buku Rapor Kelas VII, VIII dan IX 2 lembar</b>
                </p>
                <p><b>Pas foto ukuran 3x4 2 lembar</b></p>
                <p><b>Fotokopi Kartu Keluarga (KK) 2 lembar</b></p>
                <p><b>Fotokopi KTP orang tua (Ayah & Ibu) 2 lembar</b></p>
                <p><b>Fotokopi Akta Kelahiran 2 lembar</b></p>
                <p>
                  <b
                    >Fotokopi Kartu KIP/KIS/PKH/KKS bagi yang memiliki 2
                    lembar</b
                  >
                </p>
                <p><b>Mengikuti ujian seleksi masuk</b></p>
                <p><b>Keterangan lebih lanjut hubungi Contact Person</b></p>
                <br>
                <button type="button" class="btn btn-primary btn-lg" style="color: white;">
                  <a href="{{ route('ppdbs.create') }}" style="color: inherit; text-decoration: none;">DAFTAR SEKARANG</a>
                </button>
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

      
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('l_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('l_assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('l_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('l_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('l_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('l_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('l_assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('l_assets/js/main.js') }}"></script>

</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Fungsi untuk menampilkan pop-up
    function showPopup() {
      // Buat elemen div untuk pop-up
      var popup = document.createElement("div");
      popup.className = "popup";
      
      // Isi pop-up dengan pesan
      popup.innerHTML = `
        <div class="popup-content">
          <span class="close">&times;</span>
          <p>Pendaftaran Telah Dibuka!</p>
          <button onclick="window.location.href='{{ route('ppdbs.create') }}'" class="btn btn-primary">DAFTAR SEKARANG</button>
        </div>
      `;
      
      // Tambahkan pop-up ke dalam body
      document.body.appendChild(popup);
      
      // Tambahkan event listener untuk menutup pop-up saat tombol close diklik
      popup.querySelector(".close").addEventListener("click", function() {
        document.body.removeChild(popup);
      });
      
      // Tambahkan efek animasi saat pop-up muncul
      setTimeout(function() {
        popup.classList.add("show");
      }, 100);
    }
    
    // Panggil fungsi showPopup setelah halaman dimuat
    showPopup();
  });
</script>

  
@endsection