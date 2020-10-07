<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Foreach</title>
</head>

<body>
    <?php $nama = array('Adi', 'Budi', 'Carli', 'Dedy'); ?>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($nama as $row) { ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $val ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>