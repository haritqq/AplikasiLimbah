<!DOCTYPE html>
<html><head>
    <title>Document</title>
</head><body>
    <h3 style="text-align: center">Daftar Mahasiswa</h3>
    <br><br><br>
    <table border='1' cellspacing='' cellpadding='10'>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nim</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No. Telepon</th>
            <th>Jurusan</th>
        </tr>

        <?php $no= 1; foreach ($mahasiswa as $mhs): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mhs->nama ?></td>
            <td><?php echo $mhs->nim ?></td>
            <td><?php echo $mhs->tgl_lahir ?></td>
            <td><?php echo $mhs->jurusan ?></td>
            <td><?php echo $mhs->alamat ?></td>
            <td><?php echo $mhs->email ?></td>
            <td><?php echo $mhs->no_telp ?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</body></html>