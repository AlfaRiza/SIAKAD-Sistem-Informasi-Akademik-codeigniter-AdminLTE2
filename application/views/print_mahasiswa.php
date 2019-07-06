<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telpon</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) :
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs->nama; ?></td>
                <td><?= $mhs->nim; ?></td>
                <td><?= $mhs->jurusan; ?></td>
                <td><?= $mhs->alamat; ?></td>
                <td><?= $mhs->email; ?></td>
                <td><?= $mhs->no_telp; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>