<?php
        $nama_mhs = array(
            array("Nama" => "Yanto"),
            array("Nama" => "Yanti")
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
        
    function nilaigue($nilai_akhir){
        if ($nilai_akhir>=80){
            if($nilai_akhir>=85){
                $grade = "A+";
            }
            else{
                $grade = "A";
            }
        }
        elseif ($nilai_akhir>=70){
            if($nilai_akhir>=75){
                $grade = "B+";
            }
            else{
                $grade = "B";
            }
        }
        elseif ($nilai_akhir>=50){
            if($nilai_akhir>=55){
                $grade = "C+";
            }
            else{
                $grade = "C";
            }
        }
        elseif ($nilai_akhir>=40){
            if($nilai_akhir>=45){
                $grade = "D+";
            }
            else{
                $grade = "D";
            }
        }
        else{
            $grade = "E";
        }
        echo $grade;
    }
        echo "Nilai Absen : ".$nilai_absen;
        echo "<br>";
        echo "Nilai Tugas : ".$nilai_tugas;
        echo "<br>";
        echo "Nilai UTS : ".$nilai_uts;
        echo "<br>";
        echo "Nilai UAS : ".$nilai_uas;
        echo "<br>";
        echo "Nilai Akhir : ";
        nilaigue($nilai_akhir);


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