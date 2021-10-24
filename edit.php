<?php
// ==========================Struktur Program untuk Mengubah data======================
    require 'config/config.php'; // require digunakan untuk memanggil file config.php agar dapat mengirim data CRUD

    // Baris program dibawah merupakan 2 fungsi untuk memanggil data yang sudah Tersimpan pada Database menggunakan fungsi query
    $id = $_GET['id'];
    // fungsi query("...") akan di simpan kedalam variabel $mhs agar nantinya $mhs dapat digunakan pada form di Line 55,56,58, dan 74
    $mhs = query("SELECT * FROM calon_siswa WHERE id = $id")[0];
    
    // Lalu fungsi dibawah adalah untuk Menangkap data dari form dan Mengirim perubahan data ke Proses Update pada file config.php
    if ( isset($_POST['submit']) ){
        if ( update($_POST) > 0 ){
            echo "<script>
                    alert('Data berhasil di ubah!');
                    document.location.href = 'table.php';
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
    <title>Form Edit</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/input.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <ul>
        <li><a href="" class="active">Data</a></li>
        <li><a href="home.php">Home</a></li>
    </ul>
    <div class="header">
        <div class="title">
            <h1>Pendaftaran Mahasiswa Baru</h1>
            <h3>Universitas Bhayangkara Surabaya</h3>
        </div>
    </div>
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
                    <input type="hidden" name="id" value="<?=$mhs['id']?>">
                    <input type="text" name="nama" value="<?=$mhs['nama']?>" class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="alamat" value="<?=$mhs['alamat']?>" class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="nim" value="<?=$mhs['nim']?>" class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="jurusan" value="<?=$mhs['jurusan']?>" class="input" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="nohp" value="<?=$mhs['nohp']?>" class="input" autocomplete="off" required>
                    <br><br>
                    <div class="button">
                        <button type="submit" name="submit" class="submit" onclick="return confirm('Anda yakin ingin mengubah data?')">Ubah Data</button>
                        <button class="batal" onclick="window.location.href='table.php';">Batal</button>
                    </div>
                </form>
                <!-- ====================================================================================================================== -->
            </div>
        </div>
    </section>
</body>
</html>