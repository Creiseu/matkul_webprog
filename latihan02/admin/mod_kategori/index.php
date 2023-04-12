<?php
  if(!isset($_GET["aksi"])){

?>
<?php
  $qdata = mysqli_query($koneksidb, "select * from mst_kategori") 
           or die(mysqli_error($koneksidb));
?>
<form action="mod_kategori/proses.php" method="post">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3">
          <div class="col-md">
            <a href="?modul=mod_kategori&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID Kategori</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($qdata)){
              ?>
              <tr>
                <td><?php echo $row["idkategori"] ?></td>
                <td><?php echo $row["nm_kategori"]?></td>
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
</form>
    <h3>Form Input Data</h3>
    <form action="mod_kategori/proses.php?aksi=insert" method="post">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-3">
                <p>Nama Kategori</p>
            </div>
            <div class="col-sm-9">
                <input type="text" name="txt_nama" id="txt_nama">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p></p>
            </div>
            <div class="col-sm-9">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                Aktif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                
            </div>
            <div class="col-sm-9">
                
                <button type="submit" class="btn btn-primary"><i class="bi bi-pencil"></i> Simpan</button>
                <button type="button" class="btn btn-primary"><i class="bi bi-trash"></i> Batal</button>
            </div>
        </div>
        
    </div>
    </form>  
</div>
<?php } ?>