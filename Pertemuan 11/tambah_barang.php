<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link untuk loading bootstrap.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Contoh Bootstrap</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Data Barang</h3>
                <form action="simpan_barang.php" method="POST">
                    <div class="form-group">
                        <label for="nm">Nama Merek</label>
                        <input type="text" class="form-control" id="nm" name="nama_merek" placeholder="Nama Merek">
                    </div>
                    <div class="form-group">
                        <label for="wrna">Warna</label>
                        <input type="text" class="form-control" id="wrna" name="warna" placeholder="Warna Barang">
                    </div>
                    <div class="form-group">
                        <label for="jml">Jumlah</label>
                        <input type="number" class="form-control" id="jml" name="jumlah" placeholder="Jumlah Barang">
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