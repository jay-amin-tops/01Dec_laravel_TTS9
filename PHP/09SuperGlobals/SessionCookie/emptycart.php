<?php
session_start();
unset($_SESSION['CartData']);
echo "<pre>";
print_r($_SESSION);
header("location:home.php")

?>