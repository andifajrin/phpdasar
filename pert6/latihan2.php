<?php

// array dengan index default numerik
$mahasiswa = [["fajrin", "192359", "I-TI", "teknik informatika"],
["andi", "192309", "I-TI", "teknik informatika"],
["haris", "192380", "I-TI", "teknik informatika"]];

//array dengan index associative atau kita buat sendiri
//definisinya sama seperti array numerik, kecuali/tetapi keynya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "fajrin",
        "stb" => "192359",
        "kelas" => "I-TI",
        "jurusan" => "teknik informatika",
        "tugas" => [85, 91, 100],
        "gambar" => "1.png"
    ],
    [
        "nama" => "andi",
        "stb" => "192357",
        "kelas" => "I-TI",
        "jurusan" => "sistem informasi",
        "tugas" => [84, 90, 100],
        "gambar" => "2.png"
    ],
    [
        "nama" => "haris",
        "stb" => "192380",
        "kelas" => "I-TI",
        "jurusan" => "teknik informatika",
        "tugas" => [80, 90, 100],
        "gambar" => "3.png"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <!-- mencetak nilai tugas ke 1 mahasiswa ke 2 -->
    <h1> Print Nilai = <?= $mahasiswa[1]["tugas"][0]; ?> </h1>
    <?php foreach($mahasiswa as $mhs) : ?>

   

    <!-- untuk mencetak array associative -->
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li> 
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Stb : <?= $mhs["stb"]; ?></li>
        <li>Kelas : <?= $mhs["kelas"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Tugas : <?= $mhs["tugas"][1]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>