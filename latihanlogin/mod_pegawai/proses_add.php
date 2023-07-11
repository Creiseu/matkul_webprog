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
        $status = "kontrak";         ////value checkbox
    }if(isset($_POST['st_tetap'])){    ////value checkbox
        $status = "tetap";           ////value checkbox
    }                               ////value checkbox

    //Untuk Upload file
    function notif($pesan){
        echo '<script language="javascript">';
        echo 'alert("'.$pesan.'")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url:http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai">';
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
                notif("File sudah di upload");
                $ceknamafile = $file['name'];
                //proses insert
            }
            else{
                notif("Gagal upload File");
                die;
            }	
        }
        
        /**cek tipe file yang boleh diupload : jpg, png, jpeg*/
        
        //proses upload memindah file dari local ke server
        $ceknamafile = ""; //variabel ini yang akan disimpan ke tabel
        
    }
    

    // $file = $_FILES["tx_file"];
    // var_dump($file);
    // echo '<hr>';
    // $target_folder = "../filephoto/";
    // echo $file["name"];
    // $target_file = $target_folder.$file["name"];
    // echo $target_file. "<br>";
    // $type_file = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    // echo $type_file."<br>";

    // $boleh_upload = 1;
    // if($file["size"] > 1000000){
    //     $boleh_upload = 0;
    //     notif("File terlalu besar");
    // }
    // if($type_file != "jpg" && $type_file != "png" && $type_file!= "jpeg"){
    //     $boleh_upload = 0;
    //     echo "type file tidak diizinkan";
    // }
    // $ceknamafile="";
    // if($boleh_upload == 1){
    //    if(move_uploaded_file($file['tmp_name'], $target_file)){
    //     notif("");
    //     $ceknamafile = $file['name'];
    //    }else{
    //     notif("");
    //    }
    // }

    

    // $query_cekdata = mysqli_query($koneksi_db,
    // "SELECT * FROM mst_pegawai WHERE idpegawai='".$id."' ");
    // $cekdata = mysqli_num_rows($query_cekdata);
    // if($cekdata > 0){
    //     echo "data sudah ada, silahkan isi ulang";
    // }else{
    $query_simpan = mysqli_query($koneksi_db, "INSERT INTO mst_pegawai
    (nama_peg, jk, divisi, jabatan, tgl_masuk, status, alamat, foto)
    VALUES
    ('".$nama."','".$jk."','".$divisi."','".$jabatan."','".$tgl."',
    '".$status."','".$alamat."','".$namafile."')");
    if($query_simpan){
        header("Location: http://localhost/matkul_webprog/latihanlogin/home.php?modul=mod_pegawai ");
    }else{
        echo "Gagal tersimpan";
    }
// }
?>