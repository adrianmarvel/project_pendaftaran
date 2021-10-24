<?php
// ==========================Struktur Program untuk Menghapus data=========================
    require 'config/config.php';

    $id = $_GET['id'];

    // Fungsi dibawah akan menjalankan Proses Hapus untuk menghapus data ketika tombol Hapus pada file read.php ditekan
    if ( hapus($id) > 0 ){
        echo "<script>
                alert('Data berhasil di hapus!');
                document.location.href = 'table.php';
              </script>";
    }
// ========================================================================================= //
?>