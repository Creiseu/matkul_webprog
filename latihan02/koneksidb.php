<?php
    $servername = "localhost";
    $database = "db_blog";
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
