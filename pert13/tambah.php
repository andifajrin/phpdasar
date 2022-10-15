<?php

require 'functions.php';
//cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"]) ) {
    var_dump($_POST);
    var_dump($_FILES);  die; //= untuk mengecek apakah data berhasil diambil atau belum

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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="stb">STB</label> : 
                    <input type="text" name="stb" id="stb" required>
                </li>
                <li>
                    <label for="nama">Nama</label> : 
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="email">Email</label> : 
                    <input type="text" name="email" id="email" required>
                </li>
                <li>
                    <label for="jurusan">Jurusan</label> : 
                    <input type="jurusan" name="jurusan" id="jurusan" required>
                </li>
                <li>
                    <label for="gambar">Gambar</label> : 
                    <input type="file" name="gambar" id="gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah</button>
                </li>
            </ul>
        </form>
        <a href="index.php">kembali ke menu utama</a>
    </body>
</html>