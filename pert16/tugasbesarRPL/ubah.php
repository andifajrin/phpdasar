<?php

//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data siswa berdasarkan id
$mhs = query("SELECT * FROM datasiswa WHERE id = $id")[0];
//var_dump($mhs);

//cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"]) ) {
    // var_dump($_POST); = untuk mengecek apakah data berhasil diambil atau belum

    //cek apakah data ubah di tambahkan
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="inicss.css">
</head>
<body>
    <center><h1>Ubah data Siswa</h1></center>
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>"></td>
        <table cellspacing="10" cellpadding="3" align="center" class="t1">
            <tr>
                <th colspan="2" align="center">Silakan Lakukan Perubahan Data</th>
            </tr>
            <tr>
                <td><label for="nis">NIS</label></td>
                <td> : <input type="text" name="nis" id="nis" required value="<?= $mhs["nis"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td> : <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="jkel">Jenis Kelamin (L/P)</label></td>
                <td> : <input type="text" name="jkel" id="jkel" required value="<?= $mhs["jkel"]; ?>"></td>
            <tr>
                <td><label for="kelas">Kelas</label></td>
                <td> : <input type="kelas" name="kelas" id="kelas" required value="<?= $mhs["kelas"]; ?>"></td>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td> : <input type="text" name="alamat" id="alamat" required value="<?= $mhs["alamat"]; ?>"></td>
            <tr>
                <td colspan="2" align="center">
                <button type="submit" name="submit"  style="height: 50px; width:170px; margin-top:10px; font-size: large; border-color: white;">Ubah</button>
                    </td>
            </tr>
        </table>
        </form>
        <center style="margin-top: 10px;"> <br><a class="home" href="admin.php">Kembali</a></center>
    </body>
</html>