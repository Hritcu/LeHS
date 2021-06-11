<?php
include_once __DIR__ . "/../libs/controller.php";
class ProfileSettings extends Controller
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
    if (isset($_POST["upload"])) {
        $connection_model = $this->loadModel('ProfileSettings_Model');
        $exists=$connection_model->Update($_FILES["uploadfile"]["name"], $_FILES["uploadfile"]["tmp_name"],$_SESSION['username']);
        if($exists==1)
        {
            $connection_model->afisare($_SESSION['username']);
        }
    }
    if (isset($_POST["submit_change"])) {
        $connection_model = $this->loadModel('ProfileSettings_Model');
        if(empty($_POST["password"])|| empty($_POST["username"]))
        {
            header('location: ' . URL . 'profile');
    }
    else
    {
        $exists=$connection_model->verfUser($_POST['username'], $_POST["password"]);
        if($exists==0)
        {header('location: ' . URL . 'profile');}
        else
        {
        $connection_model->change($_POST['username'], $_POST["password"],$_POST['name'], $_POST["email"],$_POST['new_password'], $_POST["rnew_password"]);
        header('location: ' . URL . 'profilesettings');}
    }
}
    if (isset($_POST["cancel"]))
    {
        header('location: ' . URL . 'profile');}
        

    require 'application/views/_templates/profile-settings.php';
    $connection_model = $this->loadModel('ProfileSettings_Model');
}

}
