<?php
    require_once("../koneksi_db.php");
    if($_GET["aksi"] == "delete"){
        $usernya = $_GET['user'];
        $delete = mysqli_query($koneksi_db,
                  "DELETE FROM mst_pegawai WHERE idpegawai ='".$usernya."' ")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($delete){
            header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_user");
        }
    }

    $data = mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai WHERE idpegawai = $usernya");
    $cari = mysqli_fetch_array($data);
    if(isset($usernya)){
        $lokasi_file = "../filephoto".$cari["foto"];
        unlink($lokasi_file);
    }

?>