<?php
require_once("koneksi_db.php");
session_start();
// require_once("config.php");
// securitylogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hai, <?= $_SESSION['namalog']?></h2>
        <a class="btn" href="?modul=mod_user">Modul User</a>
        <a class="btn" href="?modul=mod_pegawai">Modul Pegawai</a>
        <a class="btn" href="signout.php">SIGN OUT</a>
    </div>
    <div class="col-md konten">
      <?php
      if(isset($_GET["modul"]) && !isset($_GET["aksi"])){
        include_once("".$_GET["modul"]."/index.php");
      }
      else if(isset($_GET["modul"]) && isset($_GET["aksi"])){
        include_once("".$_GET["modul"]."/form.php");
      }
      ?>
    </div>


    <script src="config.js" ></script>
</body>
</html>