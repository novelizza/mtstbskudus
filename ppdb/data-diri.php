<?php

    session_start();

    $username = $_SESSION['username'];
    $session = $_SESSION['session'];
    $session_expiry = $_SESSION['session_expiry'];
    $id_akun_siswa = $_SESSION['id_akun_siswa'];

        $current_time = time();
        if ($current_time > $session_expiry) {
            header('location: login.php');
            exit;
        }
        
    if(isset($_POST['data_diri_siswa'])) {
        $nik_siswa = $_POST['nik_siswa'];
        $warga_siswa = $_POST['warga_siswa'];
        $tempat_siswa = $_POST['tempat_siswa'];
        $tanggal_siswa = $_POST['tanggal_siswa'];
        $saudara_siswa = $_POST['saudara_siswa'];
        $anak_siswa = $_POST['anak_siswa'];
        $cita_siswa = $_POST['cita_siswa'];
        $hp_siswa = $_POST['hp_siswa'];
        $biaya_siswa = $_POST['biaya_siswa'];
        $kebutuhan_siswa = $_POST['kebutuhan_siswa'];
        $prasekolah = $_POST['prasekolah'];
        $sekolah_siswa = $_POST['sekolah_siswa'];
        $kip_siswa = $_POST['kip_siswa'];
        $kk_siswa = $_POST['kk_siswa'];
        $kepala_siswa = $_POST['kepala_siswa'];

        $data = array(
            'nik' => $nik_siswa,
            'kewarganegaraan' => $warga_siswa,
            'jenis_kelamin' => '1',
            'jumlah_saudara' => $saudara_siswa,
            'anak_ke' => $anak_siswa,
            'agama' => 'Islam',
            'cita_cita' => $cita_siswa,
            'no_hp' => $hp_siswa, 
            'yang_membiayai' => $biaya_siswa,
            'kebutuhan_khusus' => $kebutuhan_siswa,
            'prasekolah' => $prasekolah,
            'kip' => $kip_siswa,
            'kk' => $kk_siswa, 
            'kepala_keluarga' => $kepala_siswa
        );

        // echo $data_string;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/api/siswa/data-siswa',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_HTTPHEADER => array(
            'session: '.$session.'',
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        curl_exec($curl);
        // echo $response;
        // Check for errors
        if (curl_errno($curl)) {
            $errorMessage = curl_error($curl);
            // Handle error
        }else {
            // echo curl_exec($curl);
            header('location: data-diri.php');
            exit();
        }
            // Close cURL session
        curl_close($curl);
    }

    if(isset($_POST['data_ortu_wali'])) {
        $nama_ayah = $_POST['nama_ayah'];
        $status_ayah = $_POST['status_ayah'];
        $warga_ayah = $_POST['warga-ayah'];
        $nik_ayah = $_POST['nik_ayah'];
        $lahir_ayah = $_POST['lahir_ayah'];
        $tanggal_ayah = $_POST['tanggal_ayah'];
        $pendidikan_ayah = $_POST['pendidikan_ayah'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $penghasilan_ayah = $_POST['penghasilan_ayah'];
        $hp_ayah = $_POST['hp_ayah'];

        $nama_ibu = $_POST['nama_ibu'];
        $status_ibu = $_POST['status_ibu'];
        $warga_ibu = $_POST['warga-ibu'];
        $nik_ibu = $_POST['nik_ibu'];
        $lahir_ibu = $_POST['lahir_ibu'];
        $tanggal_ibu = $_POST['tanggal_ibu'];
        $pendidikan_ibu = $_POST['pendidikan_ibu'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $penghasilan_ibu = $_POST['penghasilan_ibu'];
        $hp_ibu = $_POST['hp_ibu'];
        
        $nama_wali = $_POST['nama_wali'];
        $status_wali = $_POST['status_wali'];
        $warga_wali = $_POST['warga-wali'];
        $nik_wali = $_POST['nik_wali'];
        $lahir_wali = $_POST['lahir_wali'];
        $tanggal_wali = $_POST['tanggal_wali'];
        $pendidikan_wali = $_POST['pendidikan_wali'];
        $pekerjaan_wali = $_POST['pekerjaan_wali'];
        $penghasilan_wali = $_POST['penghasilan_wali'];
        $hp_wali = $_POST['hp_wali'];

        $data_ortu = array(
            'nama_lengkap_ayah' => $nama_ayah,
            'status_ayah' => $status_ayah,
            'kewarganegaraan_ayah' => $warga_ayah,
            'nik_ayah' => $nik_ayah,
            'tempat_lahir_ayah' => $lahir_ayah,
            'tanggal_lahir_ayah' => $tanggal_ayah,
            'pendidikan_terakhir_ayah' => $pendidikan_ayah,
            'pekerjaan_utama_ayah' => $pekerjaan_ayah, 
            'penghasilan_rata_rata_ayah' => $penghasilan_ayah,
            'no_hp_ayah' => $hp_ayah,
            'nama_lengkap_ibu' => $nama_ibu,
            'status_ibu' => $status_ibu,
            'kewarganegaraan_ibu' => $warga_ibu,
            'nik_ibu' => $nik_ibu,
            'tempat_lahir_ibu' => $lahir_ibu,
            'tanggal_lahir_ibu' => $tanggal_ibu,
            'pendidikan_terakhir_ibu' => $pendidikan_ibu,
            'pekerjaan_utama_ibu' => $pekerjaan_ibu, 
            'penghasilan_rata_rata_ibu' => $penghasilan_ibu,
            'no_hp_ibu' => $hp_ibu,
            'nama_lengkap_wali' => $nama_wali,
            'status_wali' => $status_wali,
            'kewarganegaraan_wali' => $warga_wali,
            'nik_wali' => $nik_ibu,
            'tempat_lahir_wali' => $lahir_wali,
            'tanggal_lahir_wali' => $tanggal_wali,
            'pendidikan_terakhir_wali' => $pendidikan_wali,
            'pekerjaan_utama_wali' => $pekerjaan_wali, 
            'penghasilan_rata_rata_wali' => $penghasilan_wali,
            'no_hp_wali' => $hp_wali
        );
        

        $curl = curl_init();
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:4000/api/siswa/data-orangtua',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => http_build_query($data_ortu),
        CURLOPT_HTTPHEADER => array(
            'session: '.$session.'',
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));
    
        curl_exec($curl);
        // echo $responseDataDiri;
        // Check for errors
        if (curl_errno($curl)) {
            $errorMessage = curl_error($curl);
            // Handle error
        }else {
            echo curl_exec($curl);
            // header('location: data-diri.php');
        }
            // Close cURL session
        curl_close($curl);
    }

    if(isset($_POST['data_alamat'])) {
        $tinggal_ayah = $_POST['tinggal_ayah'];
        $milik_rumah_ayah = $_POST['milik_rumah_ayah'];
        $provinsi_ayah = $_POST['provinsi_ayah'];
        $kabupaten_ayah = $_POST['kabupaten_ayah'];
        $kecamatan_ayah = $_POST['kecamatan_ayah'];
        $kelurahan_ayah = $_POST['kelurahan_ayah'];
        $rt_ayah = $_POST['rt_ayah'];
        $rw_ayah = $_POST['rw_ayah'];
        $pos_ayah = $_POST['pos_ayah'];
        $alamat_lengkap_ayah = $_POST['alamat_lengkap_ayah'];

        $tinggal_ibu = $_POST['tinggal_ibu'];
        $milik_rumah_ibu = $_POST['milik_rumah_ibu'];
        $provinsi_ibu = $_POST['provinsi_ibu'];
        $kabupaten_ibu = $_POST['kabupaten_ibu'];
        $kecamatan_ibu = $_POST['kecamatan_ibu'];
        $kelurahan_ibu = $_POST['kelurahan_ibu'];
        $rt_ibu = $_POST['rt_ibu'];
        $rw_ibu = $_POST['rw_ibu'];
        $pos_ibu = $_POST['pos_ibu'];
        $alamat_lengkap_ibu = $_POST['alamat_lengkap_ibu'];

        $tinggal_wali = $_POST['tinggal_wali'];
        $milik_rumah_wali = $_POST['milik_rumah_wali'];
        $provinsi_wali = $_POST['provinsi_wali'];
        $kabupaten_wali = $_POST['kabupaten_wali'];
        $kecamatan_wali = $_POST['kecamatan_wali'];
        $kelurahan_wali = $_POST['kelurahan_wali'];
        $rt_wali = $_POST['rt_wali'];
        $rw_wali = $_POST['rw_wali'];
        $pos_wali = $_POST['pos_wali'];
        $alamat_lengkap_wali = $_POST['alamat_lengkap_wali'];

        $tinggal_siswa = $_POST['tinggal_siswa'];
        $milik_rumah_siswa = $_POST['milik_rumah_siswa'];
        $provinsi_siswa = $_POST['provinsi_siswa'];
        $kabupaten_siswa = $_POST['kabupaten_siswa'];
        $kecamatan_siswa = $_POST['kecamatan_siswa'];
        $kelurahan_siswa = $_POST['kelurahan_siswa'];
        $rt_siswa = $_POST['rt_siswa'];
        $rw_siswa = $_POST['rw_siswa'];
        $pos_siswa = $_POST['pos_siswa'];
        $alamat_lengkap_siswa = $_POST['alamat_lengkap_siswa'];

        $data_alamat_all = array(
            'tinggal_luar_negeri_ayah' => $tinggal_ayah,
            'kepemilikan_rumah_ayah' => $milik_rumah_ayah,
            'provinsi_ayah' => $provinsi_ayah,
            'kabupaten_kota_ayah' => $kabupaten_ayah,
            'kecamatan_ayah' => $kecamatan_ayah,
            'kelurahan_desa_ayah' => $kelurahan_ayah,
            'RT_ayah' => $rt_ayah,
            'RW_ayah' => $rw_ayah,
            'alamat_ayah' => $alamat_lengkap_ayah,
            'kode_pos_ayah' => $pos_ayah,
            'tinggal_luar_negeri_ayah' => $tinggal_ayah,
            'kepemilikan_rumah_ayah' => $milik_rumah_ayah,
            'provinsi_ayah' => $provinsi_ayah,
            'kabupaten_kota_ayah' => $kabupaten_ayah,
            'kecamatan_ayah' => $kecamatan_ayah,
            'kelurahan_desa_ayah' => $kelurahan_ayah,
            'RT_ayah' => $rt_ayah,
            'RW_ayah' => $rw_ayah,
            'alamat_ayah' => $alamat_lengkap_ayah,
            'kode_pos_ayah' => $pos_ayah,
            'tinggal_luar_negeri_ayah' => $tinggal_ayah,
            'kepemilikan_rumah_ayah' => $milik_rumah_ayah,
            'provinsi_ayah' => $provinsi_ayah,
            'kabupaten_kota_ayah' => $kabupaten_ayah,
            'kecamatan_ayah' => $kecamatan_ayah,
            'kelurahan_desa_ayah' => $kelurahan_ayah,
            'RT_ayah' => $rt_ayah,
            'RW_ayah' => $rw_ayah,
            'alamat_ayah' => $alamat_lengkap_ayah,
            'kode_pos_ayah' => $pos_ayah,
        );
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
    <link href="../admin/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness - v4.10.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #F5F5F5;">

    <!-- <main id="main"> -->
    <div class="row" style="margin: 50px;">
        <div class="col-lg-12">
            <nav style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="beranda.php">Akun</a></li>
                    <li class="breadcrumb-item active">Data Diri</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12">
            <div class="card" style="align: center;">
                <div class="card-header" style="background-color: #324032;">
                    <div class="row">
                        <div class="col-lg-1">
                            <img src="../assets/img/logo.png" alt="" style="width: 50px; height: 51px;">
                        </div>
                        <div class="col-lg-11">
                            <span
                                style="font-size: 20px; color: white; display: flex; justify-content: center;">LENGKAPI
                                DATA DIRI ANDA</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Default Tabs -->
                    <ul class="nav nav-tabs-bordered d-flex" id="myTabjustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-justified" type="button" role="tab" aria-controls="home"
                                aria-selected="true" style="font-weight: bold; font-size: 16px;">Data Diri
                                Siswa</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile"
                                aria-selected="false" style="font-weight: bold; font-size: 16px;">Data Diri Orang
                                Tua /
                                Wali</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact"
                                aria-selected="false" style="font-weight: bold; font-size: 16px;">Data
                                Alamat</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="contact1-tab" data-bs-toggle="tab"
                                data-bs-target="#contact1-justified" type="button" role="tab" aria-controls="contact1"
                                aria-selected="false" style="font-weight: bold; font-size: 16px;">Data
                                Prestasi</button>
                        </li>
                    </ul>

                    <!-- Data Diri Siswa -->
                    <div class="tab-content pt-2" id="myTabjustifiedContent">
                        <div class="tab-pane fade show active" id="home-justified" role="tabpanel"
                            aria-labelledby="home-tab">
                            <form class="row g-3" action="" method="post">
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control" name="nik_siswa" required>
                                    <label style="font-style: italic; color: grey;">NB : NIK bisa ditemukan di
                                        Kartu Keluarga</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example" name="warga_siswa"
                                        required>
                                        <option value="" selected></option>
                                        <option value="1">WNI (Warga Negara Indonesia)</option>
                                        <option value="0">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control" name="tempat_siswa" required>
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control" name="tanggal_siswa" required>
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Jenis Kelamin</b></label>
                                    <input type="text" class="form-control" placeholder="Laki-Laki" disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Jumlah Saudara</b></label>
                                    <input type="text" class="form-control" name="saudara_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Anak Ke-</b></label>
                                    <input type="text" class="form-control" name="anak_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Agama</b></label>
                                    <input type="text" class="form-control" placeholder="Islam" disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Cita - Cita</b></label>
                                    <input type="text" class="form-control" name="cita_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP Siswa</b></label>
                                    <input type="number" class="form-control" name="hp_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Yang Membiayai</b></label>
                                    <select class="form-select" aria-label="Default select example" name="biaya_siswa"
                                        required>
                                        <option value="" selected></option>
                                        <option value="Orang Tua">Orang Tua</option>
                                        <option value="Wali Murid">Wali Murid</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kebutuhan Khusus</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="kebutuhan_siswa" required>
                                        <option selected></option>
                                        <option value="0">Ya</option>
                                        <option value="1">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Pendidikan Pra Sekolah</b></p>
                                    <input class="form-check-input" type="radio" id="gridRadios1" value="TK / RA"
                                        name="prasekolah">
                                    <label class="form-check-label" for="gridRadios1">
                                        TK / RA
                                    </label>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" id="gridRadios1" value="PAUD"
                                        name="prasekolah">
                                    <label class="form-check-label" for="gridRadios1">
                                        PAUD
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Asal Sekolah</b></label>
                                    <input type="text" class="form-control" name="sekolah_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor KIP (Kartu Indonesia Pintar)</b></label>
                                    <input type="number" class="form-control" name="kip_siswa">
                                    <label style="font-style: italic; color: grey;">NB : Isi Jika Mempunyai
                                        KIP</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor KK (Kartu Keluarga)</b></label>
                                    <input type="number" class="form-control" name="kk_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Kepala Keluarga</b></label>
                                    <input type="text" class="form-control" name="kepala_siswa" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" name="data_diri_siswa"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Data Diri Siswa -->

                        <!-- Data Diri Orang Tua / Wali -->
                        <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                            <form class="row g-3" action="" method="post">
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Ayah Kandung</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lengkap</b></label>
                                    <input type="text" class="form-control" name="nama_ayah" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example" name="status_ayah"
                                        required>
                                        <option value="" selected></option>
                                        <option value="Hidup">Masih Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                        <option value="Tidak Tahu">Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example" name="warga_ayah"
                                        required>
                                        <option value="" selected></option>
                                        <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                        <option value="WNA">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control" name="nik_ayah" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control" name="lahir_ayah" required>
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control" name="tanggal_ayah" required>
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pendidikan Terakhir</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="pendidikan_ayah" required>
                                        <option value="" selected></option>
                                        <option value="SD">SD</option>
                                        <option value="SLTP">SLTP</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pekerjaan Utama</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="pekerjaan_ayah" required>
                                        <option value="" selected></option>
                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI/POLRI">TNI / Polri</option>
                                        <option value="Dosen/Guru">Dosen / Guru</option>
                                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani / Pabrik / Bangunan)
                                        </option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Penghasilan Rata - Rata</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="penghasilan_ayah" required>
                                        <option value="" selected></option>
                                        <option value="Kurang Dari 5000000">Kurang Dari Rp 5.000.000</option>
                                        <option value="5000000-10000000">Rp 5.000.000 - Rp 10.000.000
                                        </option>
                                        <option value="10000000-20000000">Rp 10.000.000 - Rp 20.000.000
                                        </option>
                                        <option value="20000000-30000000">Rp 20.000.000 - Rp 30.000.000
                                        </option>
                                        <option value="30000000-50000000">Rp 30.000.000 - Rp 50.000.000
                                        </option>
                                        <option value="Diatas 50000000">Lebih Dari Rp 50.000.000</option>
                                    </select>
                                    <label style="font-style: italic; color: grey;">NB : Penghasilan Dalam 1
                                        Bulan</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP</b></label>
                                    <input type="number" class="form-control" name="hp_ayah" required>
                                </div><br>
                                <!-- End Data Ayah Kandung -->

                                <!-- Data Ibu Kandung -->
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Ibu Kandung</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lengkap</b></label>
                                    <input type="text" class="form-control" name="nama_ibu" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example" name="status_ibu"
                                        required>
                                        <option value="" selected></option>
                                        <option value="Hidup">Masih Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                        <option value="Tidak Tahu">Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example" name="warga_ibu"
                                        required>
                                        <option value="" selected></option>
                                        <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                        <option value="WNA">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control" name="nik_ibu" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control" name="lahir_ibu" required>
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control" name="tanggal_ibu" required>
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pendidikan Terakhir</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="pendidikan_ibu" required>
                                        <option value="" selected></option>
                                        <option value="SD">SD</option>
                                        <option value="SLTP">SLTP</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pekerjaan Utama</b></label>
                                    <select class="form-select" aria-label="Default select example" name="pekerjaan_ibu"
                                        required>
                                        <option value="" selected></option>
                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI/POLRI">TNI / Polri</option>
                                        <option value="Dosen/Guru">Dosen / Guru</option>
                                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani / Pabrik / Bangunan)
                                        </option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Penghasilan Rata - Rata</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="penghasilan_ibu" required>
                                        <option value="" selected></option>
                                        <option value="Kurang Dari 5000000">Kurang Dari Rp 5.000.000</option>
                                        <option value="5000000-10000000">Rp 5.000.000 - Rp 10.000.000
                                        </option>
                                        <option value="10000000-20000000">Rp 10.000.000 - Rp 20.000.000
                                        </option>
                                        <option value="20000000-30000000">Rp 20.000.000 - Rp 30.000.000
                                        </option>
                                        <option value="30000000-50000000">Rp 30.000.000 - Rp 50.000.000
                                        </option>
                                        <option value="Diatas 50000000">Lebih Dari Rp 50.000.000</option>
                                    </select>
                                    <label style="font-style: italic; color: grey;">NB : Penghasilan Dalam 1
                                        Bulan</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP</b></label>
                                    <input type="number" class="form-control" name="hp_ibu" required>
                                </div><br>
                                <!-- End Data Ibu Kandung -->

                                <!-- Data Wali -->
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Wali Murid (Jika Ada)</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lengkap</b></label>
                                    <input type="text" class="form-control" name="nama_wali">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example" name="status_wali">
                                        <option value="" selected></option>
                                        <option value="Hidup">Masih Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                        <option value="Tidak Tahu">Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example" name="warga_wali">
                                        <option value="" selected></option>
                                        <option value="WNI">WNI (Warga Negara Indonesia)</option>
                                        <option value="WNA">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control" name="nik_wali">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control" name="lahir_wali">
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control" name="tanggal_wali">
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pendidikan Terakhir</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="pendidikan_wali">
                                        <option value="" selected></option>
                                        <option value="SD">SD</option>
                                        <option value="SLTP">SLTP</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pekerjaan Utama</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="pekerjaan_wali">
                                        <option value="" selected></option>
                                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI/POLRI">TNI / Polri</option>
                                        <option value="Dosen/Guru">Dosen / Guru</option>
                                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani / Pabrik / Bangunan)
                                        </option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Penghasilan Rata - Rata</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="penghasilan_wali">
                                        <option value="" selected></option>
                                        <option value="Kurang Dari 5000000">Kurang Dari Rp 5.000.000</option>
                                        <option value="5000000-10000000">Rp 5.000.000 - Rp 10.000.000
                                        </option>
                                        <option value="10000000-20000000">Rp 10.000.000 - Rp 20.000.000
                                        </option>
                                        <option value="20000000-30000000">Rp 20.000.000 - Rp 30.000.000
                                        </option>
                                        <option value="30000000-50000000">Rp 30.000.000 - Rp 50.000.000
                                        </option>
                                        <option value="Diatas 50000000">Lebih Dari Rp 50.000.000</option>
                                    </select>
                                    <label style="font-style: italic; color: grey;">NB : Penghasilan Dalam 1
                                        Bulan</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP</b></label>
                                    <input type="number" class="form-control" name="hp_wali">
                                </div><br>
                                <!-- End Data Wali -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" name="data_ortu_wali"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Data Diri Orang Tua / Wali -->

                        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Data Alamat Ayah Kandung -->
                            <form class="row g-3" action="" method="post">
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Alamat Ayah Kandung</span>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Tinggal Di Luar Negeri</b></p>
                                    <input class="form-check-input" type="radio" id="gridRadios1" value="0"
                                        name="tinggal_ayah">
                                    <label class="form-check-label" for="gridRadios1">
                                        YA
                                    </label>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" id="gridRadios1" value="1"
                                        name="tinggal_ayah">
                                    <label class="form-check-label" for="gridRadios1">
                                        TIDAK
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="milik_rumah_ayah">
                                        <option value="" selected></option>
                                        <option value="MILIK SENDIRI">Milik Sendiri</option>
                                        <option value="MILIK ORANG TUA">Milik Orang Tua</option>
                                        <option value="RUMAH DINAS">Rumah Dinas</option>
                                        <option value="SEWA/KONTRAK">Sewa / Kontrak</option>
                                        <option value="LAINNYA">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <input type="text" class="form-control" name="provinsi_ayah" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <input type="text" class="form-control" name="kabupaten_ayah" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <input type="text" class="form-control" name="kecamatan_ayah" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <input type="text" class="form-control" name="kelurahan_ayah" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input type="number" class="form-control" name="rt_ayah" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input type="number" class="form-control" name="rw_ayah" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input type="number" class="form-control" name="pos_ayah" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea class="form-control" style="height: 100px" name="alamat_lengkap_ayah"
                                        required></textarea>
                                </div><br>
                                <!-- End Data Alamat Ayah Kandung -->

                                <!-- Data Alamat Ibu Kandung -->
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Alamat Ibu Kandung</span>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Sama Dengan Ayah</b></p>
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="YA" name="tinggal_ibu">
                                    <label class="form-check-label" for="gridRadios1">
                                        YA
                                    </label>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="TIDAK" name="tinggal_ibu">
                                    <label class="form-check-label" for="gridRadios1">
                                        TIDAK
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select name="milik_rumah_ibu" class="form-select"
                                        aria-label="Default select example">
                                        <option value="" selected></option>
                                        <option value="MILIK SENDIRI">Milik Sendiri</option>
                                        <option value="MILIK ORANG TUA">Milik Orang Tua</option>
                                        <option value="RUMAH DINAS">Rumah Dinas</option>
                                        <option value="SEWA/KONTRAK">Sewa / Kontrak</option>
                                        <option value="LAINNYA">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <input type="text" class="form-control" name="provinsi_ibu" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <input type="text" class="form-control" name="kabupaten_ibu" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <input type="text" class="form-control" name="kecamatan_ibu" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <input type="text" class="form-control" name="kelurahan_ibu" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input name="rt_ibu" type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input name="rw_ibu" type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input class="pos_ibu" type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea name="alamat_lengkap_ibu" class="form-control"
                                        style="height: 100px"></textarea>
                                </div><br>
                                <!-- End Data Alamat Ibu Kandung -->

                                <!-- Data Alamat Wali Murid -->
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Alamat Wali Murid (Jika Ada)</span>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Sama Dengan Ayah</b></p>
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="YA" name="tinggal_wali">
                                    <label class="form-check-label" for="gridRadios1">
                                        YA
                                    </label>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="TIDAK" name="tinggal_wali">
                                    <label class="form-check-label" for="gridRadios1">
                                        TIDAK
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="milik_rumah_wali">
                                        <option value="" selected></option>
                                        <option value="MILIK SENDIRI">Milik Sendiri</option>
                                        <option value="MILIK ORANG TUA">Milik Orang Tua</option>
                                        <option value="RUMAH DINAS">Rumah Dinas</option>
                                        <option value="SEWA/KONTRAK">Sewa / Kontrak</option>
                                        <option value="LAINNYA">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <input type="text" class="form-control" name="provinsi_wali" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <input name="kabupaten_wali" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <input name="camat_wali" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <input name="lurah_wali" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input name="rt_wali" type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input name="rw_wali" type="number" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input name="pos_wali" type="number" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea name="alamat_lengkap_wali" class="form-control" style="height: 100px"
                                        required></textarea>
                                </div><br>
                                <!-- End Data Alamat Wali Murid -->

                                <!-- Data Alamat Siswa -->
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Alamat Siswa</span>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="sama_ayah"
                                        value="Sama dengan Ayah">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Sama Dengan Ayah</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck"
                                        name="pondok_pesantren" value="Pondok Pesantren">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Pondok Pesantren</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="milik_rumah_siswa">
                                        <option value="" selected></option>
                                        <option value="MILIK SENDIRI">Milik Sendiri</option>
                                        <option value="MILIK ORANG TUA">Milik Orang Tua</option>
                                        <option value="RUMAH DINAS">Rumah Dinas</option>
                                        <option value="SEWA/KONTRAK">Sewa / Kontrak</option>
                                        <option value="LAINNYA">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <input type="text" class="form-control" name="provinsi_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <input type="text" class="form-control" name="kabupaten_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <input type="text" class="form-control" name="kecamatan_siswa" required>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <input type="text" class="form-control" name="kelurahan_siswa" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input type="number" class="form-control" name="rt_siswa" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input type="number" class="form-control" name="rw_siswa" required>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input type="number" class="form-control" name="pos_siswa">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea class="form-control" style="height: 100px" name="alamat_lengkap_siswa"
                                        required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pondok Pesantren</b></label>
                                    <input type="text" class="form-control" name="ponpes">
                                    <label style="font-style: italic; color: grey;">NB : Isi Jika Anda Dari
                                        Pondok Pesntren</label>
                                </div><br>
                                <!-- End Data Alamat Siswa -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" name="data_alamat"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">SIMPAN</button>
                                </div>
                            </form>
                        </div>

                        <!-- Data Prestasi Siswa -->
                        <div class="tab-pane fade show" id="contact1-justified" role="tabpanel"
                            aria-labelledby="home-tab">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Prestasi
                                        1</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tahun</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lomba</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Bidang Lomba</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Penyelenggara</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Lomba Tingkat</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Peirngkat Yang Diraih</b></label>
                                    <input type="text" class="form-control">
                                </div><br>
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Prestasi
                                        2</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tahun</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lomba</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Bidang Lomba</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Penyelenggara</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Lomba Tingkat</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Peirngkat Yang Diraih</b></label>
                                    <input type="text" class="form-control">
                                </div><br>
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Prestasi
                                        3</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tahun</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lomba</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Bidang Lomba</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Penyelenggara</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Lomba Tingkat</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Peirngkat Yang Diraih</b></label>
                                    <input type="text" class="form-control">
                                </div><br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Data Prestasi -->
                    </div><!-- End Default Tabs -->
                </div>
            </div>
        </div>
    </div>
    <!-- </main> -->
    <!-- Vendor JS Files -->
    <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../admin/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../admin/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../admin/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../admin/assets/js/main.js"></script>

</body>

</html>