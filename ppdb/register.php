<?php

    session_start();
    // Check if registration is complete
    if (isset($_SESSION['registration_complete']) && $_SESSION['registration_complete']) {
        // Redirect to login page
        header('Location: login.php');
        exit;
    }
    
    if(isset($_POST['register'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $nisn = $_POST['nisn'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_ulang = $_POST['password_ulang'];
        $daftar_mts = isset($_POST['mts']) ? true : false;
        $daftar_mpts = isset($_POST['mpts']) ? true : false;
        $image = $_FILES['avatar']['tmp_name'];
        $hp_wali = $_POST['hp_wali'];

        if(strpos(trim($username), ' ') !== false){
            header('location: register.php');
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Masukkan Kembali Data Diri Anda dan Pastikan Username Tidak Boleh Mengandung Spasi</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
        elseif($password != $password_ulang) {
            header('location: register.php');
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Masukkan Kembali Data Diri Anda dan Pastikan Password Sama</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }else {
            if(!$daftar_mts && !$daftar_mpts) {
                header('location: register.php');
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Masukkan Kembali Data Diri Anda dan Pastikan Pilih Daftar Salah Satu</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }else {
                $selectedCheckbox = $daftar_mts ? 'MTS' : 'MPTS';
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, 'http://localhost:4000/api/siswa');
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, array(
                    'nama_lengkap' => $nama_lengkap,
                    'nisn' => $nisn,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'password' => $password,
                    'tujuan_masuk' => $selectedCheckbox,
                    'avatar' => curl_file_create($image, $_FILES['avatar']['type'], $_FILES['avatar']['name']),
                    'no_hp_wali' => $hp_wali
                ));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Send cURL request and get response
                curl_exec($curl);
                // Check for errors
                if (curl_errno($curl)) {
                    $errorMessage = curl_error($curl);
                    // Handle error
                }else {
                    $_SESSION['registration_complete'] = true;
                    header('location: login.php');
                    exit;
                }
                // Close cURL session
                curl_close($curl);
            }
        }
    }

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

<body style="background-color: #F5F5F5;">

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="margin: 50px;">
                        <div class="card-header" style="background-color: #324032;">
                            <h4 class="card-title">
                                <img src="../assets/img/logo.png" alt="" style="width: 50px; height: 51px;">
                                <span style="color: white;">Masukkan Data Diri Untuk Mendaftar</span>
                            </h4>
                        </div>
                        <div class="card-body">
                            <!-- No Labels Form -->
                            <form class="row" action="" method="post" enctype="multipart/form-data"
                                onsubmit="return validateForm()">
                                <div class="col-md-12">
                                    <label for=""><b>Masukkan Nama Lengkap</b></label>
                                    <input type="text" class="form-control" name="nama_lengkap" required>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan NISN</b></label>
                                    <input type="number" class="form-control" name="nisn" required>
                                    <label style="font-style: italic; color: grey;">NB : NISN bisa ditemukan di
                                        raport</label>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Tempat Lahir</b></label>
                                    <input type="text" class="form-control" name="tempat_lahir" required>
                                </div>
                                <div class="col-sm-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Tanggal Lahir</b></label>
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir Sesuai
                                        Dengan KK Dengan Format Tanggal/Bulan/Tahun</label>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Username</b></label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Password</b></label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Ulang Password</b></label>
                                    <input type="password" class="form-control" name="password_ulang"
                                        id="password_ulang" required>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <p><b>Daftar Madrasah</b></p>
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="mts"
                                        value="MTS" onclick="handleCheckboxClick('mts', 'mpts')">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>MTS</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="mpts"
                                        value="MPTS" onclick="handleCheckboxClick('mts', 'mpts')">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>MPTS</b>
                                    </label>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Foto</b></label>
                                    <input class="form-control" type="file" name="avatar" required>
                                    <label style="font-style: italic; color: grey;">
                                        NB : <br>
                                        1. Background foto WAJIB warna merah <br>
                                        2. Ukuran foto maksimal 5 MB <br>
                                        3. Format foto berupa .jpg, .jpeg atau .png
                                    </label>
                                </div>
                                <div class="col-md-12" style="margin-top: 20px;">
                                    <label for=""><b>Masukkan Nomor HP Orang Tua/Wali</b></label>
                                    <input type="text" class="form-control" name="hp_wali" required>
                                </div>
                                <div class="text-center" style="margin-top: 20px;">
                                    <button type="submit" class="btn btn-primary btn-lg" name="register"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">Daftar
                                        Sekarang</button>
                                </div>
                            </form><!-- End No Labels Form -->

                            <script>
                            function handleCheckboxClick(checkedId, uncheckedId) {
                                const checkedCheckbox = document.getElementById(checkedId);
                                const uncheckedCheckbox = document.getElementById(uncheckedId);

                                if (checkedCheckbox.checked) {
                                    uncheckedCheckbox.checked = false;
                                }
                            }

                            function validateForm() {
                                const checkbox1 = document.getElementById("mts");
                                const checkbox2 = document.getElementById("mpts");

                                if (!checkbox1.checked && !checkbox2.checked) {
                                    alert("Please check at least one checkbox.");
                                    return false;
                                }

                                return true;
                            }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    </script>
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