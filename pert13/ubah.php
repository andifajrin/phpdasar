<?php

require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
//var_dump($mhs);

//cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"]) ) {
    // var_dump($_POST); = untuk mengecek apakah data berhasil diambil atau belum

    //cek apakah data ubah di tambahkan
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <ul>
                <li>
                    <label for="stb">STB</label> : 
                    <input type="text" name="stb" id="stb" required value="<?= $mhs["stb"]; ?>">
                </li>
                <li>
                    <label for="nama">Nama</label> : 
                    <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
                </li>
                <li>
                    <label for="email">Email</label> : 
                    <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
                </li>
                <li>
                    <label for="jurusan">Jurusan</label> : 
                    <input type="jurusan" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar</label> : 
                    <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah</button>
                </li>
            </ul>
        </form>
        <a href="index.php">kembali ke menu utama</a>
    </body>
</html>