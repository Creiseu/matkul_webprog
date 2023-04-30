<?php
  require_once("../koneksidb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main>
        <div class="menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="?modul=mst_matakuliah">Mata Kuliah</a>
                    </div>
                    <div class="col">
                        <?php
                            if(isset ($_GET["modul"])){
                            include_once("".$_GET["modul"]."/index.php");
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>