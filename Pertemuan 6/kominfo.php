<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form Validasi</title>
</head>
<body>
    <h1>Membuat form validasi dengan PHP <br> ---</h1>
    <?php 
        if (isset($_GET['nama'])) {
            if ($_GET['nama'] == "kosong") {
                echo "<h4 style='color:red'>Nama belum dimasukkan!</h4>";
            }
        }
    ?>
    <h4>Masukkan nama Anda :</h4>
    <form action="cek.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
            <td><input type="submit" value="cek"></td>
        </tr>
    </table>
    </form>
</body>
</html>