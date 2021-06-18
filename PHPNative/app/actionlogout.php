<?php
session_start();
$_SESSION=[]; //hanya untuk memastikan bahwa session kosong
session_unset(); //memastikan session kosong
session_destroy();

setcookie('login', '', time() - 3600);

header("Location: ../public/login.php");
exit;
?>