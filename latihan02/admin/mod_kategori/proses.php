<?php
    require_once("../../koneksidb.php");

    if($_GET["aksi"] == "insert"){
        echo "proses tambah";
        $nmkategori = $_POST["txt_nama"];
        echo $nmkategori;
        $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_kategori) values('".$nmkategori."')")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
        }
    }
    elseif($_GET["aksi"] == "update"){
        echo "proses update";

    }
    elseif($_GET["aksi"] == "delete"){
        echo "proses delete";
    }
?>