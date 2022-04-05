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
  <h2>TABEL PELANGGAN</h2>
  <p><a href="tbhpelanggan.php">
	<BUTTON class="btn btn-primary">TAMBAH DATA PELANGGAN</BUTTON></a>
  </p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>NO KTP</th>
        <th>Nama Pelanggan</th>
        <th>No Telepon</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
	//buat koneksi dgn mysql
		$host="localhost";$user="id17903211_root";$pass="ZG-?Tv5TQB</W7nA";
		$db="id17903211_cucimotor";
		$koneksi=mysqli_connect($host, $user, $pass, $db);
		//kita perulangan data yg diambil per-row
		$data=mysqli_query($koneksi,"select * from pelanggan");
		while($d=mysqli_fetch_array($data)){
	?>
      <tr>
        <td><?php echo $d["no_ktp"]; ?></td>
        <td><?php echo $d["nama"]; ?></td>
        <td><?php echo $d["no_telepon"]; ?></td>
		<td><button class="btn btn-warning">EDIT</button>
		<button class="btn btn-danger">DELETE</button></td>
		</tr> <?php } ?>
     
    </tbody>
  </table>
</div>

</body>
</html>
