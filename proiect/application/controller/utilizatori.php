<?php
include_once __DIR__ . "/../libs/controller.php";
class Utilizatori extends Controller
{
   
public function index(){
    $register_model = $this->loadModel('Utilizatori_Model');
    $users = $register_model->getAllUsers();
    if(empty($users))
    header('location: ' . URL . 'connection');
    require 'application/views/_templates/StatisticsPage.php';
}
}