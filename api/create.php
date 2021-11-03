<?php
    require_once('../config/koneksi.php');

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $nohp = $_POST['nohp'];
    $hasil = "Gagal memasukan data";
    if($nama and $alamat and $nim and $jurusan and $nohp){
        $sql1 = "INSERT INTO calon_siswa(nama,alamat,nim,jurusan,nohp) 
        values ('$nama','$alamat','$nim','$jurusan','$nohp')";
        $q1 = mysqli_query($koneksi,$sql1);
        if($q1){
            $hasil = "Berhasil menambahkan data";
        }
    }
    $data['data']['result'] = $hasil;
    echo json_encode($data);
?>