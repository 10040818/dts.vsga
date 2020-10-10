<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link untuk loading bootstrap.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Form Inputan Data</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Data Barang</h3>
                <form action="simpan_mahasiswa.php" method="POST">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" on id="nim" name="nim" placeholder="NIM Anda">
                    </div>
                    <div class="form-group">
                        <label for="nm">Nama</label>
                        <input type="text" class="form-control" id="nm" name="nama" placeholder="Nama Anda">
                    </div>
                    <div class="form-group">
                        <label class="radio">Jenis Kelamin</label>
                        <label for="lk" class="radio-inline">
                            <input type="radio" id="lk" name="jenis_kelamin" value="L"> Laki-laki
                        </label>
                        <label for="pr" class="radio-inline">
                            <input type="radio" id="pr" name="jenis_kelamin" value="P"> Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="jrs">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jrs">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Kimia">Teknik Kimia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a href="index.php" class="btn btn-sm btn-default">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <!-- script untuk loading jquery.min.js  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>