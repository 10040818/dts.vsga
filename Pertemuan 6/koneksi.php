<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "dts-vsga2020";

$db = mysqli_connect($server, $user, $password, $database);
echo "berhasil terkoneksi ...";
if (!$db) {
    die("Gagal terhubung dengan database : ".mysqli_connect_error());
}
?>