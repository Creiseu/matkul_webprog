<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Input Data</h2>
        <form action="mod_user/proses_add.php" method="post">
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
                    <option value="">--Pilih Divisi--</option>
                </select>
            </div>
            <div class="col-md">
                <label for="tx_jabatan">Jabatan</label>
                <input type="text" name="tx_jabatan" id="tx_jabatan">
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
</body>
</html>