<?php

//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome</title>
    <link rel="stylesheet" type="text/css" href="csscuy.css">
</head>
<body>
    <h1 style="margin-top: 210px;">Silakan Pilih Salah Satu Menu Dibawah Untuk Menampilkan Data</h1>

    <center>
            <a class="hp" href="admin.php">Klik disini Untuk Menampilkan Data Siswa!</a> 
            <a class="hp" href="guru.php">Klik disini Untuk Menampilkan Data Guru!</a> 
    </center>
    
</body>
</html>