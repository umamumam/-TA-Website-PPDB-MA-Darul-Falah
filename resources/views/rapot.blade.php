@extends('layouts1.app')
  

@section('contents')
<style>
      .textbox-container {
        text-align: center;
        padding: 10px;
      }

      .textbox {
        width: 320px; /* Lebar text box */
        padding: 7px; /* Ruang dalam text box */
        background-color: #ffffff; /* Warna latar belakang text box */
        border: 2px solid #333; /* Border text box */
        border-radius: 10px; /* Sudut border melengkung */
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
        margin: 0 auto; /* Membuat text box berada di tengah horizontal */
      }
      
</style>

      <br>
      
<style>
  .card-logo {
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
  
  <div class="card-body">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
            <p>Upload Nilai Raport</p>
            <p>Pastikan Anda Telah Mengisi Data Pendaftaran Dengan Benar </p>
          </header>

          
    <a href="{{ route('nilais.create') }}" class="btn btn-info btn-lg">Input Nilai Raport</a>
    <header class="section-header">
      
      <br>
            <p>Jika sudah meng-inputkan nilai silahkan mengecek nama anda di data Validasi Siswa</p>
          </header>
</div>
            
     
    </main>
    <!-- End #main -->

    

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

</div>
@endsection
