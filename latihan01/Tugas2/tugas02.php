<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="post">
        <h1>Perhitungan Nilai Akhir Mahasiswa</h1>
        Nama Mahasiswa : <input type="text" name="nama" id="nama" ><br>
        Nilai Absen : <input type="text" name="absen" id="absen" ><br>
        Nilai Tugas : <input type="text" name="tugas" id="tugas" ><br>
        Nilai UTS : <input type="text" name="uts" id="uts" ><br>
        Nilai UAS : <input type="text" name="uas" id="uas" ><br><br>
        <button type="submit" value="Hitung">Submit</button>
    </form>
    
    <?php
        $nama_mhs = array(
            array("Nama" => "Daud"),
            array("Nama" => "Fero"),
            array("Nama" => "Dzaky"),
            array("Nama" => "Syarif")
        );

        $mhs = $nama_mhs[0]["Nama"];
        
        if($mhs = $nama_mhs[0]["Nama"]){

        }
        function grade($nilai_akhir){
            $nilai_kehadiran = 100;
            $nilai_tugas = 100;
            $nilai_uts = 100;
            $nilai_uas = 100;
            $nilai_akhir;

        }
    ?>
</body>
</html>