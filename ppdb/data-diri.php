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
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lengkap</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NISN</b></label>
                                    <input type="text" class="form-control">
                                    <label style="font-style: italic; color: grey;">NB : NISN bisa ditemukan di
                                        raport</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control">
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
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Anak Ke-</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Agama</b></label>
                                    <input type="text" class="form-control" placeholder="Islam" disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Cita - Cita</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP Siswa</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Yang Membiayai</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Orang Tua</option>
                                        <option value="2">Wali Murid</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kebutuhan Khusus</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="2">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Pendidikan Pra Sekolah</b></p>
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>TK / RA</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>PAUD</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Asal Sekolah</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor KIP (Kartu Indonesia Pintar)</b></label>
                                    <input type="text" class="form-control">
                                    <label style="font-style: italic; color: grey;">NB : Isi Jika Mempunyai
                                        KIP</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor KK (Kartu Keluarga)</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Kepala Keluarga</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Data Diri Siswa -->

                        <!-- Data Diri Orang Tua / Wali -->
                        <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Ayah Kandung</span>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nama Lengkap</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Masih Hidup</option>
                                        <option value="2">Meninggal</option>
                                        <option value="2">Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">WNI (Warga Negara Indonesia)</option>
                                        <option value="2">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control">
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pendidikan Terakhir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pekerjaan Utama</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Tidak Bekerja</option>
                                        <option value="2">Pensiunan</option>
                                        <option value="2">PNS</option>
                                        <option value="2">TNI / Polri</option>
                                        <option value="2">Dosen / Guru</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Wiraswasta</option>
                                        <option value="2">Buruh (Tani / Pabrik / Bangunan)</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Penghasilan Rata - Rata</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kurang Dari Rp 5.000.000</option>
                                        <option value="2">Rp 5.000.000 - Rp 10.000.000</option>
                                        <option value="2">Rp 10.000.000 - Rp 20.000.000</option>
                                        <option value="2">Rp 20.000.000 - Rp 30.000.000</option>
                                        <option value="2">Rp 30.000.000 - Rp 50.000.000</option>
                                        <option value="2">Lebih Dari Rp 50.000.000</option>
                                    </select>
                                    <label style="font-style: italic; color: grey;">NB : Penghasilan Dalam 1
                                        Bulan</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP</b></label>
                                    <input type="number" class="form-control">
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
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Masih Hidup</option>
                                        <option value="2">Meninggal</option>
                                        <option value="2">Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">WNI (Warga Negara Indonesia)</option>
                                        <option value="2">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control">
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pendidikan Terakhir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pekerjaan Utama</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Tidak Bekerja</option>
                                        <option value="2">Pensiunan</option>
                                        <option value="2">PNS</option>
                                        <option value="2">TNI / Polri</option>
                                        <option value="2">Dosen / Guru</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Wiraswasta</option>
                                        <option value="2">Buruh (Tani / Pabrik / Bangunan)</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Penghasilan Rata - Rata</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kurang Dari Rp 5.000.000</option>
                                        <option value="2">Rp 5.000.000 - Rp 10.000.000</option>
                                        <option value="2">Rp 10.000.000 - Rp 20.000.000</option>
                                        <option value="2">Rp 20.000.000 - Rp 30.000.000</option>
                                        <option value="2">Rp 30.000.000 - Rp 50.000.000</option>
                                        <option value="2">Lebih Dari Rp 50.000.000</option>
                                    </select>
                                    <label style="font-style: italic; color: grey;">NB : Penghasilan Dalam 1
                                        Bulan</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP</b></label>
                                    <input type="number" class="form-control">
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
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Masih Hidup</option>
                                        <option value="2">Meninggal</option>
                                        <option value="2">Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kewarganegaraan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">WNI (Warga Negara Indonesia)</option>
                                        <option value="2">WNA (Warga Negara Asing)</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>NIK</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Tempat Lahir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for=""><b>Tanggal Lahir</b></label>
                                    <input type="date" class="form-control">
                                    <label style="font-style: italic; color: grey;">NB : Pastikan Tanggal Lahir
                                        Sesuai
                                        Dengan KK</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pendidikan Terakhir</b></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pekerjaan Utama</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Tidak Bekerja</option>
                                        <option value="2">Pensiunan</option>
                                        <option value="2">PNS</option>
                                        <option value="2">TNI / Polri</option>
                                        <option value="2">Dosen / Guru</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Wiraswasta</option>
                                        <option value="2">Buruh (Tani / Pabrik / Bangunan)</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Penghasilan Rata - Rata</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kurang Dari Rp 5.000.000</option>
                                        <option value="2">Rp 5.000.000 - Rp 10.000.000</option>
                                        <option value="2">Rp 10.000.000 - Rp 20.000.000</option>
                                        <option value="2">Rp 20.000.000 - Rp 30.000.000</option>
                                        <option value="2">Rp 30.000.000 - Rp 50.000.000</option>
                                        <option value="2">Lebih Dari Rp 50.000.000</option>
                                    </select>
                                    <label style="font-style: italic; color: grey;">NB : Penghasilan Dalam 1
                                        Bulan</label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Nomor HP</b></label>
                                    <input type="number" class="form-control">
                                </div><br>
                                <!-- End Data Wali -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="background-color: #4ECB71; border-color: #4ECB71; width: 100%;">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Data Diri Orang Tua / Wali -->

                        <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- Data Alamat Ayah Kandung -->
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Alamat Ayah Kandung</span>
                                </div>
                                <div class="col-md-12">
                                    <p><b>Tinggal Di Luar Negeri</b></p>
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Ya</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Tidak</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Milik Sendiri</option>
                                        <option value="2">Milik Orang Tua</option>
                                        <option value="2">Rumah Dinas</option>
                                        <option value="2">Sewa / Kontrak</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa Barat</option>
                                        <option value="2">Jawa Timur</option>
                                        <option value="2">DKI Jakarta</option>
                                        <option value="2">Daerah Istimewa Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kabupaten Kudus</option>
                                        <option value="2">Kabupaten Jepara</option>
                                        <option value="2">Kabupaten Pati</option>
                                        <option value="2">Kabupaten Rembang</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Gebog</option>
                                        <option value="2">Dawe</option>
                                        <option value="2">Bae</option>
                                        <option value="2">Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Besito</option>
                                        <option value="2">Karangmalang</option>
                                        <option value="2">Singocandi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea class="form-control" style="height: 100px"></textarea>
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
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Ya</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Tidak</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Milik Sendiri</option>
                                        <option value="2">Milik Orang Tua</option>
                                        <option value="2">Rumah Dinas</option>
                                        <option value="2">Sewa / Kontrak</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa Barat</option>
                                        <option value="2">Jawa Timur</option>
                                        <option value="2">DKI Jakarta</option>
                                        <option value="2">Daerah Istimewa Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kabupaten Kudus</option>
                                        <option value="2">Kabupaten Jepara</option>
                                        <option value="2">Kabupaten Pati</option>
                                        <option value="2">Kabupaten Rembang</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Gebog</option>
                                        <option value="2">Dawe</option>
                                        <option value="2">Bae</option>
                                        <option value="2">Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Besito</option>
                                        <option value="2">Karangmalang</option>
                                        <option value="2">Singocandi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea class="form-control" style="height: 100px"></textarea>
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
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Ya</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Tidak</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Milik Sendiri</option>
                                        <option value="2">Milik Orang Tua</option>
                                        <option value="2">Rumah Dinas</option>
                                        <option value="2">Sewa / Kontrak</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa Barat</option>
                                        <option value="2">Jawa Timur</option>
                                        <option value="2">DKI Jakarta</option>
                                        <option value="2">Daerah Istimewa Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kabupaten Kudus</option>
                                        <option value="2">Kabupaten Jepara</option>
                                        <option value="2">Kabupaten Pati</option>
                                        <option value="2">Kabupaten Rembang</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Gebog</option>
                                        <option value="2">Dawe</option>
                                        <option value="2">Bae</option>
                                        <option value="2">Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Besito</option>
                                        <option value="2">Karangmalang</option>
                                        <option value="2">Singocandi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div><br>
                                <!-- End Data Alamat Wali Murid -->

                                <!-- Data Alamat Siswa -->
                                <div class="col-md-12">
                                    <span class="badge"
                                        style="background-color: #4ECB71; width: 100%; float: left; font-size: 16px;">Data
                                        Alamat Siswa</span>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Sama Dengan Ayah</b>
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        <b>Pondok Pesantren</b>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Status Kepemilikan Rumah</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Milik Sendiri</option>
                                        <option value="2">Milik Orang Tua</option>
                                        <option value="2">Rumah Dinas</option>
                                        <option value="2">Sewa / Kontrak</option>
                                        <option value="2">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Provinsi</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Jawa Tengah</option>
                                        <option value="2">Jawa Barat</option>
                                        <option value="2">Jawa Timur</option>
                                        <option value="2">DKI Jakarta</option>
                                        <option value="2">Daerah Istimewa Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kabupaten / Kota</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Kabupaten Kudus</option>
                                        <option value="2">Kabupaten Jepara</option>
                                        <option value="2">Kabupaten Pati</option>
                                        <option value="2">Kabupaten Rembang</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kecamatan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Gebog</option>
                                        <option value="2">Dawe</option>
                                        <option value="2">Bae</option>
                                        <option value="2">Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Kelurahan</b></label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected></option>
                                        <option value="1">Besito</option>
                                        <option value="2">Karangmalang</option>
                                        <option value="2">Singocandi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RT</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>RW</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for=""><b>Kode Pos</b></label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Alamat Lengkap</b></label>
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><b>Pondok Pesantren</b></label>
                                    <input type="text" class="form-control">
                                    <label style="font-style: italic; color: grey;">NB : Isi Jika Anda Dari
                                        Pondok Pesntren</label>
                                </div><br>
                                <!-- End Data Alamat Siswa -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg"
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