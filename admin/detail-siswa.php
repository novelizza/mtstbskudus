<?php
    
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
                <a class="nav-link " href="data-siswa.php">
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
            <h1>Data Siswa</h1>
            <nav style="--bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="data-siswa.php">Data Siswa</a></li>
                    <li class="breadcrumb-item active">Detail Data Siswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-header" style="background-color: #4ECB71; color: white; font-size: 20px;">
                            <i class="bi bi-person-fill"></i>&nbsp;<span><b>DATA
                                    SISWA</b></span>
                        </div><br>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col">
                                            <b>NAMA LENGKAP</b><br>
                                            <b>NISN</b><br>
                                            <b>KEWARGANEGARAAN</b><br>
                                            <b>NIK</b><br>
                                            <b>TEMPAT LAHIR</b><br>
                                            <b>TANGGAL LAHIR</b><br>
                                            <b>JENIS KELAMIN</b><br>
                                            <b>JUMLAH SAUDARA</b><br>
                                            <b>ANAK KE - </b><br>
                                            <b>AGAMA</b><br>
                                            <b>CITA - CITA</b><br>
                                            <b>NO HP</b><br>
                                            <b>YANG MEMBIAYAI</b><br>
                                            <b>KEBUTUHAN KHUSUS</b><br>
                                            <b>PRA SEKOLAH</b><br>
                                            <b>NOMOR KIP</b><br>
                                            <b>NOMOR KK</b><br>
                                            <b>NAMA KEPALA KELUARGA</b><br>
                                        </div>
                                        <div class="col">
                                            Handoko Prabowo <br>
                                            1122334455667788 <br>
                                            Indonesia <br>
                                            1122334455667788 <br>
                                            KUDUS <br>
                                            2010-11-18 <br>
                                            LAKI - LAKI <br>
                                            3 <br>
                                            1 <br>
                                            ISLAM <br>
                                            DOKTER <br>
                                            081122334455 <br>
                                            ORANG TUA <br>
                                            TIDAK <br>
                                            TK / RA <br>
                                            - <br>
                                            1122334455667788 <br>
                                            JOKOWI <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="../assets/img/Kementerian_Agama_new_logo.png" alt="" srcset=""
                                        style="width: 200px; height: 200px; float: right;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-header" style="background-color: #4ECB71; color: white; font-size: 20px;">
                            <i class="bi bi-people-fill"></i>&nbsp;<span><b>DATA
                                    ORANG TUA / WALI</b></span>
                        </div><br>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            DATA AYAH</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>NAMA LENGKAP</b><br>
                                                    <b>STATUS</b><br>
                                                    <b>KEWARGANEGARAAN</b><br>
                                                    <b>NIK</b><br>
                                                    <b>TEMPAT LAHIR</b><br>
                                                    <b>TANGGAL LAHIR</b><br>
                                                    <b>PENDIDIKAN TERAKHIR</b><br>
                                                    <b>PEKERJAAN UTAMA</b><br>
                                                    <b>PENGHASILAN RATA-RATA</b><br>
                                                    <b>NOMOR HP</b><br>
                                                </div>
                                                <div class="col">
                                                    JOKOWI <br>
                                                    MASIH HIDUP <br>
                                                    INDONESIA <br>
                                                    1122334455667788 <br>
                                                    KUDUS <br>
                                                    1975-05-26 <br>
                                                    S2 <br>
                                                    DOSEN / GURU <br>
                                                    5.000.000 - 10.000.000 <br>
                                                    081122334455 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            DATA IBU</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>NAMA LENGKAP</b><br>
                                                    <b>STATUS</b><br>
                                                    <b>KEWARGANEGARAAN</b><br>
                                                    <b>NIK</b><br>
                                                    <b>TEMPAT LAHIR</b><br>
                                                    <b>TANGGAL LAHIR</b><br>
                                                    <b>PENDIDIKAN TERAKHIR</b><br>
                                                    <b>PEKERJAAN UTAMA</b><br>
                                                    <b>PENGHASILAN RATA-RATA</b><br>
                                                    <b>NOMOR HP</b><br>
                                                </div>
                                                <div class="col">
                                                    BUKOWI <br>
                                                    MASIH HIDUP <br>
                                                    INDONESIA <br>
                                                    1122334455667788 <br>
                                                    KUDUS <br>
                                                    1975-05-26 <br>
                                                    S2 <br>
                                                    DOSEN / GURU <br>
                                                    5.000.000 - 10.000.000 <br>
                                                    081122334455 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            DATA WALI</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>NAMA LENGKAP</b><br>
                                                    <b>STATUS</b><br>
                                                    <b>KEWARGANEGARAAN</b><br>
                                                    <b>NIK</b><br>
                                                    <b>TEMPAT LAHIR</b><br>
                                                    <b>TANGGAL LAHIR</b><br>
                                                    <b>PENDIDIKAN TERAKHIR</b><br>
                                                    <b>PEKERJAAN UTAMA</b><br>
                                                    <b>PENGHASILAN RATA-RATA</b><br>
                                                    <b>NOMOR HP</b><br>
                                                </div>
                                                <div class="col">
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-header" style="background-color: #4ECB71; color: white; font-size: 20px;">
                            <i class="bi bi-geo-alt-fill"></i>&nbsp;<span><b>DATA
                                    ALAMAT</b></span>
                        </div><br>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            ALAMAT AYAH</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>TINGGAL DI LUAR NEGERI</b><br>
                                                    <b>STATUS KEPEMILIKAN RUMAH</b><br>
                                                    <b>PROVINSI</b><br>
                                                    <b>KABUPATEN / KOTA</b><br>
                                                    <b>KECAMATAN</b><br>
                                                    <b>KELURAHAN / DESA</b><br>
                                                    <b>RT</b><br>
                                                    <b>RW</b><br>
                                                    <b>ALAMAT</b><br>
                                                    <b>KODE POS</b><br>
                                                </div>
                                                <div class="col">
                                                    TIDAK <br>
                                                    MILIK SENDIRI <br>
                                                    JAWA TENGAH <br>
                                                    KUDUS <br>
                                                    GEBOG <br>
                                                    BESITO <br>
                                                    04 <br>
                                                    04 <br>
                                                    JL. OKE MAKMUR NO 14 <br>
                                                    59354 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            ALAMAT IBU</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>SAMA DENGAN AYAH</b><br>
                                                    <b>STATUS KEPEMILIKAN RUMAH</b><br>
                                                    <b>PROVINSI</b><br>
                                                    <b>KABUPATEN / KOTA</b><br>
                                                    <b>KECAMATAN</b><br>
                                                    <b>KELURAHAN / DESA</b><br>
                                                    <b>RT</b><br>
                                                    <b>RW</b><br>
                                                    <b>ALAMAT</b><br>
                                                    <b>KODE POS</b><br>
                                                </div>
                                                <div class="col">
                                                    YA <br>
                                                    MILIK SENDIRI <br>
                                                    JAWA TENGAH <br>
                                                    KUDUS <br>
                                                    GEBOG <br>
                                                    BESITO <br>
                                                    04 <br>
                                                    04 <br>
                                                    JL. OKE MAKMUR NO 14 <br>
                                                    59354 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            ALAMAT SISWA</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>SAMA DENGAN AYAH</b><br>
                                                    <b>STATUS KEPEMILIKAN RUMAH</b><br>
                                                    <b>PROVINSI</b><br>
                                                    <b>KABUPATEN / KOTA</b><br>
                                                    <b>KECAMATAN</b><br>
                                                    <b>KELURAHAN / DESA</b><br>
                                                    <b>RT</b><br>
                                                    <b>RW</b><br>
                                                    <b>ALAMAT</b><br>
                                                    <b>KODE POS</b><br>
                                                </div>
                                                <div class="col">
                                                    YA <br>
                                                    MILIK SENDIRI <br>
                                                    JAWA TENGAH <br>
                                                    KUDUS <br>
                                                    GEBOG <br>
                                                    BESITO <br>
                                                    04 <br>
                                                    04 <br>
                                                    JL. OKE MAKMUR NO 14 <br>
                                                    59354 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            ALAMAT WALI</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>SAMA DENGAN AYAH</b><br>
                                                    <b>STATUS KEPEMILIKAN RUMAH</b><br>
                                                    <b>PROVINSI</b><br>
                                                    <b>KABUPATEN / KOTA</b><br>
                                                    <b>KECAMATAN</b><br>
                                                    <b>KELURAHAN / DESA</b><br>
                                                    <b>RT</b><br>
                                                    <b>RW</b><br>
                                                    <b>ALAMAT</b><br>
                                                    <b>KODE POS</b><br>
                                                </div>
                                                <div class="col">
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                    - <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-header" style="background-color: #4ECB71; color: white; font-size: 20px;">
                            <i class="bi bi-trophy-fill"></i>&nbsp;<span><b>DATA
                                    PRESTASI</b></span>
                        </div><br>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            PRESTASI 1</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>TAHUN</b><br>
                                                    <b>NAMA LOMBA</b><br>
                                                    <b>BIDANG LOMBA</b><br>
                                                    <b>NAMA PENYELENGGARA</b><br>
                                                    <b>LOMBA TINGKAT</b><br>
                                                    <b>PERINGKAT YANG DIRAIH</b><br>
                                                </div>
                                                <div class="col">
                                                    2019 <br>
                                                    LOMBA MEMASAK <br>
                                                    KULINER <br>
                                                    KEMENTRIAN PARIWISATA <br>
                                                    NASIONAL <br>
                                                    2 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            PRESTASI 2</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>TAHUN</b><br>
                                                    <b>NAMA LOMBA</b><br>
                                                    <b>BIDANG LOMBA</b><br>
                                                    <b>NAMA PENYELENGGARA</b><br>
                                                    <b>LOMBA TINGKAT</b><br>
                                                    <b>PERINGKAT YANG DIRAIH</b><br>
                                                </div>
                                                <div class="col">
                                                    2019 <br>
                                                    LOMBA MEMASAK <br>
                                                    KULINER <br>
                                                    KEMENTRIAN PARIWISATA <br>
                                                    NASIONAL <br>
                                                    2 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header"
                                            style="background-color: #4ECB71; color: white; font-weight: bold;">
                                            PRESTASI 3</div>
                                        <div class="card-body"><br>
                                            <div class="row">
                                                <div class="col">
                                                    <b>TAHUN</b><br>
                                                    <b>NAMA LOMBA</b><br>
                                                    <b>BIDANG LOMBA</b><br>
                                                    <b>NAMA PENYELENGGARA</b><br>
                                                    <b>LOMBA TINGKAT</b><br>
                                                    <b>PERINGKAT YANG DIRAIH</b><br>
                                                </div>
                                                <div class="col">
                                                    2019 <br>
                                                    LOMBA MEMASAK <br>
                                                    KULINER <br>
                                                    KEMENTRIAN PARIWISATA <br>
                                                    NASIONAL <br>
                                                    2 <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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