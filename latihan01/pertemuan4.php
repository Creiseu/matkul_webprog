<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width: 50%;">
        <tr>
            <td>id</td>
            <td>Judul</td>
            <td>Konten</td>
            <td>Action</td>
        </tr>
        <?php
        use Vtiful\Kernel\Format;
            $data = array(
                array("Id" => "O1", "Judul" => "Judul01", "Konten" => "Isi Konten01", "Action" => "Action01"),
                array("Id" => "O2", "Judul" => "Judul02", "Konten" => "Isi Konten02", "Action" => "Action02"),
                array("Id" => "O3", "Judul" => "Judul03", "Konten" => "Isi Konten03", "Action" => "Action03"),
            );
            foreach($data as $d){
        
        ?>
        <tr>
            <td>
                <?php
                    echo $d["Id"];
                ?>
            </td>
            <td>
                <?php
                    echo $d["Judul"];
                ?>
            </td>
            <td>
                <?php
                    echo $d["Konten"];
                ?>
            </td>
            <td>
                <a href="?idku = <?php echo $d["Id"];?> ">Edit</a>
                <a href="#">Delete</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
<?php
    $kata = "Belajar PHP itu Mudah";
    $kata2 = explode("itu", $kata);
    $kata3 = implode("itu", $kata2);
    var_dump($kata3);
    echo "<br>";
    echo rtrim($kata3, "Belajar");
    echo "<hr>";
    date_default_timezone_set("Asia/Jakarta");
    $today = date("l, d F y  h:i:s");
    echo "<br>";
    echo $today;
    echo "<br>";

    function hitungumur(){
        $tgllahir = date_create("23-12-2003");
        $tglhariini = date("d-m-Y");
        $umur = date_diff($tgllahir, date_create($tglhariini));
        return "Umur = ".$umur->format('%y tahun %m bulan %a hari');
    }
    echo hitungumur();
    $jurusan = "IT";
    $nama = "Daud";
    $nilai = 90;
    function datamhs($jurusan, $nama, $nilai){
       
        echo "Nama:$nama, $jurusan , $nilai";

    }
    datamhs($jurusan, $nama, $nilai);
?>