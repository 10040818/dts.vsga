<?php
include 'koneksi.php';
//ambil field
$id_peserta = $_GET['id_peserta'];
$hasil = $db->query("DELETE FROM peserta
   WHERE peserta.id = $id_peserta");
header('location:peserta.php');
