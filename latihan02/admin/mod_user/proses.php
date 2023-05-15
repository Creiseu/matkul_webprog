<?php
    require_once("../../koneksidb.php");

    if($_GET["proses"] == "insert"){
        echo "proses tambah";
        $username = $_POST["txt_nama"];
        $pass = $_POST["txt_pass"];
        $exsave = mysqli_query($koneksidb, "insert into mst_user(username, password) values('".$username."', '".$pass."')")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
        }
    }
    elseif($_GET["proses"] == "update"){
        echo "proses update";
        $username = $_POST["txt_nama"];
        $password = $_POST["txt_pass"];
        $iduser = $_POST["iduser"];
        $exsave = mysqli_query($koneksidb, "UPDATE mst_user SET username='$username', password = '$password'
                  WHERE iduser=$iduser")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
        }
    }
    elseif($_GET["proses"] == "delete"){
        echo "proses delete";
        $id = $_GET["id"];
        $exsave = mysqli_query($koneksidb,
                  "delete from mst_user WHERE iduser=$id")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_user");
        }
    }
?>