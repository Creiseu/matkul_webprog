<?php
    $servername = "localhost";
    $database = "dbperusahaan";
    $user_db = "root";
    $pass_db = "";

    $koneksi_db = mysqli_connect($servername, $user_db, $pass_db, $database);
    if(!$koneksi_db){
        echo "Koneksi Gagal";
        exit;
    }
    // else{
    //     echo "Koneksi Berhasil";
    // }
?>
