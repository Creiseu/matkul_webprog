<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>
<body>
<form action="#" method="get">
  <div>
    <div class="mb-3 row">
      <div class="col-md-2"></div>
      <div class="col-md">
        <div class="mb-3 row">
          <h1>Form Input Data</h1>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            id_user :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputPassword1" maxlength="11">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            username :
          </div>
          <div class="col-md">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputPassword1" maxlength="16">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col-md-2">
            password :
          </div>
          <div class="col-md">
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">is_active</label>
          </div>
          <button type="reset" class="btn btn-secondary"><i class="bi bi-x-lg"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>