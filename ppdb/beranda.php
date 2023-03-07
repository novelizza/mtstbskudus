<?php

    session_start();

    // access the stored session data
    $username = $_SESSION['username'];
    $session = $_SESSION['session'];
    $session_expiry = $_SESSION['session_expiry'];
    
    function session_expired($session_expiry) {
        $current_time = time();
        if ($current_time > $session_expiry) {
            header('location: login.php');
            return true;
        } else {
            return false;
        }
    }

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost:4000/api/siswa',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    // CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'session: '.$session.''
    ),
    ));

    $response = curl_exec($curl);
    $object = json_decode($response);

        if ($object->response == 200) {
            // access result object and session and session_expiry fields
            $result = $object->result;

            $status_va = $result->statusVa;

            $response_data_siswa = $result->data_siswa;

            $object_data_siswa = $response_data_siswa->akun_siswa;

            $fix_data_siswa = $object_data_siswa->dataValues;
            
            $id_akun_siswa = $fix_data_siswa->id_akun_siswa;
            $avatar = $fix_data_siswa->avatar;
            $username_siswa = $fix_data_siswa->username;
            $nama_lengkap = $fix_data_siswa->nama_lengkap;
            $nisn = $fix_data_siswa->nisn;
            $tempat_lahir = $fix_data_siswa->tempat_lahir;
            $tanggal_lahir = $fix_data_siswa->tanggal_lahir;
            $tahun_masuk = $fix_data_siswa->tahun_masuk;
            $tujuan_masuk = $fix_data_siswa->tujuan_masuk;
            $bayar = $fix_data_siswa->bayar;
            $nilai = $fix_data_siswa->nilai;
            $keterangan = $fix_data_siswa->keterangan;
            $va = $fix_data_siswa->va;

            $_SESSION['id_akun_siswa'] = $id_akun_siswa;
            $_SESSION['session'];
        } else {
            // handle error response
            echo 'Error: ' . $object->response . '<br>';
            echo 'Message: ' . $object->message . '<br>';
        }

    curl_close($curl);

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
    <link href="../assets/img/logo.png" rel="icon">
    <link href="../assets/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness - v4.10.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #f5f5f5;">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h6 style="color: white;">
                    <img src="../assets/img/logo.png" alt="" style="margin-right: 10px;">
                    Madrasah Tsanawiyah NU Tasywiquth Thullab Salafiyah (TBS) Kudus
                </h6>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="../index.php">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../sambutankepalamadrasah.php">Sambutan Kepala Madrasah</a></li>
                            <li><a href="../profilmadrasah.php">Profil Madrasah</a></li>
                            <li><a href="../visimisi.php">Visi Misi & Tujuan</a></li>
                            <li><a href="../pendidik.php">Pendidik & Tenaga Kependidikan</a></li>
                            <li><a href="../kurikulum.php">Kurikulum</a></li>
                            <li><a href="../sarana.php">Sarana & Prasarana</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="../brosur.php">Berita</a></li>
                    <li><a class="nav-link" href="../kontakkami.php">Kontak Kami</a></li>
                    <li class="dropdown" style="background-color: #0275d8;">
                        <a href=""><span> Akun</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- About Section -->
        <div id="about" class="area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <h2>Selamat Datang, <span style="color: #4ECB71;"><?php echo $nama_lengkap; ?>!</span></h2>
                            <h4><span class="badge bg-success" style="width: 100%;">Selamat Anda Diterima MTS Kelas
                                    7!</span></h4>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">

                        <?php
                            if($status_va == 1) {
                                echo "<h5><i class='bi bi-x' style='color: #4ECB71'></i>&nbsp; Pembayaran
                                Belum
                                LUNAS!</h5>";
                            }else {
                                echo "<h5><i class='bi bi-check-circle-fill' style='color: #4ECB71'></i>&nbsp; Pembayaran
                                Sudah
                                LUNAS!</h5>";
                            }
                        ?>

                    </div>
                    <div class="col-md-6">
                        <a class="btn" href="data-diri.php"
                            style="background-color: #4ECB71; color: white; float: right;">Lengkapi Data
                            Diri</a>
                    </div>
                </div><br>
                <div class="row g-3">
                    <div class="col-md-6">
                        <a class="btn" href="beranda.php" style="background-color: #4E53CB; color: white; width: 100%;">
                            <i class="bi bi-printer-fill"></i><span> Cetak Kartu Tes</span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn" href="beranda.php" style="background-color: #2AB6D4; color: white; width: 100%;">
                            <i class="bi bi-printer-fill"></i><span> Cetak Bukti Pembayaran</span>
                        </a>
                    </div>
                </div><br>

                <!-- Card with an image on left -->
                <div class="card mb-3">
                    <div class="card-header" style="background-color:#4ECB71;">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6">
                                <span style="color: white; font-weight: bold; font-size: 18px;">Data Diri Anda</span>
                            </div>
                            <div class="col-md-6">
                                <span
                                    style="float: right; color: white; font-weight: bold; font-size: 16px;"><?php echo $va; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="http://localhost:4000/api/avatar/<?php echo $avatar; ?>"
                                class="img-fluid rounded-start" alt="..."
                                style="margin:10px; height: 250px; width: 250px;">
                        </div>
                        <div class="col-md-5" style="margin-left: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <b><?php echo $status_va; ?></b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $nisn; ?></p>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-md-4">
                                        <b>Nama Siswa</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $nama_lengkap; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Username</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $username_siswa; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Tempat & Tanggal Lahir</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->
                <!-- Card with an image on left -->
                <div class="card mb-3">
                    <div class="card-header" style="background-color:#4ECB71;">
                        <!-- <h4 style="color: white; font-weight: bold; margin-top: 10px;">Timeline Pendaftaran</h4> -->
                        <span style="color: white; font-weight: bold; font-size: 18px;"> Timeline Pendaftaran </span>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-5" style="margin-left: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>1. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>2. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>3. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>4. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>5. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>6. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>7. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>8. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>9. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>10. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>11. kasdlasdlasdlasldasldalsdalsdasd</p>
                                        <p>12. kasdlasdlasdlasldasldalsdalsdasd</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->
            </div>
            <!-- End About Section -->

    </main>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>