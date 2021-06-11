<?php
include_once __DIR__ . "/../libs/controller.php";
class Connection extends Controller
{
   
public function index(){
    require 'application/views/_templates/SignIn.php';
    $connection_model = $this->loadModel('Connection_Model');
}
public function signin(){

    
    if (isset($_POST["submit_user"])) {
        $connection_model = $this->loadModel('Connection_Model');
        $exists=$connection_model->verfUser($_POST["username"], $_POST["password"]);
        if($exists==0)
        {header('location: ' . URL . 'connection');}
        else
        {header('location: ' . URL . 'home/index');}
    }
    else
    {
    session_start();
    $_SESSION['username'] = "Ema Hritcu";
    $_SESSION['email'] = "hritcuema2000@gmail.com";
    require "application/config/init.php";
    require 'application/views/_templates/SignIn.php';}


}}