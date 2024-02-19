<?php
 $koneksi= mysqli_connect  ("localhost","root","","galeryrpl3");
 $hasil = mysqli_query($koneksi,"SELECT * FROM foto");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>HALAMAN ADMIN</h1>
    <a href="tambah.php">tambah data</a>

    <table border=1>
        <thead>
            <tr>
                <th>No</th>
                <th>Foto kegiatan</th>
                <th>judul kegiatan</th>
                <th>tanggal</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = my_sqli_fetch_assoc ($hasil)); ?>
            <tr>
                <td>1</td>
                <td><img src="gambar/<?=$row["foto"]?"></td>
                <td><?=$row["keterangan"]?></td>
                <td><?=$row["tanggal"]?></td>
                
            </tr>
        </tbody>
        
    </table>
</body>
</html>