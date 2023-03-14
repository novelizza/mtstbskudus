<?php

session_start();

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

if(isset($_POST['edit_admin'])){
    
}

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost:4000/api/admin/',
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
    $object = json_decode($response, true);
    $data_response = $object['response'];

    // echo $response;
    if($object['response'] == 200) {
        $result = $object['result'];
        $result_id_admin = $result['id_akun_admin'];
        $result_nip = $result['nip'];
        $result_nama = $result['nama_lengkap'];
        $result_username = $result['username'];
        $result_createdAt = $result['createdAt'];
        $result_updateAt = $result['updatedAt'];
    }else {
        echo $object['response'];
        echo $object['message'];
    }

    if(isset($_POST['edit-admin'])){
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($password === "" || $password == NULL) {
            $data_baru_no_pass = array(
                'nama_lengkap' => $nama,
                'nip' => $nip,
                'username' => $username
            );

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://image.mtsnutbs.sch.id/admin/add-admin',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => http_build_query($data_baru_no_pass),
            CURLOPT_HTTPHEADER => array(
                'session: '.$session.'',
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            if (curl_errno($curl)) {
                $errorMessage = curl_error($curl);
                echo "<script>alert('EDIT DATA ADMIN GAGAL! ULANGI LAGI DAN PASTIKAN DATA YANG ANDA MASUKKAN SUDAH BENAR!'); window.location.href = 'edit-admin.php';</script>";
            // Handle error
            }else {
                // echo $response;
                echo "<script>alert('EDIT DATA ADMIN BERHASIL!'); window.location.href = 'data-admin.php';</script>";
            }
        }else {
            $data_baru = array(
                'nama_lengkap' => $nama,
                'nip' => $nip,
                'username' => $username,
                'password' => $password
            );

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://image.mtsnutbs.sch.id/admin/add-admin',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => http_build_query($data_baru),
            CURLOPT_HTTPHEADER => array(
                'session: '.$session.'',
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            if (curl_errno($curl)) {
                $errorMessage = curl_error($curl);
                echo "<script>alert('EDIT DATA ADMIN GAGAL! ULANGI LAGI DAN PASTIKAN DATA YANG ANDA MASUKKAN SUDAH BENAR!'); window.location.href = 'edit-admin.php';</script>";
            // Handle error
            }else {
                // echo $response;
                echo "<script>alert('EDIT DATA ADMIN BERHASIL!'); window.location.href = 'data-admin.php';</script>";
            }
        }
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
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../assets/img/logo.png">
                <span class="d-none d-lg-block">Dashboard Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $username ?></h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="edit-admin.php">
                                <i class="bi bi-person"></i>
                                <span>Edit Akun</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item ">
                <a class="nav-link collapsed" href="index.php">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="data-admin.php">
                    <i class="bi bi-person-fill-gear"></i>
                    <span>Data Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="data-siswa.php">
                    <i class="bi bi-person-vcard-fill"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="input-tes.php">
                    <i class="bi bi-pencil-square"></i>
                    <span>Input Hasil Tes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="cetak-data.php">
                    <i class="bi bi-printer-fill"></i>
                    <span>Cetak Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="blog.php">
                    <i class="bi bi-newspaper"></i>
                    <span>Blog / Artikel</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Admin</h1>
            <nav style="--bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item "><a href="data-admin.php">Data Admin</a></li>
                    <li class="breadcrumb-item active">Edit Data Admin</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">
                            </h5>

                            <form action="" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">NIP</label>
                                        <input type="number" class="form-control" id="inputEmail5" name="nip"
                                            value="<?php echo $result_nip; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="inputEmail5" name="nama"
                                            value="<?php echo $result_nama; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="inputEmail5" name="username"
                                            value="<?php echo $result_username; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">Password Baru</label>
                                        <input type="password" class="form-control" id="inputEmail5" name="password">
                                        <label for="inputEmail5" class="form-label"><i>NB : Kosongkan Jika Anda Tidak
                                                Ingin Merubah Password Anda</i></label>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success" style="width: 100%;" name="edit-admin"
                                            type="submit">SIMPAN</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>