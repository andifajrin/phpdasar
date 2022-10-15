<?php

//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

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
    <link rel="stylesheet" type="text/css" href="inicss.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #00cec9;
            color: white;
            padding: 20px;
        }

        td {
            height: 40px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }



        button {
            border-radius: 12px;
            background-color:  #00cec9;
            color: white;
            width: 70px
        }
    </style>
</head>
<body>
    <h1> DAFTAR NAMA SISWA </h1>
    <a class="tambah" href="tambah.php">Tambah data</a>
    <div class="cari">
    <form action="" method="post" >
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off" style="height: 25px">
        <button type="submit" name="cari" style="height: 30px;">Cari</button>
    </form>
    </div>
    <br>
    <div class="utama">
    <table border="0" cellpadding="10" cellspacing="0" align="center">
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
                <a class="ubah" href="ubah.php?id=<?=$row["id"]; ?>"> ubah </a>
                <a class="ubah" href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?');">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div>
    <center style="margin-top: 20px;"><br><a class="home" href="index.php" >Halaman Awal</a></center>
    <center style="margin-top: 20px;"><br><a class="home" href="logout.php" >Logout</a></center>
</body>
</html>