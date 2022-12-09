<?php 
// date
// Untuk Menampilkan Tanggal Dan Waktu Dengan Format Tertentu
//    echo date( "l, j~M~Y " );

// Time
// Unix Timestamp / EPOCH Time
// Detik yg sudah berlalu sejak 1 januari 1970
// echo time(  );
// echo date("l,j M Y", time ()-60*60*24*5);

// mktime
// Membuat Sendiri Detik Yang Sudah Berlau Dengan Demikian Akan Bisa Memanipulasi Waktu Yang Ingin Kita Buat(Membuat Detik Sendiri)
// mktime(0,0,0,0,0,0)
// Jam, Menit, Detik, Bulan, Tanggal, Tahun
// echo date("l", mktime(0,0,0,1,1,2005));


// strtotime()
echo date("l", strtotime("1 january 2005"));




?>