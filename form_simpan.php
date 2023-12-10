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
        <h1>Tambah Data Pegawai</h1>

        <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <td>NIS</td>
                    <td><input type="text" class="form-control" name="nis"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="laki">
                            <label class="form-check-label" for="laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" class="form-control" name="telp"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td><input type="file" class="form-control-file" name="foto"></td>
                </tr>
            </table>

            <hr>
            <input type="submit" class="btn btn-primary" value="Simpan">
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
