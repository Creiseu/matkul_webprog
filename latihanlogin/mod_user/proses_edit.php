<?php
    require_once("../koneksi_db.php");

    $txtuser = $_POST['txt_nama'];
    $txtnama = $_POST['txt_nama'];
    $txtpass_baru = ($_POST['txt_pasw']);
    $txtpass_lama + $_POST["pass_lama"];


    $passwordnya = "";
    if($txtpass_baru == "" || $txtpass_baru == NULL || empty($txtnama)){
        $passwordnya = $txtpass_lama;
    }else{
        $passwordnya = md5($txtpass_baru);
    }
    $query_update = mysqli_query($koneksi_db, "UPDATE mst_user
    SET nama = '".$txtnama."', password = '".$passwordnya."' WHERE username='".$txtuser."' ");

    if($query_update){
        echo "Data Berhasil di ubah";
    }
?>