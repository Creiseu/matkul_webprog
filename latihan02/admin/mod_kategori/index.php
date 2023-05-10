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
                  <a href="?modul=mod_kategori&aksi=edit&id=<?php echo $row["idkategori"] ?>" class="">Edit</a>
                  <a href="mod_kategori/proses.php?proses=delete&id=<?php echo $row["idkategori"];?>" class="">Delete</a>
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
  if($_GET["aksi"] == "edit"){
    $query = mysqli_query($koneksidb, "select * from mst_kategori where idkategori=".$_GET['id']."")
             or die("Data tidak ditemukan".mysqli_error($koneksidb));
    $data = mysqli_fetch_array($query);
    $nama = $data['nm_kategori'];
    $exproses = "update";
    $idnya = $_GET['id'];
  }
  elseif($_GET["aksi"] == "add"){
    $exproses = "insert";
    $nama = "";
    $idnya = 0;
  }
?>
</form>
    <h3>Form Input Data</h3>
    <form action="mod_kategori/proses.php?proses=<?php echo $exproses;?>" method="post">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-3">
                <p>Nama Kategori</p>
            </div>
            <div class="col-sm-9">
              <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $idnya;?>">
              <input type="text" name="txt_nama" id="txt_nama" value=<?php echo $nama;?>>
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