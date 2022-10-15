<?php

require 'functions.php';
$siswa = query("SELECT * FROM  datasiswa");

// tombol cari ditekan
if ( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <div class="header">
        <h1> Daftar Nama Siswa </h1>
        <h3><a href="tambah.php">Tambah data</a></h3>
    </div>
    <form action="" method="post" >
        <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <div class="utama">
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th> No. </th>
            
            <th> Nis </th>
            <th> Nama </th>
            <th> Jenis Kelamin (L/P) </th>
            <th> Kelas </th>
            <th> Alamat </th>
            <th> Aksi </th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $siswa as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jkel"]; ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td>
                <a href="ubah.php?id=<?=$row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?');">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
    </div>
    <br><center><a href="homepage.php">Homepage</a></center>
</body>
</html>