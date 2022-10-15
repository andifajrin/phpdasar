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
        <ul>
        <?php foreach($smartphone as $hp) : ?>
                
                <li><img src="img/<?= $hp["gambar"]; ?>"></li>
                <li>
                <a href="latihan2.php?merk=<?= $hp["merk"]; ?>&tipe=<?= $hp["tipe"]; ?>&varian=<?= $hp["varian"]; ?>&versi=<?= $hp["v_android"]; ?>&gambar=<?= $hp["gambar"]; ?>"> <?= $hp["merk"]; ?></a>
                </li>
                
            
            <?php endforeach; ?>
        </ul>
</body>
</html>