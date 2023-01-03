<?php
require 'functions.php';
$id = $_GET["id"];

session_start();
if ( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
// cek keberhasilan data
if (hapus($id) > 0 ) {
    echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'test.php';
        </script>";
} else {
    echo "<script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'test.php';
        </script>";
}




?>