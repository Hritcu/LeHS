<?php

include_once __DIR__ . "/../libs/controller.php";
class HTMLLevels extends Controller
{
   
    public function level ($LevelNumber){

        $var = (int) $LevelNumber;
        
        if($var == 0  or $var == 8 ) {header('location: ' . URL . 'home/index');}

        else {

        $string = file_get_contents("public/json/HTML_Answers.json");
         $data = (array) json_decode($string, true);

         for ($i=0; $i < 7; $i++) {
            if($data[$i]["id"]==$LevelNumber) {
               $name = $data[$i]["id"];
               $instructions = $data[$i]["cerinta"];
               $correct_answer = $data[$i]["raspuns"];
                $theory = $data[$i]["teorie"];
                $exemplu=$data[$i]["exemplu"];
               $level_model = $this->loadModel('HTML_Level_Model');
               $level_model->setAllVariables($name, $instructions,$correct_answer, $theory,$exemplu);            }
        }
        if (isset($_POST["submit_check"])) {
            $da=$_POST['hlevel'];

                    if($da=="1")
           { 
               session_start();
               $register_model = $this->loadModel('levelH');
               $register_model->Update($_SESSION['username']);}
        }
     require 'application/views/_templates/htmlex.php'; 
    }
}

}
