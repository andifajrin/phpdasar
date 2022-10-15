<?php
//koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//cek apakah tombol submit sudah ditekan atau belum
if ( isset ($_POST["submit"]) ) {
    // var_dump($_POST); = untuk mengecek apakah data berhasil diambil atau belum

    // ambil data dari tiap elemen dalam form
    $stb = $_POST["stb"];
    $nama  = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    //melakukan query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$stb', '$nama', '$email', '$jurusan', '$gambar')
             ";
    mysqli_query($conn, $query);

    //cek apakah data berhasil di tambahkan
    if ( mysqli_affected_rows($conn) > 0){
        echo "berhasil!";
    } else {
        echo "gagal!";
        echo "<br>";
        echo mysqli_error($conn);
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
        <form action="" method="post">
            <ul>
                <li>
                    <label for="stb">STB</label> : 
                    <input type="text" name="stb" id="stb">
                </li>
                <li>
                    <label for="nama">Nama</label> : 
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="email">Email</label> : 
                    <input type="text" name="email" id="email">
                </li>
                <li>
                    <label for="jurusan">Jurusan</label> : 
                    <input type="jurusan" name="jurusan" id="jurusan">
                </li>
                <li>
                    <label for="gambar">Gambar</label> : 
                    <input type="text" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah</button>
                </li>
            </ul>
        </form>
        <a href="index.php">kembali ke menu utama</a>
    </body>
</html>