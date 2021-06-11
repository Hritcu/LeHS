<?php

include_once __DIR__ . "/../libs/controller.php";
class Home extends Controller
{
    public function index()
    {
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
        require 'application/views/_templates/ChooseHTML_or_CSS.php';
        
    }
    public function pagina()
    {
        
        require 'application/views/_templates/pagina.php';  
    }
    public function htmlex()
    {
        require 'application/views/_templates/htmlex.php'; 
    }
    public function scholary()
    {
        require 'application/views/_templates/ScholaryHTML.php';
    }
    public function signin()
    {
        require 'application/views/_templates/SignIn.php';
    }
    public function signup()
    {
        require 'application/views/_templates/Signup.php';
    }
    public function statistici()
    {
        require 'application/views/_templates/StatisticsPage.php';
    }
   

}
