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

            $dataUjianSiswa = $result->dataUjian;
            $id_ujian = $dataUjianSiswa->id_ujian;
            $id_akun_ujian = $dataUjianSiswa->id_akun_siswa;
            $nomor_ujian = $dataUjianSiswa->nomor_ujian;

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
                            <h3>KARTU TES</h3>
                        </center>
                    </div>
                    <div class="row g-0">
                        <div class="col" style="margin-left: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <b>Jadwal Tes</b>
                                            </div>
                                            <div class="col">
                                                <?php
                                                // echo $id_ujian;
                                                    if($id_ujian <= 600){
                                                        echo "<p>: Senin, 1 Mei 2023 M </p>";
                                                    }elseif($id_ujian <= 601 && $id_ujian <= 1200){
                                                        echo "<p>: Selasa, 2 Mei 2023 M </p>";
                                                    }else {
                                                        echo "<p>: Next Day </p>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class=" row">
                                            <div class="col">
                                                <b>Nomor Tes</b>
                                            </div>
                                            <div class="col">
                                                <p>: <?php echo $nomor_ujian; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <b>Ruang Tes</b>
                                            </div>
                                            <div class="col">
                                                <p>:
                                                    <?php
                                                        for ($i = 1; $i <= 600; $i++) {
                                                            if ($i % 20 == 0) {
                                                                echo "Ruang Kelas " . ($i / 20) . "<br>";
                                                            } else {
                                                                echo $i . "<br>";
                                                            }
                                                        }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <b>NISN</b>
                                            </div>
                                            <div class="col">
                                                <p>: <?php echo $nisn; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <b>Nama Calon Siswa</b>
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
                                    <div class="col">
                                        <img src="https://image.mtsnutbs.sch.id/avatar/<?php echo $avatar; ?>"
                                            class="img-fluid rounded-start" alt="..."
                                            style="margin:10px; height: 150px; width: 150px; float: right;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                <center>
                                    Tes Imla' Pegon
                                </center>
                            </th>
                            <th scope="col">
                                <center>
                                    Tes CBT
                                </center>
                            </th>
                            <th scope="col">
                                <center>
                                    Tes Baca Al-Qur'an
                                </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 33%">
                                <center>
                                    <div style="height: 200px; position: relative;">
                                        <span
                                            style="position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 0);">
                                            (...........................) <br>
                                            <i>Nama terang dan ttd</i>
                                        </span>
                                    </div>
                                </center>
                            </td>
                            <td style="width: 33%">
                                <center>
                                    <div style="height: 200px; position: relative;">
                                        <span
                                            style="position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 0);">
                                            (...........................) <br>
                                            <i>Nama terang dan ttd</i>
                                        </span>
                                    </div>
                                </center>
                            </td>
                            <td style="width: 33%">
                                <center>
                                    <div style="height: 200px; position: relative;">
                                        <span
                                            style="position: absolute; bottom: 0; left: 50%; transform: translate(-50%, 0);">
                                            (...........................) <br>
                                            <i>Nama terang dan ttd</i>
                                        </span>
                                    </div>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <b><i>
                        <p>*Keterangan :</p>
                        <p>1. Kartu harap dibawa ketika mengikuti tes seleksi.</p>
                        <p>2. Tes seleksi dilaksanakan mulai pukul 08.00 WIB.</p></b></i>

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