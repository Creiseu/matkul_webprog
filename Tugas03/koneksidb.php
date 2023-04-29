<?php
    $servername = "localhost";
    $database = "dblp3i";
    $user_db = "root";
    $pass_db = "";

    $koneksidb = mysqli_connect($servername, $user_db, $pass_db, $database);
    if(!$koneksidb){
        echo "Koneksi Gagal";
        exit;
    }
    // else{
    //     echo "Koneksi Berhasil";
    // }
?>