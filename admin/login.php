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
        CURLOPT_URL => 'http://localhost:4000/api/auth/admin',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
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
        } else {
            // handle error response
            echo 'Error: ' . $object->response . '<br>';
            echo 'Message: ' . $object->message . '<br>';
        }

        
            // echo $response;
            // echo $session_expiry;

        if($response){
            $_SESSION['logged_in'] = true;
            $_SESSION['login_time'] = time();
            $_SESSION['username'] = $username;
            $_SESSION['session'] = $session;
            $_SESSION['session_expiry'] = $session_expiry;
            header("location: index.php");
        }else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Username atau Password Salah!</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
        curl_close($curl);   
    }

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        header("location: index.php");
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

    <title>Dashboard Admin MTS NU TBS</title>
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

    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <style>
        .background-radial-gradient {
            height: 100vh;
            background-color: hsl(190, 24%, 24%);
            background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 24%, 45%) 15%,
                    hsl(218, 24%, 54%) 35%,
                    hsl(190, 24%, 34%) 75%,
                    hsl(190, 24%, 34%) 80%,
                    transparent 100%),
                radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 24%, 45%) 15%,
                    hsl(218, 24%, 54%) 35%,
                    hsl(190, 24%, 34%) 75%,
                    hsl(190, 24%, 34%) 80%,
                    transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#1B251B, #4ECB71);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#1B251B, #4ECB71);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 align-items-center">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Dashboard Admin <br />
                        <span style="color: hsl(218, 81%, 75%); font-size: 28px;">MTS NU Tsanawiyah Tasywiquth Thullab
                            Salafiyah
                            Kudus</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Silahkan login terlebih dahulu untuk masuk ke dashboard. Masukkan username dan password anda
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form method="post" action="">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Masukkan Username</label>
                                    <input type="text" id="form3Example3" class="form-control" name="username"
                                        required />
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Masukkan Password</label>
                                    <input type="password" id="form3Example4" class="form-control" name="password"
                                        required />
                                </div>

                                <!-- Submit button -->
                                <button type="submit" name="login" class="btn btn-primary btn-block mb-8"
                                    style="width: 100%;">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->

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