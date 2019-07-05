<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <table border="1px solid black">
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>