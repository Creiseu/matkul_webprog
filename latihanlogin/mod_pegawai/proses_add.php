<?php
    require_once("../koneksi_db.php");
    $nama = $_POST['txt_nama'];
    $divisi = $_POST['tx_divisi'];
    $jabatan = $_POST['tx_jabatan'];
    $tgl = $_POST['tx_tgl'];
    $alamat = $_POST['tx_alamat'];
    $status = "";
    if(isset($_POST['op_jk'])){////value radio button
        $jk = $_POST['op_jk'];////value radio button
    }else{                    ////value radio button
        $jk = "";             ////value radio button
    }                         ////value radio button
    if(isset($_POST['st_kontrak'])){ ////value checkbox
        $status = "kontrak";         ////value checkbox
    }if(isset($_POST['st_tetap'])){    ////value checkbox
        $status = "tetap";           ////value checkbox
    }                                ////value checkbox

    $file = $_FILES["tx_file"];
    var_dump($file);
    echo '<hr>';
    $target_folder = "../filephoto/";
    echo $file["name"];
    $target_file = $target_folder.$file["name"];
    echo $target_file. "<br>";
    $type_file = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    echo $type_file."<br>";

    $boleh_upload = 1;
    if($file["size"] > 1000000){
        $boleh_upload = 0;
        notif("File terlalu besar");
    }
    if($type_file != "jpg" && $type_file != "png" && $type_file!= "jpeg"){
        $boleh_upload = 0;
        echo "type file tidak diizinkan";
    }
    $ceknamafile="";
    if($boleh_upload == 1){
       if(move_uploaded_file($file['tmp_name'], $target_file)){
        notif("kelassss");
        $ceknamafile = $file['name'];
       }else{
        notif("gagal upload");
       }
    }

    function notif($pesan){
        echo '<script languange="javascript">';
        echo 'alert("'.$pesan.'")';
        echo '</script>';
        //<meta http-equiv="refresh" content="0;url=">;
        echo '<meta http-equiv="refresh" content="0;url=
        http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai&aksi=tambah">';
    }
?>