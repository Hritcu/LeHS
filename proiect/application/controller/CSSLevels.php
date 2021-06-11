<?php

include_once __DIR__ . "/../libs/controller.php";
class CSSLevels extends Controller
{
   

    public function level ($LevelNumber){

        $var = (int) $LevelNumber;
        
        if($var == 0  or $var == 21 ) {header('location: ' . URL . 'home/index');}

        else {

        $string = file_get_contents("public/json/CSS_Answers.json");
         $data = (array) json_decode($string, true);
         for ($i=0; $i < 20; $i++) {
            if($data[$i]["id"]==$LevelNumber) {
               $name = $data[$i]["id"];
               $instructions = $data[$i]["cerinta"];
               $correct_answer = $data[$i]["raspuns"];
               $background_style = $data[$i]["background_style"];
               $blue_dog_style = $data[$i]["blue_dog_style"];
               $yellow_dog_style = $data[$i]["yellow_dog_style"];
               $blue_dog_house_style=$data[$i]["blue_dog_house_style"];
               $yellow_dog_house_style=$data[$i]["yellow_dog_house_style"];
               $dificultate = $data[$i]["dificultate"];
               $justify_content_property_shelter = $data[$i]["justify_content_property_shelter"];
               $flex_direction_property_shelter = $data[$i]["flex_direction_property_shelter"];
               $align_items_property_shelter =$data[$i]["align_items_property_shelter"];



               $level_model = $this->loadModel('CSS_Level_Model');
               $level_model->setAllVariables($name, $instructions,$correct_answer,$background_style,$blue_dog_style,$yellow_dog_style,$blue_dog_house_style,$yellow_dog_house_style,$dificultate, $justify_content_property_shelter,$flex_direction_property_shelter,$align_items_property_shelter);            }
        }
        if (isset($_POST["submit_check"])) {
          $da=$_POST['clevel'];
                  if($da=="1")
         { 
             session_start();
             $register_model = $this->loadModel('levelC');
             $register_model->Update($_SESSION['username']);}
      }

      require 'application/views/_templates/test.php'; 
    }
}
}
