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
    <h4>*Daftar Calon Mahasiswa Baru</h4>
    <br>
    <section class="get">
        <div class="table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>No. HP</th>
                    <th>Pilihan</th>
                </tr>
                <!-- Dibawah ini merupakan kumpulan fungsi untuk menampilkan Data pada variabel $students -->
                <?php $i = 1 ?>
                <?php foreach ( $students as $student ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td class="kiri"><?= $student['nama']; ?></td>
                    <td class="kiri"><?= $student['alamat']; ?></td>
                    <td class="kiri"><?= $student['nim']; ?></td>
                    <td class="kiri"><?= $student['jurusan'] ?></td>
                    <td class="kiri"><?= $student['nohp'] ?></td>
                    <td>
                        <!-- Dibawah ini merupakan baris program untuk Melakukan Request Update / Delete ke file config.php -->
                        <!-- Ketika tombol Ubah di tekan, maka akan me-Request ke Prosesnya masing-masing melaui href="" berdasarkan 'id' -->
                        <a href="update.php?id=<?= $student['id']; ?>">Ubah |</a>
                        <a href="delete.php?id=<?= $student['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"> Hapus</a>
                        <!-- ============================================================================================================= -->
                    </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach ?>
                <!-- ====================================================================================================================== -->
            </table>
        </div>
    </section>
    <br>
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