<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <button type="button" class="btn btn-primary">Tambah Data</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2023-04-12</td>
                <td>Web Prog</td>
                <td>Kuliah</td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-trash"></i> Delete</button>
                </td>
            </tr>
            <tr>
                <td>2023-04-04</td>
                <td>Camping Aja</td>
                <td>Mbolang</td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="bi bi-pencil"></i> Edit</button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-trash"></i> Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>