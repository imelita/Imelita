<?php
// array
// variabel yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda 
// pasangan antara key dan value 
// key-nya adalah index, yang dimulai dari 0

// Membuat array
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

//  Menambahkan eleman baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);

?>