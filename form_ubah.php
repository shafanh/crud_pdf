<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Ubah Data Pegawai</h1>

        <?php
		
		include "koneksi.php";
		
		
		$nis = $_GET['nis'];
		
		
		$query = "SELECT * FROM pegawai WHERE nis='".$nis."'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 
		?>

        <form method="post" action="proses_ubah.php?nis=<?php echo $nis; ?>" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" class="form-control" name="telp" value="<?php echo $data['telp']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="alamat"><?php echo $data['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ubah_foto" value="true">
                            <label class="form-check-label">Ceklis jika ingin mengubah foto</label>
                        </div>
                        <input type="file" class="form-control-file" name="foto">
                    </td>
                </tr>
            </table>

            <hr>
            <input type="submit" class="btn btn-primary" value="Ubah">
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js CDN (add these at the end of the body) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
