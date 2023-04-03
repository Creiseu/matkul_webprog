<?php
        $nama_mhs = array(
            array("Nama" => "Daud"),
            array("Nama" => "Fero"),
            array("Nama" => "Dzaky"),
            array("Nama" => "Syarif")
        );

        $nama   = $nama_mhs[0]["Nama"];
        $absen  = $_POST["absen"];
        $tugas  = $_POST["tugas"];
        $uts    = $_POST["uts"];
        $uas    = $_POST["uas"];
        
        $nilai_absen = $absen * 0.1;
        $nilai_tugas = $tugas * 0.2;
        $nilai_uts   = $uts * 0.3;
        $nilai_uas   = $uas * 0.4;
        $nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;
        
        if ($nilai_akhir>=80){
            $grade = "A";
        }
        elseif ($nilai_akhir>=70){
            $grade = "B";
        }
        elseif ($nilai_akhir>=50){
            $grade = "C";
        }
        elseif ($nilai_akhir>=40){
            $grade = "D";
        }
        else{
            $grade = "E";
        }

        echo "Nama Mahasiswa : ".$nama;
        echo "<br>";
        echo "Nilai Absen : ".$nilai_absen;
        echo "<br>";
        echo "Nilai Tugas : ".$nilai_tugas;
        echo "<br>";
        echo "Nilai UTS : ".$nilai_uts;
        echo "<br>";
        echo "Nilai UAS : ".$nilai_uas;
        echo "<br>";
        echo "Nilai Akhir : ".$grade;


        echo "<br>";
        echo "<br>";
        echo "<br>";


        foreach ($nama_mhs as $nama){
            foreach ($nama as $anjay){
                echo $anjay. " ";
            }
            echo "<br>";
        }
?>