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
            $isLengkap = $result->isLengkap;

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

<body style="background-color: #f5f5f5;">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h6 style="color: white;">
                    <img src="../assets/img/logo.png" alt="" style="margin-right: 10px;">
                    Madrasah Tsanawiyah NU Tasywiquth Thullab Salafiyah (TBS) Kudus
                </h6>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="../index.php">Beranda</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../sambutankepalamadrasah.php">Sambutan Kepala Madrasah</a></li>
                            <li><a href="../profilmadrasah.php">Profil Madrasah</a></li>
                            <li><a href="../visimisi.php">Visi Misi & Tujuan</a></li>
                            <li><a href="../pendidik.php">Pendidik & Tenaga Kependidikan</a></li>
                            <li><a href="../kurikulum.php">Kurikulum</a></li>
                            <li><a href="../sarana.php">Sarana & Prasarana</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="../brosur.php">Berita</a></li>
                    <li><a class="nav-link" href="../kontakkami.php">Kontak Kami</a></li>
                    <li class="dropdown" style="background-color: #0275d8;">
                        <a href=""><span> Akun</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- About Section -->
        <div id="about" class="area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <h2>Selamat Datang, <span style="color: #4ECB71;"><?php echo $nama_lengkap; ?>!</span></h2>

                            <?php
                                if($keterangan == 2) {
                                    echo "<h4><span class='badge bg-success' style='width: 100%;'>Selamat Anda Diterima MTS Kelas
                                    7!</span></h4>";
                                }elseif($keterangan == 1) {
                                    echo "<h4><span class='badge' style='width: 100%; background-color: #4E53CB'>Selamat Anda Diterima MPTS!</span></h4>";
                                }elseif($keterangan == 0) {
                                    NULL;
                                }
                            ?>
                            <h4><span class='badge bg-warning' style='width: 100%;'>Mohon Cek Kembali Data Diri Anda
                                    (Data Siswa, Data Ortu, Data Alamat dan Data Prestasi)
                                    7!</span></h4>

                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-7">

                        <?php
                            if($status_va == 1) {
                                echo "<h5><i class='bi bi-x-circle-fill' style='color: #df4759'></i>&nbsp; Silahkan Melakukan Pembayaran Rp. 192.000 Melalui Nomor Billing</h5>";
                            }elseif($status_va == 2) {
                                echo "<h5><i class='bi bi-check-circle-fill' style='color: #4ECB71'></i>&nbsp; Pembayaran
                                Sudah
                                LUNAS!</h5>";
                            }else {
                                echo "";
                            }
                        ?>

                    </div>
                    <?php
                        if($status_va == "1") {
                            echo "
                                <div class='col-md-5'>
                                    <a class='btn' href='data-diri.php'
                                        style='background-color: grey; color: white; float: right;' onclick='return false;'>Lengkapi Data
                                        Diri</a>
                                </div>
                            ";
                        }elseif($status_va == "2") {
                            echo "
                                <div class='col-md-5'>
                                    <a class='btn' href='data-diri.php'
                                        style='background-color: #4ECB71; color: white; float: right;' disabled>Lengkapi Data
                                        Diri</a>
                                </div>
                            ";
                        }else {
                            "";
                        }
                    ?>
                </div><br>
                <div class="row g-3">
                    <?php
                        if($isLengkap == 0 && $tujuan_masuk == "MPTS") {
                            echo "<div class='col-md-12'>
                                <a href='cetak-bukti-pembayaran.php' class='btn' style='background-color: grey; color: white; width: 100%;' onclick='return false;'>
                                    <i class='bi bi-printer-fill'></i><span> Cetak Bukti Pembayaran</span>
                                </a>
                            </div>";
                        }elseif($isLengkap == 0 && $tujuan_masuk == "MTS") {
                            echo "
                                <div class='col-md-12'>
                                    <a class='btn' href='cetak-kartu-tes.php'
                                        style='background-color: grey; color: white; width: 100%;' name='cetak_kartu_tes' onclick='return false;'>
                                        <i class='bi bi-printer-fill'></i><span> Cetak Kartu Tes</span>
                                    </a>
                                </div>
                            ";
                        }elseif($isLengkap == 1 && $tujuan_masuk == "MPTS") {
                            echo "<div class='col-md-12'>
                                <a href='cetak-bukti-pembayaran.php' class='btn' style='background-color: grey; color: white; width: 100%;' onclick='return false;'>
                                    <i class='bi bi-printer-fill'></i><span> Cetak Bukti Pembayaran</span>
                                </a>
                            </div>";
                        }elseif($isLengkap == 1 && $tujuan_masuk == "MTS") {
                            echo "
                                <div class='col-md-12'>
                                    <a class='btn' href='cetak-kartu-tes.php'
                                        style='background-color: #4E53CB; color: white; width: 100%;' name='cetak_kartu_tes'>
                                        <i class='bi bi-printer-fill'></i><span> Cetak Kartu Tes</span>
                                    </a>
                                </div>
                            ";
                        }
                    ?>
                    <?php
                        // if($status_va == 1) {
                        //     echo "<div class='col-md-6'>
                        //     <a href='cetak-bukti-pembayaran.php' class='btn' style='background-color: #2AB6D4; color: white; width: 100%;' disabled>
                        //         <i class='bi bi-printer-fill'></i><span> Cetak Bukti Pembayaran</span>
                        //     </a>
                        // </div>";
                        // }else {
                        //     echo "<div class='col-md-6'>
                        //     <a href='cetak-bukti-pembayaran.php' class='btn' style='background-color: #2AB6D4; color: white; width: 100%;'>
                        //         <i class='bi bi-printer-fill'></i><span> Cetak Bukti Pembayaran</span>
                        //     </a>
                        // </div>";
                        // }
                    ?>
                </div><br>

                <!-- Card with an image on left -->
                <div class="card mb-3">
                    <div class="card-header" style="background-color:#4ECB71;">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-6">
                                <span style="color: white; font-weight: bold; font-size: 18px;">Data Diri Anda</span>
                            </div>
                            <div class="col-md-6"
                                style="float: right; color: white; font-weight: bold; font-size: 16px;">
                                <span style="float: right; color: white; font-weight: bold; font-size: 16px;">
                                    <div class="row" style="float: right;">
                                        <p style="float: right; color: white; font-weight: bold; font-size: 16px;">Nomor
                                            Billing</p>
                                        <?php echo $va; ?>
                                    </div>

                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="https://image.mtsnutbs.sch.id/avatar/<?php echo $avatar; ?>"
                                class="img-fluid rounded-start" alt="..."
                                style="margin:10px; height: 250px; width: 250px;">
                        </div>
                        <div class="col-md-5" style="margin-left: 10px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>NISN</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $nisn; ?></p>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-md-4">
                                        <b>Nama Siswa</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $nama_lengkap; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Username</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $username_siswa; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <b>Tempat & Tanggal Lahir</b>
                                    </div>
                                    <div class="col-md-4">
                                        <p><?php echo $tempat_lahir; ?>, <?php echo $tanggal_lahir; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->

                <?php
                    if($status_va == 1) {
                        echo "
                                <div class='card mb-3'>
                                <div class='card-header' style='background-color:#4ECB71;'>
                                    <span style='color: white; font-weight: bold; font-size: 18px;'> Cara Pembayaran </span>
                                </div>
                                <div class='row g-0'>
                                    <div class='col-md-5' style='margin-left: 10px;'>
                                        <div class='card-body'>
                                            <div class='row'>
                                                <div class='col-md-12'>
                                                    <b>BNI Virtual Account Billing</b><br>
                                                    <b>Pembayaran BNI Virtual Account dengan <u>ATM BNI</u></b><br>
                                                    <p>1. Masukkan Kartu Anda.</p>
                                                    <p>2. Pilih Bahasa.</p>
                                                    <p>3. Masukkan PIN ATM Anda.</p>
                                                    <p>4. Pilih 'Menu Lainnya'.</p>
                                                    <p>5. Pilih 'Transfer'.</p>
                                                    <p>6. Pilih Jenis rekening yang akan Anda gunakan (Contoh; 'Dari Rekening Tabungan').</p>
                                                    <p>7. Pilih “Virtual Account Billing”</p>
                                                    <p>8. Masukkan nomor Virtual Account Anda (contoh: 8277087781881441).</p>
                                                    <p>9. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi</p>
                                                    <p>10. Konfirmasi, apabila telah sesuai, lanjutkan transaksi.</p>
                                                    <p>11. Transaksi Anda telah selesai.</p><br><br>

                                                    <b>Pembayaran BNI Virtual Account dengan <u>mobile banking BNI</u></b><br>
                                                    <p>1. Akses BNI Mobile Banking dari handphone kemudian masukkan user ID dan password.</p>
                                                    <p>2. Pilih menu 'Transfer'.</p>
                                                    <p>3. Pilih menu 'Virtual Account Billing' kemudian pilih rekening debet.</p>
                                                    <p>4. Masukkan nomor Virtual Account Anda (contoh: 8277087781881441) pada menu 'inputbaru'.</p>
                                                    <p>5. Tagihan yang harus dibayarkan akan muncul pada layar konfirmasi.</p>
                                                    <p>6. Konfirmasi transaksi dan masukkan Password Transaksi.</p>
                                                    <p>7. Pembayaran Anda Telah Berhasil.</p><br><br>

                                                    <b>Pembayaran BNI Virtual Account dengan <u>BNI sms banking</u></b>
                                                    <p>1. Buka aplikasi SMS Banking BNI</p>
                                                    <p>2. Pilih menu Transfer</p>
                                                    <p>3. Pilih menu Trf rekening BNI</p>
                                                    <p>4. Masukkan nomor rekening tujuan dengan 16 digit Nomor Virtual Account (contoh: 8277087781881441).</p>
                                                    <p>5. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak dapat diproses.</p>
                                                    <p>6. Pilih 'Proses' kemudian 'Setuju'</p>
                                                    <p>7. Reply sms dengan ketik pin sesuai perintah</p>
                                                    <p>8. Transaksi Berhasil</p><br>

                                                    <p>Atau Dapat juga langsung mengetik sms dengan format:</p>
                                                        <b>TRF[SPASI]NomorVA[SPASI]NOMINAL</b><br>
                                                        <p>dan kemudian kirim ke 3346</p>
                                                        <p>Contoh : TRF 8277087781881441 44000</p><br><br>

                                                    <b>Pembayaran BNI Virtual Account dari Cabang atau Outlet BNI (Teller)</b><br>
                                                    <p>1. Kunjungi Kantor Cabang/outlet BNI terdekat</p>
                                                    <p>2. Informasikan kepada Teller, bahwa ingin melakukan pembayaran “Virtual Account Billing” 3. Serahkan nomor Virtual Account Anda kepada Teller</p>
                                                    <p>4. Teller melakukan konfirmasi kepada Anda.</p>
                                                    <p>5. Teller memproses Transaksi</p>
                                                    <p>6. Apabila transaksi Sukses anda akan menerima bukti pembayaran dari Teller tersebut.</p>
                                                    <b>Pembayaran BNI Virtual Account dari Agen46</b><br>
                                                    <p>7. Kunjungi Agen46 terdekat (warung/took/kios dengan tulisan Agen46)</p>
                                                    <p>8. Informasikan kepada Agen46, bahwa ingin melakukan pembayaran 'Virtual Account Billing'</p>
                                                    <p>9. Serahkan nomor Virtual Account Anda kepada Agen46</p>
                                                    <p>10. Agen46 melakukan konfirmasi kepada Anda.</p>
                                                    <p>11. Agen46 Proses Transaksi</p>
                                                    <p>12. Apabila transaksi Sukses anda akan menerima bukti pembayaran dari Agen46 tersebut.</p><br><br>

                                                    <b>Pembayaran BNI Virtual Account dengan ATM Bersama</b><br>
                                                    <p>1. Masukkan kartu ke mesin ATM Bersama.</p>
                                                    <p>2. Pilih 'Transaksi Lainnya'.</p>
                                                    <p>3. Pilih menu 'Transfer'.</p>
                                                    <p>4. Pilih 'Transfer ke Bank Lain'.</p>
                                                    <p>5. Masukkan kode bank BNI (009) dan 16 Digit Nomor Virtual Account (contoh: 8277087781881441).</p>
                                                    <p>6. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak dapat diproses.</p>
                                                    <p>7. Konfirmasi rincian Anda akan tampil di layar, cek dan tekan 'Ya' untuk melanjutkan.</p>
                                                    <p>8. Transaksi Berhasil.</p>

                                                    <b>Pembayaran BNI Virtual Account dari Bank Lain</b><br><br>
                                                    <p>1. Pilih menu 'Transfer antar bank' atau 'Transfer online antarbank'.</p>
                                                    <p>2. Masukkan kode bank BNI (009) atau pilih bank yang dituju yaitu BNI.</p>
                                                    <p>3. Masukan 16 Digit Nomor Virtual Account pada kolom rekening tujuan, (contoh: 8277087781881441).</p>
                                                    <p>4. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda. Nominal yang berbeda tidak dapat diproses.</p>
                                                    <p>5. Masukkan jumlah pembayaran : 44000.</p>
                                                    <p>6. Konfirmasi rincian Anda akan tampil di layar, cek dan apabila sudah sesuai silahkan lanjutkan transaksi sampai dengan selesai.</p>
                                                    <p>7. Transaksi Berhasil.</p><br><br>

                                                    <b>Pembayaran BNI Virtual Account dari OVO</b><br>
                                                    <p>1. Buka aplikasi OVO</p>
                                                    <p>2. Pilih menu Transfer</p>
                                                    <p>3. Pilih 'Rekening Bank'</p>
                                                    <p>4. Masukkan kode bank BNI (009) atau pilih bank yang dituju yaitu BNI.</p>
                                                    <p>5. Masukan 16 Digit Nomor Virtual Account pada kolom rekening tujuan, (contoh: 8277087781881441).</p>
                                                    <p>6. Masukkan nominal transfer sesuai tagihan atau kewajiban Anda</p>
                                                    <p>7. Pilih 'Transfer'</p>
                                                    <p>8. Konfirmasi rincian Anda akan tampil di layar, cek dan apabila sudah sesuai silahkan pilih 'Konfirmasi' untuk lanjutkan transaksi sampai dengan selesai </p>
                                                    <p>9. Transaksi Berhasil</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }elseif ($status_va == 2) {
                        echo "
                                <div class='card mb-3'>
                                <div class='card-header' style='background-color:#4ECB71;'>
                                    <span style='color: white; font-weight: bold; font-size: 18px;'> DATA YANG WAJIB DIISI </span>
                                </div>
                                <div class='row g-0'>
                                    <div class='col-md-5' style='margin-left: 10px;'>
                                        <div class='card-body'>
                                            <div class='row'>
                                                <div class='col-md-12'>
                                                    <p>Silahkan Lengkapi Data Diri Anda Seperti : </p>
                                                    <p>1. Data Diri Siswa</p>
                                                    <p>2. Data Orang Tua/Wali</p>
                                                    <p>3. Data Alamat</p>
                                                    <p>4. Data Prestasi</p>
                                                    <p><i>Form data diri bisa diisi dengan menekan tombol 'Lengkapi Data Diri'</i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
            <!-- End About Section -->

    </main>

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