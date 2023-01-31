<?php 
session_start();
error_reporting(0);

include 'functions.php';

// cek cookie
if (isset($_COOKIE['siuuu']) && isset($_COOKIE['owke']) ) {
	$siuuu = $_COOKIE['siuuu'];
	$owke = $_COOKIE['owke'];

	// Ambil username(owke) untuk cookie berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $siuuu");
	$row = mysqli_fetch_assoc($result);

	// cek username dari cookie dari database
	if ( $owke === hash('sha256', $row['username'])){
		$_SESSION["login"] = true;
	}
}


if( isset($_SESSION["login"])){
    header("Location: test.php");
    exit();
}

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {

			// set session
			$_SESSION["login"] = true;
			
			// cek remember me
			if (isset($_POST['remember'])){
				// buat cookie
				setcookie('siuuu', $row['id'], time() +60*24*7 );
				setcookie('owke', hash('sha256', $row['username']), time() +60*24*7 );
			}
			
			header("location: test.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

<form action="" method="post">
	<div class="box">
		<div class="form">
		<h1>Login</h1>
		<?php if( isset($error) ) : ?>
			<p style="color: #45f3ff; text-align: center; font-style: italic;">username / password salah</p>
		<?php endif; ?>
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
			<div class="remember">
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember Me</label>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Lupa Password?</a>
				<a href="registrasi.php">Daftar</a>
			</div>
			<input type="submit" name="login" value="Login">
		</div>
	</div>
</form>







</body>
</html>