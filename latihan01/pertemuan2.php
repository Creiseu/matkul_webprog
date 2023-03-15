<?php
$pembeli = "Daud";
$uang = 15000000;
$laptop;
// if($uang < 10000000){
//     $laptop = "Laptop Asus";
// }else{
//     $laptop = "Laptop HP";
// }
// echo "Maka $pembeli membeli $laptop";
switch($uang){
    case $uang < 10000000:
        $laptop = "Laptop Asus";
    case $uang > 10000000:
        $laptop = "Laptop HP";
}
echo "Maka $pembeli membeli $laptop";
echo "<br>";



$mahasiswa = "seragam lengkap";
if($mahasiswa == "seragam lengkap"){
    echo "silahkan mengikuti kelas";
}elseif($mahasiswa == "seragam tidak lengkap"){
    echo "Laksanakan Hukuman";
}else{
    echo "Kena SP";
}

?>