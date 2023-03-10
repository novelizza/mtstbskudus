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


            $data_siswa = $result->data_siswa;
            
            $id_akun_siswa = $data_siswa->id_akun_siswa;
            $avatar = $data_siswa->avatar;
            $username_siswa = $data_siswa->username;
            $nama_lengkap = $data_siswa->nama_lengkap;
            $nisn = $data_siswa->nisn;
            $tempat_lahir = $data_siswa->tempat_lahir;
            $tanggal_lahir = $data_siswa->tanggal_lahir;
            $tahun_masuk = $data_siswa->tahun_masuk;
            $tujuan_masuk = $data_siswa->tujuan_masuk;
            $bayar = $data_siswa->bayar;
            $nilai = $data_siswa->nilai;
            $keterangan = $data_siswa->keterangan;
            $va = $data_siswa->va;

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
    <!-- <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MTS NU TBS KUDUS</title>
    <meta content="" name="description">
    <meta content="" name="keywords"> -->

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

    <main id="main">

        <!-- About Section -->
        <div id="about" class="area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <img src="../assets/img/header.png" alt="">
                        </div>
                    </div>
                </div><br>

                <!-- Card with an image on left -->
                <div class="card mb-3">
                    <div class="card-header" style="height: 40px;">
                        <center>
                            <h3>BUKTI PEMBAYARAN</h3>
                        </center>
                    </div>
                    <div class="row g-0">
                        <div class="col" style="margin-left: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <center>
                                            <h2><i class="bi bi-check-circle-fill" style="color: #4ECB71;"></i></h2>
                                            <h4><?php echo $va; ?></h4>
                                            <h4>PEMBAYARAN TELAH BERHASIL!</h4>
                                        </center>
                                        <div class="row">
                                            <div class="col">
                                                <b>NISN</b>
                                            </div>
                                            <div class="col">
                                                <p>: <?php echo $nisn; ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Nama Siswa</b>
                                    </div>
                                    <div class="col">
                                        <p>: <?php echo $nama_lengkap; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <b>Tempat, Tanggal Lahir</b>
                                    </div>
                                    <div class="col">
                                        <p>: <?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->

                <b><i>
                        <p>*Keterangan :</p>
                        <p>1. Bukti Pembayaran Harap Disimpan Dengan Baik.</p></b></i>

    </main>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

    <script>
    window.print();
    </script>

</body>

</html>