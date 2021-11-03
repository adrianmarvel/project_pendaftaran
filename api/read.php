<?php 
    require_once('../config/config.php');

    $sql1 = "select * from calon_siswa";
    $q1 = mysqli_query($conn, $sql1);
    while($r1 = mysqli_fetch_array($q1)){
        $hasil[] = array(
            'id' => $r1['id'],
            'nama' => $r1['nama'],
            'alamat' => $r1['alamat'],
            'nim' => $r1['nim'],
            'jurusan' => $r1['jurusan'],
            'nohp' => $r1['nohp']
        );
    }
    $data['data']['result'] = $hasil;
    echo json_encode($data);

    /*$myArray = array();
    if ($result = mysqli_query($koneksi, "SELECT * FROM biodata"))
    {
        while ($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $myArray[] = $row;
        }
        //mysqli_close($koneksi);
        //    echo json_encode($myArray);
        $data['data']['result'] = $myArray;
        echo json_encode($result);
    }*/
?>