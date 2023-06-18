<?php
    require_once("../koneksi_db.php");
    if($_GET["aksi"] == "delete"){
        $usernya = $_GET['user'];
        $delete = mysqli_query($koneksi_db,
                  "UPDATE mst_user SET is_active = 0 WHERE username='".$usernya."' ")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($delete){
            header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_user");
        }
    }

?>