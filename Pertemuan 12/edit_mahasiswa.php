<?php 
include 'koneksi.php';
$id = $_GET['id'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
$row = mysqli_fetch_assoc($mahasiswa);
// Membuat data jurusan menjadi dinamis
$jurusan = array('Teknik Informatika', 'Teknik Mesin', 'Teknik Kimia');
// membuat function untuk set aktif radio button
function active_radio_button($value, $input) {
    // apabila value dari radio sama dengan yang diinput
    $result = $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link untuk loading bootstrap.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Form Edit Data</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Data Mahasiswa</h3>
                <form action="update_mahasiswa.php" method="POST">
                    <input type="hidden" value="<?= $row['id_mhs']; ?>" name="id">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM Anda" value="<?= $row['nim']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nm">Nama</label>
                        <input type="text" class="form-control" id="nm" name="nama" placeholder="Nama Anda" value="<?= $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="radio">Jenis Kelamin</label>
                        <label for="lk" class="radio-inline">
                            <input type="radio" id="lk" name="jenis_kelamin" value="L" <?= active_radio_button("L", $row['jenis_kelamin']) ?>> Laki-laki
                        </label>
                        <label for="pr" class="radio-inline">
                            <input type="radio" id="pr" name="jenis_kelamin" value="P" <?= active_radio_button("P", $row['jenis_kelamin']) ?>> Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="jrs">Jurusan <?= $row['jurusan']; ?></label>
                        <select class="form-control" name="jurusan" id="jrs">
                            <?php foreach ($jurusan as $jrs) { ?>
                                <option value="<?= $jrs;?>" <?= $row['jurusan']==$jrs?'selected="selected"':''; ?>><?= $jrs; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="5"><?= $row['alamat']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-warning">Update</button>
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