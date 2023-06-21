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
        <form action="mod_pegawai/proses_add.php" method="post"
        enctype="multipart/form-data"
        >
            <div class="col-md">
                <label for="txt_user">Nama Pegawai</label>
                <input type="text" name="txt_nama" id="txt_nama">
            </div>        
            <div class="col-md">
                <label for="jk">Jenis Kelamin</label>
                <input type="radio" name="op_jk" value="Laki-laki"> Laki-Laki
                <input type="radio" name="op_jk" value="Wanita"> Wanita
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
    <?php } ?>
</body>
</html>