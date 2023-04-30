<?php
  $servernm = "localhost";
  $database = "dblp3i";
  $user_db = "root";
  $pass_db = "";

  $koneksidb = mysqli_connect($servernm, $user_db, $pass_db, $database);
  if(!$koneksidb){
      echo "Koneksi Gagal";
      exit;
  }
?>