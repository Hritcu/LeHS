<?php


require "application/config/init.php";
session_start();
$_SESSION['username'] = "Ema Hritcu";
$_SESSION['email'] = "hritcuema2000@gmail.com";
//this will redirect user to github authorization page
goToAuthUrl();


//if no redirection occur then following shows.
echo "operation failed.";