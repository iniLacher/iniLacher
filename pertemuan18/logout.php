<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('siuuu', '', time()-3600);
setcookie('owke', '', time()-3600);

header("location: login.php")

?>