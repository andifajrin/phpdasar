<?php

$mahasiswa = [["fajrin","192359","TI-I","Teknik Informatika"],
                ["haris","192357","TI-j","Teknik Informatika"],
                    ["andi","192350","TI-k","Teknik Informatika"]]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>
    
    <!-- menampilkan array mahasiswa untuk 1  nama saja -->
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?> 
            <li><?=$mhs ?></li>
        <?php endforeach; ?><br>
    </ul>

    <!-- cara menampilkan per elemen array apabila hanya 1 nama mahasiswa -->
    <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul>

    <!-- cara menampilkan apabila data mahasiswa lebih dari 1 -->
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    : <?= $mhs[0]; ?></li>
        <li>STB     : <?= $mhs[1]; ?></li>
        <li>Kelas   : <?= $mhs[2]; ?></li>
        <li>Jurusan : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>