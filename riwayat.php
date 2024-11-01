<!DOCTYPE html>
<html lang="en">

<head>
    <title>Borneo Snow Wash</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/Borneo.png">

    <style>
        .table thead th {
            background-color: #32b2e9;
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table-container {
            margin-left: auto;
            margin-right: auto;
            max-width: 90%;
            /* Set maximum width to control how much space the table takes */
        }
    </style>
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
                    <span class="date-icon"><i style="color:#32b2e9" class="fa fa-calendar-plus-o"></i> 08.00 - 17:00
                        (Setiap Hari
                        senin-sabtu)</span>
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
                <a href="index.php" class="navbar-brand">
                    <p>Borneo Snow Wash</p>
                    <img src="images/borneopng.png" alt="Logo" width="60" height="60"
                        style="vertical-align:middle;margin: -55px -65px">
                </a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="smoothScroll">Home</a></li>
                    <li><a href="index.php" class="smoothScroll">Tentang Kami</a></li>
                    <li><a href="index.php" class="smoothScroll">Pendaftaran</a></li>
                    <li><a href="index.php" class="smoothScroll">Kritik dan Saran</a></li>
                    <li><a href="riwayat.php" class="smoothScroll">Riwayat Cucian</a></li>
                    <li class="appoinment-btn-primary"><a href="login.php">Login</a></li>
                </ul>
            </div>

        </div>
    </section>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body table-responsive table-container">
                            <div class="card-header">
                                <strong class="card-title">Data Riwayat Cucian</strong>
                            </div>
                            <table class="table table-striped table-bordered table-hover">
                                <?php
                                include ("config/koneksi.php");
                                $sqll = "SELECT * FROM pendaftaran ORDER BY id_pendaftaran DESC";
                                $resultt = mysql_query($sqll);
                                if (mysql_num_rows($resultt) > 0) {
                                    ?>
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.Hp</th>
                                            <th>Type Kendaraan</th>
                                            <th>Plat Nomor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        while ($data = mysql_fetch_array($resultt)) {
                                            ?>
                                            <tr>
                                                <td><?= $nomor++; ?></td>
                                                <td><?= $data['nama']; ?></td>
                                                <td><?= $data['alamat']; ?></td>
                                                <td><?= $data['no_hp']; ?></td>
                                                <td><?= $data['type_kendaraan']; ?></td>
                                                <td><?= $data['plat_nomor']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <?php
                                } else {
                                    echo '<div class="alert alert-danger">Data not found!</div>';
                                    echo mysql_error();
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

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

                <div class="col-md-4 col-sm-4">&nbsp;</div>

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
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Borneo Snow Wash. All rights reserved.
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