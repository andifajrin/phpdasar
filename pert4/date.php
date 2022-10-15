<?php
    //Date, untuk menampilkan tanggal dengan format tertentu
    //echo date("l, D-M-Y");

    //time
    //unix Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    //echo time();
    //echo date("l, , time()-60*60*24*100);

    //mktime
    //membuat sendiri detik
    //mktime(0,0,0,0,0,0,0)
    //urutannya yaitu jam, menit, detik, bulan, tanggal, tahun
    //echo date("l", mktime(0,0,0,04,27,2001));

    //strtotime
    echo date("l", strtotime("27 Apr 2001"));
?>