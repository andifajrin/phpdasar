<?php
// Pertemuan 2 - PHP Dasar
// sintaks php
//standar output
//echo, print
//print_r
//var_dump
$nama = "fajrin haris";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php - php dalam html</title>
</head>
<body>
    <!-- penulisan sintaks php -->
    <!-- 1. php dalam html ( lebih banyak digunakan) -->
        <h1> hello <?php echo "fajrin"; ?> </h1>
        <p><?php echo "ini adalah paragraf"; ?> </p>
    <!-- 2. html dalam php -->
        <?php echo "<h1> hello selamat datang disini! </h1>"; ?>
    <!-- pemanggilan variabel -->
    <h1> hello <?php echo $nama ?> </h1>
</body>
</html>

<?php
//variabel (tidak boleh diawali dengan angka namun boleh mengandung angka)

// $nama = "fajrin haris";


//operator
//aritmatika
// + - * / % 

// $x = "2";
// $y = "3";


// echo $x * $y;


//penggabungan string
// menggunakan tanda titik

// $nama_d = "Andi fajrin";
// $nama_b = "haris";

// echo $nama_d . " " . $nama_b ;

//operator assignment
// = , += , -= , /= , *= , %= , .= 

echo "operator assignment <br>";
$x = 1;
$x += 5;

echo "$x <br>";

$nama = "fajrin";
$nama .= " ";
$nama .= "andi";
$nama .= " ";
$nama .= "haris";

echo "$nama<br>";

//Operator perbandingan
// < , > , <= , >=, ==

// echo "<h3>Operator perbandingan</h3>";

// var_dump(1 > 5);

//identitas
//==, !==

// var_dump(1 === "5");

//logika
// && , || , !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
?>
