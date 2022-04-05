<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Tambah Pelanggan</h2>
  <form action="aksi.php" method="post">
    <div class="form-group">
      <label for="text">No KTP:</label>
      <input type="text" class="form-control" placeholder="Masukkan No KTP" name="ktp">
    </div>
    <div class="form-group">
      <label for="nama">Nama Pelanggan:</label>
      <input type="text" class="form-control" placeholder="Masukkan Nama Pelanggan" name="pelanggan">
    </div>
    <div class="form-group">
      <label for="telepon">No Telepon:</label>
      <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon" name="tlp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-warning">Reset</button>
  </form>
</div>

</body>
</html>
