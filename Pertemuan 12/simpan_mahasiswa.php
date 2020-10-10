<?php

include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', alamat='$alamat'";

mysqli_query($koneksi, $query);
header("Location:index.php");