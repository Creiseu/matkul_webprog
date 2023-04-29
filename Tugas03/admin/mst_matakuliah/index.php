<?php
  if(!isset($_GET["aksi"])){

?>
<?php
  $qdata = mysqli_query($koneksidb, "select * from mst_matakuliah") 
    or die(mysqli_error($koneksidb));
?>
<form action="mst_matakuliah/proses.php" method="post">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3">
          <div class="col-md">
            <a href="?modul=mod_matakuliah&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Induk Mahasiswa</th>
                <th scope="col">Mahasiswa</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">Nilai</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($qdata)){
              ?>
              <tr>
                <td scope="row"><?php echo $row["No"] ?></td>
                <td><?php echo $row["Nim"]?></td>
                <td><?php echo $row["Mahasiswa"] ?></td>
                <td><?php echo $row["Nama"]?></td>
                <td><?php echo $row["Jurusan"]?></td>
                <td><?php echo $row["KodeMK"]?></td>
                <td><?php echo $row["NamaMK"] ?></td>
                <td><?php echo $row["Nilai"] ?></td>
                <td>
                  <a href="" class="">Edit</a>
                  <a href="" class="">Delete</a>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
<?php } 
elseif (isset($_GET["aksi"])){
?>
<h3>Form Input Data</h3>
<form action="mst_kategori/proses.php?aksi=insert" method="post">
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-3">
        <p>No Induk Mahasiswa</p>
      </div>
      <div class="col-sm-9">
        <input type="number" name="num_nim" id="numnim">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>Nama</p>
      </div>
      <div class="col-sm-9">
        <input type="text" name="txt_nama" id="txtnama">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>Jurusan</p>
      </div>
      <div class="col-sm-9">
        <input type="text" name="txt_jurusan" id="txtjurusan">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>Kode Mata Kuliah</p>
      </div>
      <div class="col-sm-9">
        <input type="number" name="kode_mk" id="kodemk">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>Nama Mata Kuliah</p>
      </div>
      <div class="col-sm-9">
        <input type="text" name="nama_mk" id="namamk">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <p>Nilai</p>
      </div>
      <div class="col-sm-9">
        <input type="number" name="nilai_mk" id="nilaimk">
      </div>
      <button type="submit" class="btn btn-primary"><i class="bi bi-pencil"></i> Simpan</button>
      <button type="button" class="btn btn-primary"><i class="bi bi-trash"></i> Batal</button>
    </div>
  </div>
</form>  
</div>
<?php } ?>