<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MTS NU TBS KUDUS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness - v4.10.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h6 style="color: white;">
                    <img src="assets/img/logo.png" alt="" style="margin-right: 10px;">
                    Madrasah Tsanawiyah NU Tasywiquth Thullab Salafiyah (TBS) Kudus
                </h6>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="sambutankepalamadrasah.php">Sambutan Kepala Madrasah</a></li>
                            <li><a href="profilmadrasah.php">Profil Madrasah</a></li>
                            <li><a href="visimisi.php">Visi Misi & Tujuan</a></li>
                            <li><a href="pendidik.php">Pendidik & Tenaga Kependidikan</a></li>
                            <li><a href="kurikulum.php">Kurikulum</a></li>
                            <li><a href="sarana.php">Sarana & Prasarana</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="brosur.php">Berita</a></li>
                    <li><a class="nav-link" href="kontakkami.php">Kontak Kami</a></li>
                    <?php
                        if($_SESSION['logged_in'] == true) {
                            echo "<li class='dropdown' style='background-color: #0275d8;'><a href='#'><span>Akun</span> <i
                                        class='bi bi-chevron-down'></i></a>
                                <ul class='oke'>
                                    <li><a href='ppdb/beranda.php'>Profil Saya</a></li>
                                    <li><a href='foto-brosur.php'>Brosur</a></li>
                                    <li><a href='ppdb/logout.php'>Logout</a></li>
                                </ul>
                            </li>";
                        }else {
                            echo "<li class='dropdown' style='background-color: #0275d8;'><a href='#'><span>PPDB</span> <i
                                        class='bi bi-chevron-down'></i></a>
                                <ul class='oke'>
                                    <li><a href='ppdb/login.php'>Daftar Madrasah</a></li>
                                    <li><a href='ppdb/register-ulang.php'>Daftar Ulang MI/MPTS</a></li>
                                    <li><a href='foto-brosur.php'>Brosur</a></li>
                                </ul>
                            </li>";
                        }

                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2><span style="color: #4ECB71;">Sambutan Kep</span>ala Madrasah</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="assets/img/guru/Salim.jpg" alt="Salim"
                                        style="width: 450px; height: 350px;">
                                </a>
                            </div><br>
                            <div class="single-well" style="text-align: center;">
                                <h4 class="sec-head">Salim, S.Ag., M.Pd.</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-8 col-sm-10 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <p>
                                    MTs NU Tasywiquth Thullab Salafiyah (TBS) Kudus berlokasi di Jalan KH Turaichan
                                    Adjhuri 23 Kelurahan Kajeksan kecamatan Kota Kudus merupakan salah satu lembaga
                                    pendidikan Islam yang didirikan oleh Para Alim dan Para bapak kyai sepuh Kudus pada
                                    tanggal 29 Sya'ban 1362 H/30 Desember 1943 M. dengan tujuan ???Tafaqquh fid Diin???
                                    (memperdalam ilmu agama) untuk mencetak dan mempersiapkan kader-kader Islam
                                    ahlusunnah wal Jama'ah yang alim, cerdas dan terampil berwawasan kebangsaan dan
                                    berakhlaq mulia
                                </p>
                                <p>
                                    Kurikulum MTs NU Tasywiquth Thullab Salafiyah (TBS) Kudus didesain dengan kolaborasi
                                    kurikulum nasional dan kurikulum pondok pesantren dengan pendekatan pembelajaran
                                    bervariatif sesuai karakteristik materi pelajaran dan Profil Pelajar Pancasila serta
                                    profil Pelajar Rahmatan Lil Alamin dengan pelayanan prima.
                                </p>
                                <p>
                                    Disamping itu, MTs NU TBS Kudus melaksanakan pengembangan diri sebagai media
                                    penyaluran minat bakat peserta didik yang berorientasi pada interpreuner, skill,
                                    leadership untuk mengekspresikan aktualisasi diri mereka dengan harapan supaya
                                    mutakhorijin atau lulusan MTs NU TBS Kudus ini memiliki kompetensi kecerdasan
                                    akademik maupun kecerdasan sosial sehingga mereka dapat melanjutkan pendidikan pada
                                    sekolah-sekolah favorit sesuai harapan orang tua, serta ilmu-ilmu yang mereka
                                    dapatkan dari bangku madrasah bermanfaat bagi agama, nusa, bangsa dan Negara
                                    Kesatuan Republik Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End About Section -->

        <!-- ======= Footer ======= -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <div class="row">
                                            <div class="col-md-3" style="margin-top: 45px;">
                                                <img src="assets/img/logo.png" alt="LOGO MTS"
                                                    style="width: 190px; height: 132px;">
                                            </div>
                                            <div class="col-md-9" style="margin-top: 50px;">
                                                <h4>Madrasah Tsanawiyah NU Tasywiquth Thullab Salafiyah Kudus</h4>
                                                <div class="footer-icons">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="bi bi-telephone-fill"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="bi bi-whatsapp"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="bi bi-envelope-fill"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Kontak Kami</h4>
                                    <div class="footer-contacts">
                                        <p>
                                            <i class="bi bi-telephone-fill" style="color: #4ECB71;"></i>&nbsp; (0291)
                                            434555
                                        </p>
                                        <p>
                                            <i class="bi bi-whatsapp" style="color: #4ECB71;"></i>&nbsp; 0857-1244-4421
                                        </p>
                                        <p>
                                            <i class="bi bi-envelope-fill" style="color: #4ECB71;"></i>&nbsp;
                                            mtstbs@yahoo.co.id
                                        </p>
                                        <p>
                                            <i class="bi bi-facebook" style="color: #4ECB71;"></i>&nbsp; MTS TBS Kudus
                                        </p>
                                        <p>
                                            <i class="bi bi-instagram" style="color: #4ECB71;"></i>&nbsp; @mts.tbs.kudus
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Alamat Kami</h4>
                                    <div class="flicker-img">
                                        <p>Jl. KH. Turaichan Adjhuri No.23, Pejaten, Kajeksan, Kec.Kota Kudus, Kabupaten
                                            Kudus, Jawa Tengah 59314</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End  Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>