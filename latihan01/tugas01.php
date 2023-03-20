<?php
    $tokoase = array(
        array("Kode" => "BO1", "Barang" => "Buku", "Harga" => 50000),
        array("Kode" => "BO2", "Barang" => "Pulpen", "Harga" => 10000),
        array("Kode" => "BO3", "Barang" => "Penghapus", "Harga" => 5000)
    );
    $code = $tokoase[1]["Kode"];
    $jb = 3;
    $total;
    $diskon;
    if($code == $tokoase[0]["Kode"]){
        if($jb >=3){
            $tokoase[0]["Harga"] = 47000;
            $total = $tokoase[0]["Harga"] * $jb;
            echo "BO1 Buku, beli sebanyak : ".$jb;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }else{
            $total = $tokoase[0]["Harga"] * $jb;
            echo "BO1 Buku, beli sebanyak : ".$jb;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }
        
    }elseif($code == $tokoase[1]["Kode"]){
        if($jb >=6){
            $tokoase[1]["Harga"] = 8000;
            $total = $tokoase[1]["Harga"] * $jb;
            echo "BO2 Pulpen, beli sebanyak : ".$jb;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }else{
            $total = $tokoase[1]["Harga"] * $jb;
            echo "BO2 Pulpen, beli sebanyak : ".$jb;
            echo "<br>";
            echo "Jumlah diBayar : ".$total;
        }
        
    }
    else{
        $total = $tokoase[2]["Harga"] * $jb;
        echo "BO3 Penghapus, beli sebanyak : ",$jb;
        echo "<br>";
        echo "Jumlah diBayar : ".$total;
    }
    echo "<br>";
    echo "<hr>";
    foreach($tokoase as $tokoase){
        foreach($tokoase as $a){
            echo $a." : ";
        }
        echo "<br>";
    }
?>