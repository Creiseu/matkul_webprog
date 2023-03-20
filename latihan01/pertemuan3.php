<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $CalonSukses = array("Daud", "Fero", "Dzaky", "Syarif");
        echo $CalonSukses[0];
        echo "<br>";
        $CalonBos = array("Daud" => "UI Designer", "Fero" => "BE Developer", "Dzaky" => "FE Developer", "Syarif" => "Analysis System");
        echo $CalonBos['Daud'];
        echo "<br>";
        $startup = array(
            array("Nama" => "Daud", "Jabatan" => "UI Designer", "Gaji" => 40000000),
            array("Nama" => "Fero", "Jabatan" => "BE Developer", "Gaji" => 30000000),
            array("Nama" => "Dzaky", "Jabatan" => "FE Developer", "Gaji" => 20000000),
            array("Nama" => "Syarif", "Jabatan" => "Analysis System", "Gaji" => 10000000)
        );
        echo "Startup: ".$startup[0]["Nama"];
        echo "<br>";
        for($i=1; $i<=50; $i++){
            if($i%2==0){
                echo "<b>".$i.",";
            }
        }
        // while($j <= 20){
        //     if($j%2==1){
        //         echo"<b>".$j.",";
        //     }
        // }
    ?>
</body>
</html>