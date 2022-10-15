<?php

//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"]) ) {
    // var_dump($_POST); //= untuk mengecek apakah data berhasil diambil atau belum

    //cek apakah data berhasil di tambahkan
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
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
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <h1>Tambah data Siswa</h1>
        <form action="" method="post">
            <table cellspacing="10" cellpadding="3" align="center" class="t1">
                <tr>
                    <td><label for="nis">NIS</label></td>
                    <td> : <input type="text" name="nis" id="nis" required></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td> : <input type="text" name="nama" id="nama" required></td>
                </tr>    
                <tr>
                    <td><label for="jkel">Jenis Kelamin (L/P)</label></td>
                    <td> : <input type="text" name="jkel" id="jkel" required></td>
                </tr>
                <tr>   
                    <td><label for="kelas">Kelas</label></td>
                    <td> : <input type="kelas" name="kelas" id="kelas" required></td>
                </tr>  
                <tr>  
                    <td><label for="alamat">Alamat</label></td>
                    <td> : <input type="text" name="alamat" id="alamat" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><button type="submit" name="submit" width="50">Tambah</button></td>
                </tr>
            </table>
            <a href="index.php">kembali ke menu utama</a>
        </form>
    </body>
</html>