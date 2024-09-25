<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan',
        ];
    ?>

    <table border="1px">
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><?= $Dosen['nama'] ?></td>
        </tr>
        <tr>
            <td>DOMISILI</td>
            <td>:</td>
            <td><?= $Dosen['domisili'] ?></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>:</td>
            <td><?= $Dosen['jenis_kelamin'] ?></td>
        </tr>
    </table>
</body>
</html>