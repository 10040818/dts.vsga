<?php

include 'koneksi.php';

$nama = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

// $sql = $db->query("INSERT INTO barang VALUES ('', '$nama', '$warna', '$jumlah')");

$sql = "INSERT INTO barang VALUES ('', '$nama', '$warna', '$jumlah')";

if ($db->query($sql) === TRUE) {
    header('location: index.php');
} else {
    echo 'Data gagal ditambahkan!';
}