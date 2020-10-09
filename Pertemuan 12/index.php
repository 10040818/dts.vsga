<?php
include 'koneksi.php';
$data = $db->query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link untuk loading bootstrap.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>List Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>List Mahasiswa</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th class="text-right">GENDER</th>
                            <th>JURUSAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($data as $mhs) { ?>
                            <?php $jenis_kelamin = $mhs['jenis_kelamin']=='P'?'Perempuan':'Laki-laki' ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $mhs['nim']; ?></td>
                                <td><?= $mhs['nama']; ?></td>
                                <td><?= $jenis_kelamin; ?></td>
                                <td><?= $mhs['jurusan']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="tambah_mahasiswa.php" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>

    <!-- script untuk loading jquery.min.js  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>