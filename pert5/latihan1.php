<?php
//array
//variable yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key nya adalah index, yang dimulai dari 0
//Membuat array dengna cara lama
$hari = array("senin","selasa","rabu");
//  echo $hari[2];
//  echo "<br>";
 //Membuat array dengan cara baru
$bulan = ["januari","februari","maret"];
//  echo $bulan[2];
//  echo "<br>";
 // menampilkan array
 //menggunakan var_dump / print_r()
// var_dump ($bulan);
// echo "<br>";
// print_r($bulan);


//menambahkan elemnen baru ke array
var_dump ($bulan);
$bulan[] = "april";
$bulan[] = "mei";
echo "<br>";
var_dump ($bulan)
?>