<?php
// Date 
// Untuk menampilkan tanggal dan format tertentu
    // echo date("l, D-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // Dettik yang sudah berlaku sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,8,25,1985));

    // strtotime
    echo date("l", strtotime("25 Agustus 1985"));
?>