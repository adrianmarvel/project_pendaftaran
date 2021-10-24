<?php

// ============================Proses Konek ke Database===================================
    $conn = mysqli_connect('localhost', 'root', '', 'pendaftaran');
// ======================================================================================= //





// ==========================Proses Create (POST) / Menambahkan data======================
    function post($data){
        global $conn;

        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $nim = $data['nim'];
        $jurusan = $data['jurusan'];
        $nohp = $data['nohp'];

        $query = "INSERT INTO calon_siswa VALUES('', '$nama', '$alamat', '$nim', '$jurusan', '$nohp')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
// ========================================================================================= //
// ===========================Proses Read (GET) / Menampilkan data==========================
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }
// ========================================================================================= //






// ==========================Proses Update (POST) / Mengubah data===========================
    function update($data){
        global $conn;

        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $nim = $data['nim'];
        $jurusan = $data['jurusan'];
        $nohp = $data['nohp'];

        $query = "UPDATE calon_siswa SET id = '$id', nama = '$nama', alamat = '$alamat', nim = '$nim', jurusan = '$jurusan', nohp = '$nohp' WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);   
    }
// ========================================================================================= //
// ==========================Proses Delete (POST) / Menghapus data========================
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM calon_siswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
// ========================================================================================= //

?>