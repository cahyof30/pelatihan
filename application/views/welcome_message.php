<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TreelinguApp</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />



  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              TreeLinguApp
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#about"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="#whyus"> Why Us </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#program"> Our Program </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('auth') ?>">Login</a>
                </li>

              </ul>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h1>
            MAU JAGO
            BERBAHASA?
            TreelinguApp
            SOLUSINYA!!
          </h1>
          <p>
            Lembaga Kursus dan Pelatihan Bahasa “TreeLinguApp”
            adalah salah satu lembaga pendidikan non formal dan pelatihan bahasa bersertifikat
            program pelatihan bahasa :bahasa Inggris, bahasa Korea, bahasa Mandarin, bahasa Jepang dan bahasa Jerman
          </p>
          <div class="hero_btn-continer">

          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="<?php echo base_url(); ?>assets/images/logo1.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <div class="common_style">

    <!-- about section -->
    <section class="about_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about_img-container">
              <img src="<?php echo base_url(); ?>assets/images/psa.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_detail-box" id="about">
              <h3>
                TreeLinguApp
              </h3>
              <p>
                TreeLinguApp mengajarkan, membina serta mencetak sumber daya manusia yang profesional dan berkualitas, yang mampu berkompetisi diera global dan memaknai tantangan sebagai peluang sesuai dengan
                perkembangan ilmu pengetahuan dan teknologi untuk memenuhi kebutuhan masyarakat, melalui pengembangan pembelajaran Bahasa Asing.
              <div class="">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end about section -->

    <!-- admission section -->
    <section class="admission_section" id="whyus">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="admission_detail-box">
              <h3>
                Mengapa memilih TreeLinguApp??
              </h3>
              <p>
                TreeLinguApp telah berhasil mencetak siswa-siswi yang mahir dalam berbagai bahasa dengan sangat baik karena TreeLinguApp memiliki metode pembelajaran yang unik dan inovatif, yaitu dengan dengan mengkombinasikan tehnologi multimedia, kelas pelatihan,
                dan aktifitas sosial untuk membantu siswa mempelajari berbagai bahasa dalam lingkungan yang natural dan bersahabat
              </p>
              <div class="">

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="admission_img-container">
              <img src="<?php echo base_url(); ?>assets/images/peserta.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- end admission section -->

    <!-- why section -->
    <section class="why_section" id="program">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="why_img-container">
              <img src="<?php echo base_url(); ?>assets/images/A.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="why_detail-box">
              <h3>
                PROGRAM UNGGULAN TREELINGUAPP
              </h3>
              <p>
                TreeLinguApp berdiri sejak tahun 2022. Program yang sangat diminati dan menjadi program unggulan di TreeLinguApp adalah kursus bahasa
                Inggris dan bahasa Jepang. Dalam metode pembelajaran TreeLinguaApp memfasilitasi peserta dengan semaksimal mungkin sehingga peserta merasa
                senang dan nyaman dalam pembelajaran. TreeLinguApp mempunyai program reguler dan program privat untuk peserta. </p>
              <div class="">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end why section -->

    <!-- determine section -->
    <section class="determine_section" id>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="determine_detail-box">
              <h3>
                Biaya??
              </h3>
              <p>
                Jangan khawatir mengenai biaya, karena di TreeLinguApp ada sistem angsur dan tidak akan memberatkan peserta mengenai biaya
                TreeLinguApp menyediakan berbagai paket pembelajaran bahasa dan tentunya bisa memilih sesuai dengan kemampuan kalian.
              </p>
              <div class="">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="determine_img-container">
              <img src="<?php echo base_url(); ?>assets/images/Gedung.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- end determine section -->

  </div>


  <!-- client section -->
  <section class="client_section layout_padding">
    <h2 class="">
      Testimonial
    </h2>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3">
                <div class="client_img-box">
                  <img src="<?php echo base_url(); ?>assets/images/client.png" alt="">
                </div>
              </div>
              <div class="col-md-9">
                <div class="client_detail-box">
                  <h5>
                    Rosalina Maharani
                  </h5>
                  <p>
                    Wow.. sangat seru sekali belajar di TreeLinguApp. Instruktur bahasa yang frienly membuat pembelajaran tidak membosankan
                    di TreeLinguApp saya jadi pintar berbahasa Mandarin. Trimakasih banyak TreeLinguApp
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3">
                <div class="client_img-box">
                  <img src="<?php echo base_url(); ?>assets/images/client.png" alt="">
                </div>
              </div>
              <div class="col-md-9">
                <div class="client_detail-box">
                  <h5>
                    Ardian Putra Sanjaya
                  </h5>
                  <p>
                    Belajar di TreeLinguApp benar-benar membuat saya menjadi pandai berbahasa Inggris. Pendaftaran dan sistem pembayaran yang
                    sangat mudah menjadi nilai plus di TreeLinguApp ini. Thankyou
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3">
                <div class="client_img-box">
                  <img src="<?php echo base_url(); ?>assets/images/client.png" alt="">
                </div>
              </div>
              <div class="col-md-9">
                <div class="client_detail-box">
                  <h5>
                    Putri Alexander
                  </h5>
                  <p>
                    TreeLinguApp memang terbaik. Fasilitas yang memuaskan serta pembelajaran yang menyenangkan membuat saya sangat senang belajar di
                    TreeLinguApp
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- end client section -->


  <section class="info_section layout_padding-top">
    <div class="info_logo-box">
      <h2>
        TreeLinguApp
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-3">
          <h5>
            About Us
          </h5>
          <p>
            TreeLinguApp mengajarkan, membina serta mencetak sumber daya manusia yang profesional dan berkualitas
          </p>
        </div>
        <div class="col-md-3">
          <h5>
            Useful Link
          </h5>
          <ul>
            <li>
              <a href="">
                Video games
              </a>
            </li>
            <li>
              <a href="">
                Remote control
              </a>
            </li>
            <li>
              <a href="">
                3d controller
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Program
          </h5>
          <p>
            Program yang sangat diminati dan menjadi program unggulan di TreeLinguApp adalah kursus bahasa Inggris dan bahasa Jepang
          </p>
        </div>
        <div class="col-md-3">


        </div>
      </div>
    </div>
    <div class="container">
      <div class="social_container">

        <div class="social-box">
          <a href="">
            <img src="<?php echo base_url(); ?>assets/images/fb.png" alt="">
          </a>
          <a href="">
            <img src="<?php echo base_url(); ?>assets/images/twitter.png" alt="">
          </a>
          <a href="">
            <img src="<?php echo base_url(); ?>assets/images/linkedin.png" alt="">
          </a>
          <a href="">
            <img src="<?php echo base_url(); ?>assets/images/instagram.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <!-- <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section> -->
  <!-- footer section -->

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>


</body>

</html>