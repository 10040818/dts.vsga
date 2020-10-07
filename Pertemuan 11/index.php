<?php
include 'koneksi.php';
$data = $db->query("SELECT * FROM barang");
?>

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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Merek</th>
                            <th>Warna</th>
                            <th class="text-right">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $barang) { ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $barang['nama_merek']; ?></td>
                            <td><?= $barang['warna']; ?></td>
                            <td class="text-right"><?= $barang['jumlah']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="tambah_barang.php" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>

    <!-- script untuk loading jquery.min.js  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>