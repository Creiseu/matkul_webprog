<?php
require_once("koneksi_db.php");
session_start();
$usernya = ($_POST["txt_user"]);
$passnya = md5($_POST["txt_pasw"]);
    echo $usernya."<br>";
    echo $passnya."<br>";
        $query_login = mysqli_query($koneksi_db, "SELECT * FROM mst_user where password='".$passnya."' 
        AND BINARY username='".$usernya."' ");
        $cekhasil = mysqli_num_rows($query_login); //jumlah data yang ditemukan
        $hasil = mysqli_fetch_array($query_login); //variabel yang menampung hasil query
        // echo $cekhasil;
    if($cekhasil > 0){
        echo "Selamat Anda Berhasil Login";
        $_SESSION['userlog'] = $usernya; //menampung $usernya
        $_SESSION['namalog'] = $hasil['nama'];
        header("Location: home.php ");
    }
    else{
        $_SESSION['pesan'] = "Username atau Password salah!!";
        header("Location: index.php");
    }


?>