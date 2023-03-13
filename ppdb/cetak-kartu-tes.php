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
                                                    if($id_ujian <= 200){
                                                        echo "<p>: Senin, 1 Mei 2023 M </p>";
                                                        if($id_ujian <= 20){
                                                            $ruangKelas = "Ruang Kelas 1";
                                                        }elseif($id_ujian <= 21 && $id_ujian <= 40) {
                                                            $ruangKelas = "Ruang Kelas 2";
                                                        }elseif($id_ujian <= 41 && $id_ujian <= 60) {
                                                            $ruangKelas = "Ruang Kelas 3";
                                                        }elseif($id_ujian <= 61 && $id_ujian <= 80) {
                                                            $ruangKelas = "Ruang Kelas 4";
                                                        }elseif($id_ujian <= 81 && $id_ujian <= 100) {
                                                            $ruangKelas = "Ruang Kelas 5";
                                                        }elseif($id_ujian <= 101 && $id_ujian <= 120) {
                                                            $ruangKelas = "Ruang Kelas 6";
                                                        }elseif($id_ujian <= 121 && $id_ujian <= 140) {
                                                            $ruangKelas = "Ruang Kelas 7";
                                                        }elseif($id_ujian <= 141 && $id_ujian <= 160) {
                                                            $ruangKelas = "Ruang Kelas 8";
                                                        }elseif($id_ujian <= 161 && $id_ujian <= 180) {
                                                            $ruangKelas = "Ruang Kelas 9";
                                                        }elseif($id_ujian <= 181 && $id_ujian <= 200) {
                                                            $ruangKelas = "Ruang Kelas 10";
                                                        }else {
                                                            $ruangKelas = "Hari Selanjutnya";
                                                        }
                                                    }elseif($id_ujian <= 201 && $id_ujian <= 400){
                                                        echo "<p>: Selasa, 2 Mei 2023 M </p>";
                                                        if($id_ujian <= 201){
                                                            $ruangKelas = "Ruang Kelas 1";
                                                        }elseif($id_ujian <= 221 && $id_ujian <= 240) {
                                                            $ruangKelas = "Ruang Kelas 2";
                                                        }elseif($id_ujian <= 241 && $id_ujian <= 260) {
                                                            $ruangKelas = "Ruang Kelas 3";
                                                        }elseif($id_ujian <= 261 && $id_ujian <= 280) {
                                                            $ruangKelas = "Ruang Kelas 4";
                                                        }elseif($id_ujian <= 281 && $id_ujian <= 300) {
                                                            $ruangKelas = "Ruang Kelas 5";
                                                        }elseif($id_ujian <= 301 && $id_ujian <= 320) {
                                                            $ruangKelas = "Ruang Kelas 6";
                                                        }elseif($id_ujian <= 321 && $id_ujian <= 340) {
                                                            $ruangKelas = "Ruang Kelas 7";
                                                        }elseif($id_ujian <= 341 && $id_ujian <= 360) {
                                                            $ruangKelas = "Ruang Kelas 8";
                                                        }elseif($id_ujian <= 361 && $id_ujian <= 380) {
                                                            $ruangKelas = "Ruang Kelas 9";
                                                        }elseif($id_ujian <= 381 && $id_ujian <= 400) {
                                                            $ruangKelas = "Ruang Kelas 10";
                                                        }else {
                                                            $ruangKelas = "Hari Selanjutnya";
                                                        }
                                                    }elseif($id_ujian <= 401 && $id_ujian <= 600){
                                                        echo "<p>: Rabu, 3 Mei 2023 M </p>";
                                                        if($id_ujian <= 401){
                                                            $ruangKelas = "Ruang Kelas 1";
                                                        }elseif($id_ujian <= 421 && $id_ujian <= 440) {
                                                            $ruangKelas = "Ruang Kelas 2";
                                                        }elseif($id_ujian <= 441 && $id_ujian <= 460) {
                                                            $ruangKelas = "Ruang Kelas 3";
                                                        }elseif($id_ujian <= 461 && $id_ujian <= 480) {
                                                            $ruangKelas = "Ruang Kelas 4";
                                                        }elseif($id_ujian <= 481 && $id_ujian <= 500) {
                                                            $ruangKelas = "Ruang Kelas 5";
                                                        }elseif($id_ujian <= 501 && $id_ujian <= 520) {
                                                            $ruangKelas = "Ruang Kelas 6";
                                                        }elseif($id_ujian <= 521 && $id_ujian <= 540) {
                                                            $ruangKelas = "Ruang Kelas 7";
                                                        }elseif($id_ujian <= 541 && $id_ujian <= 560) {
                                                            $ruangKelas = "Ruang Kelas 8";
                                                        }elseif($id_ujian <= 561 && $id_ujian <= 580) {
                                                            $ruangKelas = "Ruang Kelas 9";
                                                        }elseif($id_ujian <= 581 && $id_ujian <= 600) {
                                                            $ruangKelas = "Ruang Kelas 10";
                                                        }else {
                                                            $ruangKelas = "Hari Selanjutnya";
                                                        }
                                                    }elseif($id_ujian <=601 && $id_ujian <= 800){
                                                        echo "<p>: Kamis, 4 Mei 2023 M </p>";
                                                        if($id_ujian <= 601){
                                                            $ruangKelas = "Ruang Kelas 1";
                                                        }elseif($id_ujian <= 621 && $id_ujian <= 640) {
                                                            $ruangKelas = "Ruang Kelas 2";
                                                        }elseif($id_ujian <= 641 && $id_ujian <= 660) {
                                                            $ruangKelas = "Ruang Kelas 3";
                                                        }elseif($id_ujian <= 661 && $id_ujian <= 680) {
                                                            $ruangKelas = "Ruang Kelas 6";
                                                        }elseif($id_ujian <= 681 && $id_ujian <= 700) {
                                                            $ruangKelas = "Ruang Kelas 5";
                                                        }elseif($id_ujian <= 701 && $id_ujian <= 720) {
                                                            $ruangKelas = "Ruang Kelas 6";
                                                        }elseif($id_ujian <= 721 && $id_ujian <= 740) {
                                                            $ruangKelas = "Ruang Kelas 7";
                                                        }elseif($id_ujian <= 741 && $id_ujian <= 760) {
                                                            $ruangKelas = "Ruang Kelas 8";
                                                        }elseif($id_ujian <= 761 && $id_ujian <= 780) {
                                                            $ruangKelas = "Ruang Kelas 9";
                                                        }elseif($id_ujian <= 781 && $id_ujian <= 800) {
                                                            $ruangKelas = "Ruang Kelas 10";
                                                        }else {
                                                            $ruangKelas = "Hari Selanjutnya";
                                                        }
                                                    }else {
                                                        echo "<p>: Sabtu, 6 Mei 2023 M </p>";
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
                                                        $ruangKelas;
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