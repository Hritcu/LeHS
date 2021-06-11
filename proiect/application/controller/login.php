<?php


require "application/config/init.php";
session_start();
$_SESSION['username'] = "Ema Hritcu";
$_SESSION['email'] = "hritcuema2000@gmail.com";

goToAuthUrl();

echo "operation failed.";
