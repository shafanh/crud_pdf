<html>
<head>
	<title>Upload Photo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
	<h1>Data Pegawai</h1>
	<a class="btn btn-primary mb-3" href="form_simpan.php">Tambah Data</a>
    <table class="table table-bordered table-striped">
	<tr>
		<th>Foto</th>
		<th>Id</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	include "koneksi.php";
	
	$query = "SELECT * FROM pegawai"; 
	$sql = mysqli_query($connect, $query); 
	
	while($data = mysqli_fetch_array($sql)){ 
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['nis']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['jenis_kelamin']."</td>";
		echo "<td>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td><a href='form_ubah.php?nis=".$data['nis']."' class='btn btn-primary'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?nis=".$data['nis']."' class='btn btn-danger'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>
</body>
</html>

