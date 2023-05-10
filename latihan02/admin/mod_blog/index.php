<?php
  if(!isset($_GET["aksi"])){
?>
<?php
  $qdata = mysqli_query($koneksidb, "SELECT a.* , nm_kategori FROM mst_blog AS a INNER JOIN mst_kategori AS b ON
   a.id_kategori = b.idkategori") 
           or die("tabel tidak ditemukan".mysqli_error($koneksidb));
?>
<form action="#" method="get">
    <a href="?modul=mod_blog&aksi=add">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">judul</th>
                <th scope="col">file_gmb</th>
                <th scope="col">isi_blog</th>
                <th scope="col">tglblog</th>
                <th scope="col">penulis</th>
                <th scope="col">idkategori</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_array($qdata)){
            ?>
            <tr>
                <td><?php echo $row["judul"] ?></td>
                <td><?php echo $row["file_gmb"]?></td>
                <td><?php echo $row["isi_blog"]?></td>
                <td><?php echo $row["tglblog"]?></td>
                <td><?php echo $row["penulis"]?></td>
                <td><?php echo $row["nm_kategori"]?></td>
                <td>
                  <a href="" class="">Edit</a>
                  <a href="" class="">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</form>
<?php } 
    elseif (isset($_GET["aksi"])){ 
        if($_GET["aksi"] == "edit"){
            // $query = mysqli_query($koneksidb, "select * from mst_kategori where idkategori=".$_GET['id']."")
            //          or die("Data tidak ditemukan".mysqli_error($koneksidb));
            // $data = mysqli_fetch_array($query);
            // $nama = $data['nm_kategori'];
            $exproses = "update";
            $idnya = $_GET['id'];
          }
          elseif($_GET["aksi"] == "add"){
            $exproses = "insert";
            $nama = "";
            $idnya = 0;
          }
    
?>
<form action="" method="post">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Kategori Blog :
          </div>
          <div class="col-md">
          <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Nama Kategori :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" id="mtext">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Isi :
          </div>
          <div class="col-md">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
            <label for="floatingTextarea2">Komen</label>
          </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            Upload Gambar :
          </div>
          <div class="col-md">
            <input type="file" name="mfile" id="mfile">
          </div>
        </div>
          <div class="mb-3 row">
          <div class="col-md-2">
            Tanggal Input :
          </div>
          <div class="col-md">
            <input type="date" name="mdate" id="mdate">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2"></div>
          <div class="col-md">
          <button type="reset" class="btn btn-secondary"><i class="bi bi-x-lg"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</form>
<?php }?>