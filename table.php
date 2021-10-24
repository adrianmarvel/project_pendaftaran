<?php
// ==========================Struktur Program untuk Menampilkan data=======================
    require 'config/config.php'; // require digunakan untuk memanggil file config.php agar dapat mengirim data CRUD

    // Fungsi dibawah digunakan untuk menampung data pada tabel calon_siswa (Proses Read), lalu data tersebut di Assignment/Disimpan kedalam variabel $students untuk dipanggil/ditampilkan pada tabel di Line 43
    $students = query('SELECT * FROM calon_siswa');
// ========================================================================================= //
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/table.css">
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
    <section class="get">
        <div class="table">
            <div class="subheader">
                <p>*Daftar Calon Mahasiswa Baru</p>
                <button class="tambah" onclick="window.location.href='input.php';">Tambah Mahasiswa +</button>
            </div>
            <table>
                <tr>
                    <th class="id">ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>No. HP</th>
                    <th class="pilihan">Pilihan</th>
                </tr>
                <!-- Dibawah ini merupakan kumpulan fungsi untuk menampilkan Data pada variabel $students -->
                <?php $i = 1 ?>
                <?php foreach ( $students as $student ) : ?>
                <tr>
                    <td class="idBody"><?= $i; ?></td>
                    <td ><?= $student['nama']; ?></td>
                    <td><?= $student['alamat']; ?></td>
                    <td><?= $student['nim']; ?></td>
                    <td><?= $student['jurusan'] ?></td>
                    <td><?= $student['nohp'] ?></td>
                    <td class="pilihanBody">
                        <!-- Dibawah ini merupakan baris program untuk Melakukan Request Update / Delete ke file config.php -->
                        <!-- Ketika tombol Ubah di tekan, maka akan me-Request ke Prosesnya masing-masing melaui href="" berdasarkan 'id' -->
                        
                        <a href="edit.php?id=<?= $student['id']; ?>"><img src="assets/img/edit.png">|</a>
                        <a href="delete.php?id=<?= $student['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><img src="assets/img/trash.png"></a>
                        
                        <!-- ============================================================================================================= -->
                    </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach ?>
                <!-- ====================================================================================================================== -->
            </table>
        </div>
    </section>
</body>
</html>