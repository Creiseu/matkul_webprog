<?php
if(!isset($_GET['aksi'])){ 
?>
<?php
  $qdata = mysqli_query($koneksi_db, "SELECT a.*, nama_divisi FROM mst_pegawai 
  AS a INNER JOIN mst_divisi AS b ON a.divisi = b.iddivisi") 
    or die(mysqli_error($koneksi_db));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <div class="container">
        <h1>Data Pegawai</h1>
        <a href="?modul=mod_pegawai&aksi=tambah">Tambah Data</a>
        <table border="1" cellpadding="7" >
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Jenis Kelamin</th>
                <th>Divisi Jabatan</th>
                <th>Status</th>
                <th>Tanggal Masuk</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
            <?php
                $no = 1;
                // $id= mysqli_query($koneksi_db, "SELECT * FROM mst_pegawai WHERE id_pegawai = 1") 
                // or die(mysqli_error($koneksi_db));
                while ($row = mysqli_fetch_array($qdata)) {
                $tanggal = $row["tgl_masuk"];
                $tanggalbaru = date('d-m-Y', strtotime($tanggal));
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row["nama_peg"]; ?></td>
                <td><?php echo $row["jk"]; ?></td>
                <td><?php echo $row["nama_divisi"].', '.$row["jabatan"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td><?php echo $tanggalbaru; ?></td>
                <td><?php echo $row["alamat"];?></td>
                <td><img src="filephoto/<?= $row['foto']?>" width="100px" height="100px" alt=""></td>
                <td>
                    <a href="?modul=mod_pegawai&aksi=ubah&user=<?= $row["idpegawai"]?>">Ubah</a>
                    <a href="mod_user/proses_delete.php?aksi=delete&user=<?= $row["idpegawai"]?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
    ?>

        </table>
    </div>
</body>
</html>
<?php } ?>