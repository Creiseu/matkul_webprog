<div class="container">
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
        $user= mysqli_query($koneksi_db, "select * from mst_user") 
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
                <a href="">hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
