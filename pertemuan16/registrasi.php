<?php 
require 'functions.php';
session_start();
if ( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
if( isset($_POST["register"]) ) {

    if (registrasi ($_POST)  > 0 ){
        echo "<script>
                alert('Selamat Anda Berhasil Registrasi');
                window.location = 'login.php';
              </script>";
    } else {
         echo mysqli_error($conn);
    } 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/registrasi.css">
</head>
<body>
<form action="" method="post">
	<div class="box">
		<div class="form">
		<h1>Daftar</h1>
			<div class="inputBox">
				<input type="text" name="username" required autofocus autocomplete="off">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required>
				<span>Password</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="password" name="password2" required>
				<span>Konfirmasi Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Lupa Password?</a>
				<a href="login.php">Login</a>
			</div>
			<input type="submit" name="register" value="Daftar">
		</div>
	</div>
</form>
</body>
</html>