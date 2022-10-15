<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["gambar"]) ||
    !isset($_GET["merk"]) ||
    !isset($_GET["tipe"]) ||
    !isset($_GET["varian"]) ||
    !isset($_GET["versi"])) {


    //redirect
    header("Location: latihan1.php");
    exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail hp</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["merk"]; ?> </li>
    <li><?= $_GET["tipe"]; ?> </li>
    <li><?= $_GET["varian"]; ?> </li>
    <li><?= $_GET["versi"]; ?> </li>
</ul>

<a href="latihan1.php"> Kembali ke daftar hp </a>

</body>
</html>