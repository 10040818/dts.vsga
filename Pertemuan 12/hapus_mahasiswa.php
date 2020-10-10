<?php 
include 'koneksi.php';
// menyimpan data id kedalam variable
$id = $_GET['id'];
// query SQL untuk hapus data
$query = "DELETE FROM mahasiswa WHERE id_mhs='$id'";
mysqli_query($koneksi, $query);
header('Location:index.php');
?>