<?php
    require_once("../koneksi_db.php");

    $txtuser = $_POST['txt_nama'];
    $txtnama = $_POST['txt_nama'];
    $txtpass = md5($_POST['txt_pasw']);


    $query_cekdata = mysqli_query($koneksi_db,
        "SELECT * FROM mst_user WHERE username='".$txtuser."' ");
    $cekdata = mysqli_num_rows($query_cekdata);
    if($cekdata > 0){
        echo "Username sudah data, silahkan isi ulang";
    }else{
        $query_simpan = mysqli_query($koneksi_db, "INSERT INTO mst_user (username,password,is_active,nama)
        values('".$txtuser."','".$txtpass."',1,'".$txtnama."')");
        if($query_simpan){
            header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_user ");
        }else{
            echo "Gagal tersimpan";
        }
    }
?>