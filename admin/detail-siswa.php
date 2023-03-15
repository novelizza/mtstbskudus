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

    $id_akun_siswa = $_GET['nomor'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://image.mtsnutbs.sch.id/admin/detail-siswa',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_POSTFIELDS => 'id_akun_siswa='.$id_akun_siswa.'',
    CURLOPT_HTTPHEADER => array(
        'session: '.$session.'',
        'Content-Type: application/x-www-form-urlencoded'
    ),
    ));

    $response = curl_exec($curl);
    $object = json_decode($response);

    if($object->response == 200) {
        $result = $object->result;

        $data_akun_siswa = $result->data_akun_siswa;
        $avatar = $data_akun_siswa->avatar;
        $username_siswa = $data_akun_siswa->username;
        $nama_lengkap = $data_akun_siswa->nama_lengkap;
        $nisn = $data_akun_siswa->nisn;
        $tempat_lahir = $data_akun_siswa->tempat_lahir;
        $tanggal_lahir = $data_akun_siswa->tanggal_lahir;
        $tahun_masuk = $data_akun_siswa->tahun_masuk;
        $tujuan_masuk = $data_akun_siswa->tujuan_masuk;
        
        $data_siswa = $result->data_siswa;
        $nik = $data_siswa->nik;
        $kewarganegaraan = $data_siswa->kewarganegaraan;
        $jumlah_saudara = $data_siswa->jumlah_saudara;
        $anak_ke = $data_siswa->anak_ke;
        $cita_cite = $data_siswa->cita_cita;
        $no_hp = $data_siswa->no_hp;
        $yang_membiayai = $data_siswa->yang_membiayai;
        $kebutuhan_khusus = $data_siswa->kebutuhan_khusus;
        $pra_sekolah = $data_siswa->prasekolah;
        $asal_sekolah = $data_siswa->asal_sekolah;
        $kip = $data_siswa->kip;
        $kk = $data_siswa->kk;
        $kepala_keluarga = $data_siswa->kepala_keluarga;

        $data_orang_tua = $result->data_orang_tua;
        $nama_lengkap_ayah = $data_orang_tua->nama_lengkap_ayah;
        $status_ayah = $data_orang_tua->status_ayah;
        $kewarganegaraan_ayah = $data_orang_tua->kewarganegaraan_ayah;
        $nik_ayah = $data_orang_tua->nik_ayah;
        $tempat_lahir_ayah = $data_orang_tua->tempat_lahir_ayah;
        $tanggal_lahir_ayah = $data_orang_tua->tanggal_lahir_ayah;
        $pendidikan_terakhir_ayah = $data_orang_tua->pendidikan_terakhir_ayah;
        $no_hp_ayah = $data_orang_tua->no_hp_ayah;

        $nama_lengkap_ibu = $data_orang_tua->nama_lengkap_ibu;
        $status_ibu = $data_orang_tua->status_ibu;
        $kewarganegaraan_ibu = $data_orang_tua->kewarganegaraan_ibu;
        $nik_ibu = $data_orang_tua->nik_ibu;
        $tempat_lahir_ibu = $data_orang_tua->tempat_lahir_ibu;
        $tanggal_lahir_ibu = $data_orang_tua->tanggal_lahir_ibu;
        $pendidikan_terakhir_ibu = $data_orang_tua->pendidikan_terakhir_ibu;
        $no_hp_ibu = $data_orang_tua->no_hp_ibu;

        $nama_lengkap_wali = $data_orang_tua->nama_lengkap_wali;
        $status_wali = $data_orang_tua->status_wali;
        $kewarganegaraan_wali = $data_orang_tua->kewarganegaraan_wali;
        $nik_wali = $data_orang_tua->nik_wali;
        $tempat_lahir_wali = $data_orang_tua->tempat_lahir_wali;
        $tanggal_lahir_wali = $data_orang_tua->tanggal_lahir_wali;
        $pendidikan_terakhir_wali = $data_orang_tua->pendidikan_terakhir_wali;
        $no_hp_wali = $data_orang_tua->no_hp_wali;

        $data_alamat = $result->data_alamat;
        $tinggal_luar_negeri_ayah = $data_alamat->tinggal_luar_negeri_ayah;
        $kepemilikan_rumah_ayah = $data_alamat->kepemilikan_rumah_ayah;
        $provinsi_ayah = $data_alamat->provinsi_ayah;
        $kabupaten_kota_ayah = $data_alamat->kabupaten_kota_ayah;
        $kecamatan_ayah = $data_alamat->kecamatan_ayah;
        $kelurahan_desa_ayah = $data_alamat->kelurahan_desa_ayah;
        $RT_ayah = $data_alamat->RT_ayah;
        $RW_ayah = $data_alamat->RW_ayah;
        $alamat_ayah = $data_alamat->alamat_ayah;
        $kode_pos_ayah = $data_alamat->kode_pos_ayah;

        $provinsi_ibu = $data_alamat->provinsi_ibu;
        $kabupaten_kota_ibu = $data_alamat->kabupaten_kota_ibu;
        $kecamatan_ibu = $data_alamat->kecamatan_ibu;
        $kelurahan_desa_ibu = $data_alamat->kelurahan_desa_ibu;
        $RT_ibu = $data_alamat->RT_ibu;
        $RW_ibu = $data_alamat->RW_ibu;
        $alamat_ibu = $data_alamat->alamat_ibu;
        $kode_pos_ibu = $data_alamat->kode_pos_ibu;

        $provinsi_wali = $data_alamat->provinsi_wali;
        $kabupaten_kota_wali = $data_alamat->kabupaten_kota_wali;
        $kecamatan_wali = $data_alamat->kecamatan_wali;
        $kelurahan_desa_wali = $data_alamat->kelurahan_desa_wali;
        $RT_wali = $data_alamat->RT_wali;
        $RW_wali = $data_alamat->RW_wali;
        $alamat_wali = $data_alamat->alamat_wali;
        $kode_pos_wali = $data_alamat->kode_pos_wali;

        $data_prestasi1 = $result->data_prestasi1;
        $tahun1 = $data_prestasi1->tahun;
        $nama_lomba1 = $data_prestasi1->nama_lomba;
        $bidang_lomba1 = $data_prestasi1->bidang_lomba;
        $nama_penyelenggara = $data_prestasi1->nama_penyelenggara;
        $lomba_tingkat1 = $data_prestasi1->lomba_tingkat;
        $peringkat_diraih1 = $data_prestasi1->peringkat_diraih;

        $data_prestasi2 = $result->data_prestasi2;
        $tahun2 = $data_prestasi2->tahun;
        $nama_lomba2 = $data_prestasi2->nama_lomba;
        $bidang_lomba2 = $data_prestasi2->bidang_lomba;
        $nama_penyelenggara = $data_prestasi2->nama_penyelenggara;
        $lomba_tingkat2 = $data_prestasi2->lomba_tingkat;
        $peringkat_diraih2 = $data_prestasi2->peringkat_diraih;

        $data_prestasi3 = $result->data_prestasi3;
        $tahun3 = $data_prestasi3->tahun;
        $nama_lomba3 = $data_prestasi3->nama_lomba;
        $bidang_lomba3 = $data_prestasi3->bidang_lomba;
        $nama_penyelenggara = $data_prestasi3->nama_penyelenggara;
        $lomba_tingkat3 = $data_prestasi3->lomba_tingkat;
        $peringkat_diraih3 = $data_prestasi3->peringkat_diraih;

    }else {
        // handle error response
        echo 'Error: ' . $object->response . '<br>';
        echo 'Message: ' . $object->message . '<br>';
    }

    curl_close($curl);
    // echo $response;
    
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
                                            <?= $nama_lengkap; ?> <br>
                                            <?= $nisn; ?> <br>
                                            <?php
                                                if($kewarganegaraan == true) {
                                                    echo 'WNI (Warga Negara Indonesia)';
                                                }else {
                                                    echo 'WNA (Warga Negara Asing)';
                                                }
                                            ?> <br>
                                            <?= $nik; ?> <br>
                                            <?= $tempat_lahir; ?> <br>
                                            <?= $tanggal_lahir; ?> <br>
                                            LAKI - LAKI <br>
                                            <?= $jumlah_saudara; ?> <br>
                                            <?= $anak_ke; ?> <br>
                                            ISLAM <br>
                                            <?= $cita_cite; ?> <br>
                                            <?= $no_hp; ?> <br>
                                            <?= $yang_membiayai; ?> <br>
                                            <?php
                                                if($kebutuhan_khusus == true) {
                                                    echo "Ya";
                                                }else {
                                                    echo "Tidak";
                                                }
                                             $kebutuhan_khusus; ?> <br>
                                            <?= $pra_sekolah; ?> <br>
                                            <?php
                                                if($kip != "" || $kip != "-" || $kip != " ") {
                                                    echo $kip;
                                                }else {
                                                    echo '-';
                                                }
                                            ?> <br>
                                            <?= $kk; ?> <br>
                                            <?= $kepala_keluarga; ?> <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="https://image.mtsnutbs.sch.id/avatar/<?= $avatar; ?>" alt="" srcset=""
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