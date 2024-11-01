<?php
include "config/koneksi.php";
?>
<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <title>Borneo Snow Wash</title>
     <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="shortcut icon" type="image/x-icon" href="images/Borneo.png">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Kinclongkan kendaraan anda bersama Borneo Snow Wash</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i style="color:#32b2e9" class="fa fa-phone"></i> 0895383043861</span>
                         <span class="date-icon"><i style="color:#32b2e9" class="fa fa-calendar-plus-o"></i> 08.00 -
                              17:00 (Setiap Hari senin-sabtu)</span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">
                         <p>Borneo Snow Wash</p><img src="images/borneopng.png" alt="Smiley face" width="60" height="60"
                              style="vertical-align:middle;margin: -55px -65px">
                    </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">Tentang Kami</a></li>
                         <li><a href="#pendaftaran" class="smoothScroll">Pendaftaran</a></li>
                         <li><a href="#saran" class="smoothScroll">Kritik dan Saran</a></li>
                         <li><a href="riwayat.php" class="smoothScroll">Riwayat Cucian</a></li>
                         <li class="appoinment-btn-primary"><a href="login.php">Login</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Percayakan Noda Kendaraan Bersama Kami</h3>
                                        <h1>Broneo Snow Wash</h1>
                                        <a href="#about" class="btn btn-primary">Tentang
                                             Kami</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Kinclongkan kendaraan anda hanya disini</h3>
                                        <h1>Borneo Snow Wash</h1>
                                        <a href="#appointment" class="btn btn-primary">Datang
                                             Sekarang</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Dan Berikan Masukan Kepada Kami</h3>
                                        <h1>Kepuasan Anda Adalah Semangat Kami</h1>
                                        <a href="#saran" class="btn btn-primary">Kirim
                                             Saran</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Tentang Kami</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>"Borneo Snow wash merupakan salah satu bidang usaha yang menawarkan jasa perawatan
                                        kendaraan berupa pencucian dan pembersihan kendaraan."</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Bersih</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3> Dijamin Kilat</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Wangi</h3>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                        <h3>Dijamin Puas</h3>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <section id="pendaftaran">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="pendaftaran-form" role="form" method="post" action="proses_pendaftaran.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Pendaftaran</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                             placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                             placeholder="Alamat Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="no_hp">No.hp</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                                             placeholder="No HP Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="type_kendaraan">Type kendaraan</label>
                                        <input type="text" class="form-control" id="type_kendaraan"
                                             name="type_kendaraan" placeholder="Type Kendaraan Anda">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="plat_nomor">Plat Nomor</label>
                                        <input type="text" class="form-control" id="plat_nomor" name="plat_nomor"
                                             placeholder="Plat Nomor Anda"><br>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit"
                                             name="saran">Daftar</button>
                                   </div>

                              </div>
                    </div>
                    </form>
               </div>

          </div>
          </div>
     </section>

     <!-- ABOUT -->
     <section id="saran">
          <div class="container">
               <div class="row">



                    <div class="col-md-12 col-sm-12">
                         <!-- CONTACT FORM HERE -->
                         <form id="saran-form" role="form" method="post" action="proses_saran.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Kritik dan Saran</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                             placeholder="Nama Anda" required="">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="pesan">Pesan</label>
                                        <input type="pesan" class="form-control" id="pesan" name="pesan"
                                             placeholder="Pesan Anda"><br>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="form-control" id="cf-submit" name="saran">Kirim
                                             Saran</button>
                                   </div>

                              </div>
                    </div>
                    </form>
               </div>

          </div>
          </div>
     </section>



     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informasi Lanjut</h4>
                              <p>Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 0895383043861</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">andikaganteng.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         &nbsp;
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Waktu Operasional</h4>
                                   <p>Senin - sabtu <span>08:00 - 17:00</span></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-6 col-sm-6">
                              <div class="copyright-text">
                                   Copyright &#169;
                                   <script
                                        type='text/javascript'>var creditsyear = new Date(); document.write(creditsyear.getFullYear());</script>
                                   <a expr:href='data:blog.homepageUrl'>
                                        <data:blog.title />
                                   </a>. All rights reserved.
                              </div>
                         </div>

                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>