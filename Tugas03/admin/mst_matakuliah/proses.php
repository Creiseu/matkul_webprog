<?php
    require_once("../../koneksidb.php");

    if($_GET["aksi"] == "insert"){
        echo "proses tambah";
        $nim = $_POST["num_nim"];
        $nama = $_POST["txt_nama"];
        $jurusan = $_POST["txt_jurusan"];
        $kodemk = $_POST["kode_mk"];
        $namamk = $_POST["nama_mk"];
        $nilai = $_POST["nilai_mk"];
        $exsave = mysqli_query($koneksidb, "insert into mst_matakuliah(NIM,nama,Jurusan,Kode_Matkul,Nama_Matkul,Nilai)
        values('.$nim.','".$nama."','.$jurusan.','.$kodemk.','.$namamk.','.$nilai.')")
        or die("gagal simpan".mysqli_error($koneksidb));
        if($exsave){
            header("Location: http://localhost/matkul_webprog/Tugas03/admin/home.php?modul=mst_matakuliah");
        }
    }
    elseif($_GET["aksi"] == "update"){
        echo "proses update";

    }
    elseif($_GET["aksi"] == "delete"){
        echo "proses delete";
    }
?>