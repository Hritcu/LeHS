<?php
include_once __DIR__ . "/../libs/controller.php";
class Profile extends Controller
{
   
public function index(){
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You have to log in first";
        header('location: ' . URL . 'connection');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: ' . URL . 'connection');
    }

    require 'application/views/_templates/profile.php';
}}
