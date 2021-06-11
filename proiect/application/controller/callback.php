<?php

require "application/config/init.php";
$data = fetchData();
session_start();
$_SESSION['username'] = "Ema Hritcu";
$_SESSION['email'] = "hritcuema2000@gmail.com";