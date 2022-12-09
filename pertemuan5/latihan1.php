<?php 
// array
//  variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// definisi lainnya adalah pasangan antara key dan value
// key-nya adalah index, yang pasti dimulai dari 0


// membuat array
// cara lama
$hari = array ("senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", 
 'minggu');
// cara baru
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Okct", "Nov", "Des"];
$arr1 = [123, 'anjay', false ];



// menampilkan array
// echo $hari;(salah)
// jika ingin menampilkan array anda bisa menggunakan
// var_dump() atau print_r
// jika menggunakan var_dump
var_dump($hari);
echo "<br>";
print_r( $bulan );

// cara menampilkan satu elment pada array
echo "<br>";
echo $bulan[1];
echo "<br>";
echo $hari[0];

// cara menambahkan element baru pada array
var_dump($hari);
$hari [] = "ahad";
$hari [] = "senen";
echo "<br>";
var_dump($hari);

/*VAR_DUMP DAN PRINT_R HANYA DIGUNAKAN UNTUK DEVOLOPER BUKAN UNTUK USER*/

?>