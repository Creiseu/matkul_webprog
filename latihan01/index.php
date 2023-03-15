<?php
    echo "Anjay";
    echo "<br>";
    print "Hello World"; 
    echo "<br>";
    $nama = 'Daud'; 
    $nama2 = '  Anggoro';
    echo $nama. "". $nama2;
    echo "<br>";

    $NilaiQuiz = "100";
    $NilaiTugas = "500";
    echo "{$NilaiQuiz} {$NilaiTugas}";
    echo "<br>";
    $pertambahan = $NilaiQuiz + $NilaiTugas;
        echo  "Pertambahan = " .$pertambahan;
    echo "<br>";
    $pengurangan = $NilaiQuiz - $NilaiTugas;
        echo "Pengurangan = ".$pengurangan;
    echo "<br>";
    $perkalian = $NilaiQuiz * $NilaiTugas;
        echo "Perkalian = ".$perkalian;
    echo "<br>";
    $pembagian = $NilaiQuiz / $NilaiTugas;
        echo "Pembagian = ".round($pembagian);
    echo "<br>";
    $eksponen = $NilaiTugas ** 2;
        echo "Eksponen = ".$eksponen;
    echo "<br>";
    $modulus = $NilaiTugas % $NilaiQuiz;
        echo "Modulus = ".$modulus;
?>