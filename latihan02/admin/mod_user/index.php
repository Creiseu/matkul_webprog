<?php
  if(!isset($_GET["aksi"])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "select * from mst_user") 
           or die(mysqli_error($koneksidb));
?>
<form action="mod_user/proses.php" method="post">
  <section class="container-fluid">
    <div class="mb-3 row" style="margin-top: 30px;">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3">
          <div class="col-md">
            <a href="?modul=mod_user&aksi=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
          </div>          
        </div>
        <div class="mb-3 row">
          <div class="col-md">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Id User</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($qdata)){
              ?>
              <tr>
                <td><?php echo $row["iduser"] ?></td>
                <td><?php echo $row["username"]?></td>
                <td><?php echo $row["password"]?></td>
                <td>
                  <a href="?modul=mod_user&aksi=edit&id=<?php echo $row["iduser"] ?>" class="">Edit</a>
                  <a href="mod_user/proses.php?proses=delete&id=<?php echo $row["iduser"];?>" class="">Delete</a>
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
      $query = mysqli_query($koneksidb, "select * from mst_user where iduser=".$_GET['id']."")
               or die("Data tidak ditemukan".mysqli_error($koneksidb));
      $data = mysqli_fetch_array($query);
      $nama = $data['username'];
      $pass = $data['password'];
      $exproses = "update";
      $idnya = $_GET['id'];
    }
    elseif($_GET["aksi"] == "add"){
      $exproses = "insert";
      $nama = "";
      $pass ="";
      $idnya = 0;
    }
  ?>
  </form>
      <h3>Form Input Data</h3>
      <form action="mod_user/proses.php?proses=<?php echo $exproses;?>" method="post">
      <div class="container-fluid text-center">
          <div class="row">
            <div class="col-sm-3">
              <!-- <p>iduser</p> -->
            </div>
            <div class="col-sm-9">
              <input type="hidden" name="iduser" value="<?php echo $idnya;?>">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
                  <p>Username</p>
              </div>
              <div class="col-sm-9">
                <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $idnya;?>">
                <input type="text" name="txt_nama" id="txt_nama" value=<?php echo $nama;?>>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-3">
                  <p>Password</p>
              </div>
              <div class="col-sm-9">
                <input type="hidden" name="txt_pass" id="txt_pass" value="<?php echo $idnya;?>">
                <input type="text" name="txt_pass" id="txt_pass" value=<?php echo $pass;?>>
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