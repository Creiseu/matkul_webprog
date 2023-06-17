<?php
    require_once("../../koneksidb.php");

    if($_GET["proses"] == "insert"){
        echo "proses tambah";
        $kategorix = $_POST["kategori"];
        $judulx = $_POST["judul"];
        $isix = $_POST["isi"];
        $tglx = $_POST["tanggal"];
        // $aktifx = $_POST["is_aktif"];
        if (isset($_POST["is_aktif"])){
            $aktif = 1;
        }else{
            $aktif = 0; 
        }

        $exsave = mysqli_query($koneksidb, "insert into mst_blog(judul,file_gmb,isi_blog, tglblog,
        penulis,id_kategori,is_aktif)values('".$judulx."','','".$isix."','".$tglx."','','".$kategorix."',".$aktif.")")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
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
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
        }
    }
    elseif($_GET["proses"] == "delete"){
        echo "proses delete";
        $id = $_GET["id"];
        $exsave = mysqli_query($koneksidb,
                  "delete from mst_kategori WHERE idkategori=$id")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/latihan02/admin/home.php?modul=mod_blog");
        }
    }
?>