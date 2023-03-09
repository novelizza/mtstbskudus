<?php

    session_start();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $curl = curl_init();

        $data = array(
            'username' => $username,
            'password' => $password
        );

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/api/auth/siswa',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);
        $object = json_decode($response);

        if ($object->response == 200) {
            // access result object and session and session_expiry fields
            $result = $object->result;
            $session = $result->session;
            $session_expiry = $result->session_expiry;
            echo $response;
            
        } else {
            // handle error response
            // echo $response;
            echo 'Error: ' . $object->response . '<br>';
            echo 'Message: ' . $object->message . '<br>';
        }

        echo $response;

        if($response){
            $_SESSION['logged_in'] = true;
            $_SESSION['login_time'] = time();
            $_SESSION['username'] = $username;
            $_SESSION['session'] = $session;
            $_SESSION['session_expiry'] = $session_expiry;
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Login Berhasil! Pastikan Untuk Mengingat Username dan Password Anda</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
            sleep(1);
            header("location: beranda.php");
        }else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Username atau Password Salah!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
        curl_close($curl);
    }

        
        //     echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        //     <strong>Username atau Password Salah!</strong>
        //     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        //   </div>";
        //   header('location: login.php');
            // echo $response;
            // echo $session_expiry;

        

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Login Berhasil! Pastikan Untuk Mengingat Username dan Password Anda</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        sleep(1);
        header("location: beranda.php");
    }else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Login Gagal! Silahkan Coba Lagi</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        sleep(1);
        header("location: login.php");
    }

    if($_SESSION['login_time'] && time() > $_SESSION['session_expiry']) {
        session_destroy();
        header("location: login.php");
        exit;
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

<body>

    <section class="vh-100" style="background-color: #324032;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-6 d-none d-md-block">
                                <img src="../assets/img/foto-login.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem; height: 100%;" />
                            </div>
                            <div class="col-md-8 col-lg-6 d-flex align-items-center">
                                <div class="card-body p-8 p-lg-7 text-black">

                                    <form action="" method="post">
                                        <div class=" align-items-center mb-3">
                                            <img src="../assets/img/logo.png" style="width: 72px; height: 72px;">
                                        </div>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h5 fw-bold mb-0">Selamat Datang di PPDB MTS NU TBS Kudus</span>
                                        </div>

                                        <h6 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Silahkan login
                                            terlebih dahulu</h6>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" class="form-control form-control-lg"
                                                name="username" />
                                            <label class="form-label" for="form2Example17">Masukkan Username <br>
                                                <i>(Pastikan username tidak mengandung spasi dan kata-kata kotor)</i>
                                            </label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name="password" />
                                            <label class="form-label" for="form2Example27">Masukkan Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit" class="btn btn-lg" name="login"
                                                style="background-color: #4ECB71; color: white;">Login</button>
                                        </div>

                                        <a class="small text-muted"
                                            href="https://wa.me/6285712444421?text=Halo%20saya%20ingin%20bertanya">Lupa
                                            Password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum punya akun? <a
                                                href="register.php" style="color: #4ECB71;"><span
                                                    style="font-size: larger; font-weight: bolder;">Buat Akun</span></a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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