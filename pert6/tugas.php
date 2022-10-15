<?php

$smartphone = [
    [
        "merk" => "Xiaomi",
        "tipe" => "Redmi Note 5",
        "varian" => "3/32 GB",
        "v_android" => "9",
        "warna" => "black",
        "t_beli" => "2018",
        "gambar" => "whyred.jpg"
    ],
    [
        "merk" => "Realme",
        "tipe" => "Realme C17",
        "varian" => "8/256 GB",
        "v_android" => "10",
        "warna" => "Blue",
        "t_beli" => "2020",
        "gambar" => "rlc17.jpg"
    ],
    [
        "merk" => "Oppo",
        "tipe" => "Oppo A57",
        "varian" => "3/32 GB",
        "v_android" => "6",
        "warna" => "black",
        "t_beli" => "2017",
        "gambar" => "oa57.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar HP Bekas</title>
</head>
<body>
        <h1> Daftar HP Bekas :  </h1>
        <?php foreach($smartphone as $hp) : ?>
            <ul>
                <li>
                    <img src="img/<?= $hp["gambar"]; ?>">
                </li> 
                <li>Merk Smartphone : <?= $hp["merk"]; ?></li>
                <li>Tipe : <?= $hp["tipe"]; ?></li>
                <li>Varian : <?= $hp["varian"]; ?></li>
                <li>Versi Android : <?= $hp["v_android"]; ?></li>
                <li>Warna : <?= $hp["warna"]; ?></li>
                <li>Tahun Beli : <?= $hp["t_beli"]; ?></li>
            </ul>
            <?php endforeach; ?>
</body>
</html>