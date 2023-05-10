<?php
    require_once("../../koneksidb.php");

    if($_GET["proses"] == "insert"){
        echo "proses tambah";
        $nmkategori = $_POST["txt_nama"];
        echo $nmkategori;
        $exsave = mysqli_query($koneksidb, "insert into mst_kategori(nm_kategori) values('".$nmkategori."')")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
        }
    }
    elseif($_GET["proses"] == "update"){
        echo "proses update";
        $namakategori = $_POST["txt_nama"];
        $idkategori = $_POST["txt_id"];
        $exsave = mysqli_query($koneksidb, "UPDATE mst_kategori SET nm_kategori='$namakategori'
                  WHERE idkategori=$idkategori")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
        }
    }
    elseif($_GET["proses"] == "delete"){
        echo "proses delete";
        $id = $_GET["id"];
        $exsave = mysqli_query($koneksidb,
                  "delete from mst_kategori WHERE idkategori=$id")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_kategori");
        }
    }
?>