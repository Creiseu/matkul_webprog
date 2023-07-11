<?php
require_once("../koneksi_db.php");
$idpegawai = $_POST['idpegawai'];
$nama = $_POST["txt_nama"];
$divisi = $_POST['tx_divisi'];
$jabatan = $_POST['tx_jabatan'];
$tgl = $_POST['tx_tgl'];
$alamat = $_POST['tx_alamat'];
$status = "";
//untuk mendapatakan value
if(isset($_POST['op_jk'])){
    $jk = $_POST['op_jk'];
}
if(isset($_POST['st_kontrak'])){
    $status = "Kontrak";
}
if(isset($_POST['st_tetap'])){
    $status = "Tetap";
}
$file = $_FILES['tx_file'];
$filelama =  $_POST['filelama'];
$ceknamafile = "";
if(!empty($file['name'])){ //jika $file['name'] ada maka kode dibawah akan berjalan
    $data = mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai where idpegawai = $idpegawai");
        $lihat = mysqli_fetch_array($data);
        if($filelama){
            $path = "../filephoto/".$lihat['foto'];
            unlink($path);
        }
        if(isset($_POST["upload"])){
            $file = $_FILES["tx_file"]; //bentuk file yang telah dipilih dan akan diupload
            $target_folder = "../filephoto/"; //target folder akan disimpan kemana ketika file diupload
            $target_file = $target_folder.$file['name'];
            $type_file =  strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
            $namafile = $_FILES["tx_file"]["name"]; //hanya mengambil nama dari file
            $boleh_upload = 1;
            /* cek batas limit file maks.3MB*/
            if($type_file != "jpg" && $type_file != "png" && $type_file != "jpeg"){
                $boleh_upload = 0;
                notif("Tipe File anda berbahaya!!");
            }elseif($file['size'] > 1000000){
                $boleh_upload = 0;
                notif("Minimal Ukuran File nya 1MB");
                die;
            }elseif($boleh_upload == 1){
                //if ini melakukan proses upload dan sekaligus melakukan pengecekkan upload berhasil
                if(move_uploaded_file($file['tmp_name'],$target_file)){
                    $ceknamafile = $file['name'];
                    //proses insert
                }
                else{
                    notif("Gagal upload File");
                    die;
                }	
            }
}
}else{
    echo 'file lama';
    $ceknamafile = $filelama;
}
$query_update = mysqli_query($koneksi_db, "UPDATE mst_pegawai SET nama_peg='$nama', jk = '$jk', divisi ='$divisi', jabatan = '$jabatan',tgl_masuk = '$tgl',status = '$status', alamat = '$alamat', foto = '$ceknamafile' WHERE idpegawai= '$idpegawai'");
if($query_update){
    notif("Berhasil Diubah");
}
function notif($pesan){
    echo'<script language ="javascript">';
    echo 'alert("'.$pesan.'")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content = "0;url = http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
}
?>