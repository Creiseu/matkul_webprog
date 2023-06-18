<div class="container">
    <h1>Data User</h1>
    <a href="?modul=mod_user&aksi=tambah">Tambah data</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Action</th>
        </tr>
        <?php 
        $no = 1;
        $user= mysqli_query($koneksi_db, "SELECT * FROM mst_user WHERE is_active = 1") 
        or die(mysqli_error($koneksi_db));

        while($data = mysqli_fetch_array($user))
        {
        ?>
        <tr>
            <td><?= $no++;?></td>
            <td><?= $data["username"]?></td>
            <td><?= $data["nama"]?></td>
            <td>
                <a href="?modul=mod_user&aksi=ubah&user=<?= $data["username"]?>">Ubah</a>
                <a href="mod_user/proses_delete.php?aksi=delete&user=<?= $data["username"]?>">hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
