<?php
// ==========================Struktur Program untuk Menambahkan data======================
    require 'config/config.php'; // require digunakan untuk memanggil file config.php agar dapat mengirim data CRUD

    // Fungsi dibawah digunakan untuk menangkap Data yang di input oleh User (pada Form di Line 49) lalu mengirimkan Data tersebut ke Proses Create
    if ( isset($_POST['submit']) ){
        if ( post($_POST) > 0 ){
            echo "<script>
                    alert('Data berhasil di upload!');
                    document.location.href = 'read.php';
                  </script>";
        }
    }
// ========================================================================================= //
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="header">
        <div class="title">
            <h1>Pendaftaran Mahasiswa Baru</h1>
            <h3>Universitas Bhayangkara Surabaya</h3>
        </div>
    </div>
    <br><br>
    <h4>*Form Daftar Mahasiswa</h4>
    <section class="post">
        <h6>Form Pendaftaran</h6>
        <div class="container">
            <hr class="hr">
        </div>
        <br>
        <div class="container">
            <div class="small-container">
                <!-- Dibawah ini merupakan Form untuk menampung sementara Data yang di input oleh User lalu ketika tombol DAFTAR ditekan maka data akan dikirimkan pada fungsi IF ISSET di Line 6 -->
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Masukkan Nama..." class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat..." class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="nim" placeholder="Masukkan Nim..." class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="jurusan" placeholder="Masukkan Jurusan..." class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="nohp" placeholder="No. Hp anda..." class="input" autocomplete="off" required>
                    <br><br>
                    <div class="button">
                        <button type="submit" name="submit" class="submit">Daftar</button>
                    </div>
                </form>
                <!-- ====================================================================================================================== -->
            </div>
        </div>
    </section>
    <br><br>
    <h6>
        <a href="index.php">Kembali ke Halaman Utama</a>
    </h6>
    <br>
    <div class="footer">
        <p>Ubhara.ac.id</p>
        <p>Allrigths reserved</p>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>