<?php
require_once("../koneksi_db.php");
$id = $_POST['idpegawai'];
$nama = $_POST['txt_nama'];

if(isset($_POST['op_jk'])){////value radio button
    $jk = $_POST['op_jk'];////value radio button
}else{                    ////value radio button
    $jk = "";             ////value radio button
}                         ////value radio button
if(isset($_POST['st_kontrak'])){ ////value checkbox
    $status = "kontrak";         ////value checkbox
}if(isset($_POST['st_tetap'])){    ////value checkbox
    $status = "tetap";           ////value checkbox
}
$divisi = $_POST['tx_divisi'];
$jabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";

$query_update = mysqli_query($koneksi_db, "UPDATE mst_pegawai
    SET nama_peg='".$nama."', jk='".$jk."', divisi='".$divisi."', jabatan='".$jabatan."', 
    tgl_masuk='".$tgl."', alamat='".$alamat."' WHERE idpegawai='".$id."' ");

    if($query_update){
        header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai");
    }
?>