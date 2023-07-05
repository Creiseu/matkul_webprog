<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        if($_GET["aksi"] == "tambah"){
    ?>
    <div class="container">
        <h2>Input Data</h2>
        <form action="mod_pegawai/proses_add.php" method="post" enctype="multipart/form-data">
            <div class="col-md">
                <label for="txt_user" hidden >No</label>
                <input type="hidden" name="idpegawai" id="idpegawai" value="">
            </div>
            <div class="col-md">
                <label for="txt_user">Nama Pegawai</label>
                <input type="text" name="txt_nama" id="txt_nama">
            </div>        
            <div class="col-md">
                <label for="op_jk">Jenis Kelamin</label>
                <input type="radio" name="op_jk" value="Pria" > Pria
                <input type="radio" name="op_jk" value="Wanita" > Wanita
            </div>
            <div class="col-md">
                <label for="txt_divisi">Divisi</label>
                <select name="tx_divisi" class="form-select">
                <option value="">Nama Divisi</option>
                    <?php
                        $qdivisi = mysqli_query($koneksi_db, "SELECT * FROM mst_divisi");
                        while($c = mysqli_fetch_array($qdivisi)){
                           echo '<option value="'.$c['iddivisi'].'">'.$c['nama_divisi'].'</option>';
                        }
                    ?>
                    
                </select>
            </div>
            <div class="col-md">
                <label for="tx_jabatan">Jabatan</label>
                <input type="text" name="tx_jabatan" id="tx_jabatan">
            </div>
            <div class="col-md">
                <label for="status">Status Pegawai</label>
                <input type="checkbox" name="st_kontrak" value="kontrak"><label>Kontrak</label>
                <input type="checkbox" name="st_tetap" value="tetap"><label>Tetap</label>
            </div>
            <div class="col-md">
                <label for="tx_tgl">Tanggal Bergabung</label>
                <input type="date" name="tx_tgl" id="tx_tgl">
            </div>
            <div class="col-md">
                <label for="tx_alamat">Alamat</label>
                <textarea name="tx_alamat" id="tx_alamat" cols="50" rows="3"></textarea>
            </div>
            <div class="col-md">
                <label for="tx_file">Upload Foto</label>
                <input type="file" name="tx_file" id="tx_file">
            </div>
            <div class="col-md">
                <button class>Simpan Data</button>
            </div>
        </form>
    </div>
    <?php }
        if($_GET["aksi"] == "ubah"){
            $usernya = $_GET['user'];
            $query_getdata = mysqli_query($koneksi_db,
            "SELECT * FROM mst_pegawai WHERE idpegawai='".$usernya."'");
            $data = mysqli_fetch_array($query_getdata);
    ?>
    <div class="container">
        <h2>Ubah Data</h2>
        <form action="mod_pegawai/proses_edit.php" method="post" enctype="multipart/form-data">
            <div class="col-md">
                <label for="txt_user" hidden >No</label>
                <input type="hidden" name="idpegawai" id="idpegawai" value="">
            </div>
            <div class="col-md">
                <input type="hidden" name="idpegawai" value="<?php echo $data['idpegawai']; ?>">
                <label for="txt_user">Nama Pegawai</label>
                <input type="text" name="txt_nama" id="txt_nama" value="<?php echo $data['nama_peg']; ?>">
            </div>
        
            <div class="col-md">
                <label for="op_jk">Jenis Kelamin</label>
                <?php
                    $jk = $data['jk'];
                    $cek_lk = "";
                    $cek_wn = "";
                    if($jk == "Pria" ){ $cek_lk ="checked";}
                    if($jk == "Wanita" ){ $cek_wn ="checked";}
                    ?>
                    <input type="radio" name="op_jk" value="Pria" <?php echo $cek_lk?>> Pria
                    <input type="radio" name="op_jk" value="Wanita" <?php echo $cek_wn?>> Wanita
            </div>
            <div class="col-md">
                <label for="txt_divisi">Divisi</label>
                <select name="tx_divisi" class="form-select">
                <option value="">Nama Divisi</option>
                    <?php
                        $qdivisi = mysqli_query($koneksi_db, "SELECT * FROM mst_divisi") or die;
                        while($c = mysqli_fetch_array($qdivisi)){
                            if($c["id_divisi"] == $divisi ){
                            { $pilih = "selected"; }
                            }else {$pilih = "";}
                           echo '<option value="'.$c['iddivisi'].'"'.$pilih.'>'.$c['nama_divisi'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="col-md">
                <label for="tx_jabatan">Jabatan</label>
                <input type="text" name="tx_jabatan" id="tx_jabatan" value=<?php echo $data['jabatan'] ?> >
            </div>
            <div class="col-md">
                <label for="status">Status Pegawai</label>
                <?php
                $status = $data['status'];
                $cek_kontrak = "";
                $cek_tetap = "";
                if($jk == "Kontrak" ){ $cek_kontrak = "checked";}
                if($jk == "Tetap" ){ $cek_tetap ="checked";}
                ?>
                <input type="checkbox" name="st_kontrak" value="Kontrak" <?php echo $cek_kontrak ?>> Kontrak
                <input type="checkbox" name="st_tetap" value="Tetap" <?php echo $cek_tetap ?>>Tetap
            </div>
            <div class="col-md">
                <label for="tx_tgl">Tanggal Bergabung</label>
                <input type="date" name="tx_tgl" id="tx_tgl">
            </div>
            <div class="col-md">
                <label for="tx_alamat">Alamat</label>
                <textarea name="tx_alamat" id="tx_alamat" cols="50" rows="3" ><?php echo $data['alamat'] ?></textarea>
            </div>
            <div class="col-md">
                <img src="filephoto/<?= $data['foto']?>" width="100px" height="100px" alt="">
                <img src="filephoto" alt="">
                <input type="hidden" name="filelama" value="<?php $data['foto']; ?>">
                <label for="tx_file">Upload Foto</label>
                <input type="file" name="tx_file" id="tx_file">
            </div>
            <div class="col-md">
                <button class>Simpan Data</button>
            </div>
        </form>
    </div>
    <?php } ?>
</body>
</html>