<form action="#" method="post">
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