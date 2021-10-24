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
    <h4>*Form Edit Mahasiswa</h4>
    <section class="post">
        <h6>Form Edit</h6>
        <div class="container">
            <hr class="hr">
        </div>
        <br>
        <div class="container">
            <div class="small-container">
                <!-- Dibawah ini merupakan form untuk menampilkan Data dan mengirim perubahan data ke fungsi IF ISSET -->
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?=$mhs['id']?>">
                    <input type="text" name="nama" class="input" value="<?=$mhs['nama']?>" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="alamat" class="input" value="<?=$mhs['alamat']?>" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="nim" class="input" value="<?=$mhs['nim']?>" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="jurusan" class="input" value="<?=$mhs['jurusan']?>" autocomplete="off" required>
                    <br><br>
                    <input type="text" name="nohp" class="input" value="<?=$mhs['nohp']?>" autocomplete="off" required>
                    <br><br>
                    <div class="button">
                        <button type="submit" name="submit" class="submit" onclick="return confirm('Anda yakin ingin mengubah data?')">Ubah Data</button>
                    </div>
                </form>
                <!-- ================================================================================================================= -->
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
</body>
</html>