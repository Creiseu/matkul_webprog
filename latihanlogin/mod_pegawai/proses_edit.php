<?php
    require_once("../koneksi_db.php");
    $id = $_POST['idpegawai'];
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
        $status = "Kontrak";         ////value checkbox
    }if(isset($_POST['st_tetap'])){    ////value checkbox
        $status = "Tetap";           ////value checkbox
    }
    $file = $_FILES["tx_file"];
    $filelama = $_POST['filelama'];
    $ceknamafile="";
    if(!empty($file['name'])){
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

        if($boleh_upload == 1){
            if(move_uploaded_file($file['tmp_name'], $target_file)){
             notif("kelassss");
             $ceknamafile = $file['name'];
            }else{
             notif("gagal upload");
            }
         }
    }else{
        $ceknamafile = $filelama;
    }
?>