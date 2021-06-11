<?php
include_once __DIR__ . "/../libs/controller.php";
class Register extends Controller
{
   
public function index(){
    require 'application/views/_templates/SignUp.php';
    $register_model = $this->loadModel('Register_Model');
}
public function signup(){

    if (isset($_POST["submit_add_user"])) {
        if($_POST["password"]!=$_POST["confirmPassword"])
        {
            header('location: ' . URL . 'register');
          }
          else{
        $register_model = $this->loadModel('Register_Model');
        $amount_of_users = $register_model->getAmountOfUsers($_POST["username"], $_POST["email"]);
        if($amount_of_users==0)
        {$register_model->addUser($_POST["name"],$_POST["username"], $_POST["email"],  $_POST["password"]);
        header('location: ' . URL . 'home/index');}
        else
        header('location: ' . URL . 'register');}
    }
    else
    {
    session_start();
    $_SESSION['username'] = "Ema Hritcu";
    $_SESSION['email'] = "hritcuema2000@gmail.com";
    require "application/config/init.php";
    require 'application/views/_templates/SignUp.php';}


}}