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

    if(isset($_POST['simpan_tes'])) {
        // echo "<script>alert('TAMBAH DATA BERHASIL!'); window.location.href = 'input-tes.php';</script>";
        $diterima = $_POST['keterangan'];
        $siswa = $_POST['siswa'];
        
        // $data_tes = array(
        //     'id_akun_siswa' => $akun_id_siswa,
        //     // 'nilai' => 90,
        //     'keterangan' => 2
        // );

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/api/admin/nilai',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => 'id_akun_siswa='.$siswa.'&keterangan='.$diterima.'',
        CURLOPT_HTTPHEADER => array(
            'session: '.$session.'',
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        if (curl_errno($curl)) {
            $errorMessage = curl_error($curl);
            echo "<script>alert('TAMBAH DATA GAGAL! ULANGI LAGI DAN PASTIKAN DATA YANG ANDA MASUKKAN SUDAH BENAR!'); window.location.href = 'input-tes.php';</script>";
        // Handle error
        }else {
            // echo $response;
            // echo "<script>alert('TAMBAH DATA BERHASIL!'); window.location.href = 'input-tes.php';</script>";
            echo "<script>alert('".$siswa."'); window.location.href = 'input-tes.php';</script>";
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

            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="data-admin.php">
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
                <a class="nav-link " href="input-tes.php">
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
            <h1>Input Hasil Tes</h1>
            <nav style="--bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Input Hasil Tes</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <form action="" method="post">
                                <?php
                                        $curl = curl_init();

                                        curl_setopt_array($curl, array(
                                          CURLOPT_URL => 'http://localhost:4000/api/admin/datamts-siswa',
                                          CURLOPT_RETURNTRANSFER => true,
                                          CURLOPT_ENCODING => '',
                                          CURLOPT_MAXREDIRS => 10,
                                          CURLOPT_TIMEOUT => 0,
                                          CURLOPT_FOLLOWLOCATION => true,
                                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                          CURLOPT_CUSTOMREQUEST => 'GET',
                                          CURLOPT_HTTPHEADER => array(
                                            'session: '.$session.''
                                          ),
                                        ));
                                        
                                        $response = curl_exec($curl);
                                        $response_err = curl_error($curl);
                                        curl_close($curl);

                                        // echo $response;

                                        if ($err) {
                                            echo 'Error: ' . $err;
                                          } else {
                                            $data = json_decode($response, true);
                                          
                                            if ($data['response'] === 200) {
                                              $result = $data['result'];
                                          
                                              $counter = 1;
                                          
                                              echo '<table class="table table-borderless datatable">';
                                              echo '<thead>';
                                              echo '<tr>';
                                              echo '<th scope="col">No</th>';
                                              echo '<th scope="col">NISN</th>';
                                              echo '<th scope="col">NAMA LENGKAP</th>';
                                              echo '<th scope="col">NOMOR HP</th>';
                                              echo '<th scope="col">DITERIMA DI</th>';
                                              echo '<th scope="col">AKSI</th>';
                                              echo '</tr>';
                                              echo '</thead>';
                                              echo '<tbody>';
                                          
                                              foreach ($result as $row) {
                                                echo '<tr>';
                                                echo '<td>' . $counter . '</td>';
                                                echo '<td>' . $row['nisn'] . '</td>';
                                                echo '<td>' . $row['nama_lengkap'] . '</td>';
                                                echo '<td>' . $row['no_hp'] . '</td>';
                                    ?>
                                <td>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example"
                                            name="keterangan" required>
                                            <option value='1'>MTS</option>
                                            <option value='2'>MPTS</option>
                                        </select>
                                        <input type="number" class="form-control" name="siswa"
                                            value="<?= $row['id_akun_siswa']; ?>" required>
                                    </div>
                                </td>
                                <td>
                                    <!-- <form action="" method="post"> -->
                                    <button type="submit" class="btn  btn-sm" name="simpan_tes"
                                        style="width: 100%; background-color: #4ECB71; color: white;">SIMPAN</button>
                                    <!-- </form> -->
                                </td>
                                <?php
                            echo '</tr>';

                            $counter++;
                            }

                            echo '</tbody>';
                            echo '</table>';
                            } else {
                            echo 'Error: ' . $data['message'];
                            }
                            }
                            ?>
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