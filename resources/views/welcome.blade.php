<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/itg.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    @include('includes.landing.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center ">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Layanan Pengaduan</h1>
          <h2 data-aos="fade-up" data-aos-delay="200">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat , aman dan nyaman.</h2>
          <div data-aos="fade-up" data-aos-delay="400">
            <a href="{{ url('login')}}" class="btn-get-started scrollto">Laporkan!</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  @include('includes.landing.javascript')

</body>

</html>
