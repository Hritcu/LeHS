<?php

include_once __DIR__ . "/../libs/controller.php";
class Html extends Controller
{
   

    public function index()
    {
        if (isset($_POST["submit"])) {
            $da=$_POST['hlevel'];

                    if($da=="1")
           { 
               $register_model = $this->loadModel('levelH');
               $register_model->Update($_SESSION['username']);}
        }
        require 'application/views/_templates/htmlex.php'; 
    }
}
