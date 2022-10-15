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
                document.location.href = 'admin.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan');
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
    <title>TAMBAH DATA SISWA</title>
    <link rel="stylesheet" type="text/css" href="inicss.css">
</head>
<body>
    <h1>TAMBAH DATA SISWA</h1>
        <form action="" method="post">
            <table border="0" cellspacing="10" cellpadding="3" align="center" class="t1">
                <tr>
                    <th colspan="2" align="center">Silakan Masukkan Data Baru</th>
                </tr>
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
                    <td colspan="2" align="center">
                        <button type="submit" name="submit"  style="height: 50px; width:170px; margin-top:10px; font-size: large; border-color: white;">Tambah</button>
                    </td>
                </tr>
            </table>
            <center><br><a class="home" href="admin.php"> Kembali </a></center>
        </form>
    </body>
</html>