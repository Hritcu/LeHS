<?php

class CSS_Level_Model{

    public $id;
    public $cerinta;
    public $raspuns;
    public $background_style;
    public $blue_dog_style;
    public $yellow_dog_style;
    public $blue_dog_house_style;
    public $yellow_dog_house_style;
    public $dificultate;
    public $justify_content_property_shelter;
    public $flex_direction_property_shelter;
    public $align_items_property_shelter;

    public function _construct(){
        echo "AM AJUNS IN MODEL!";
    }
    public function setAllVariables($id,$cerinta,$raspuns,$background_style,$blue_dog_style,$yellow_dog_style,$blue_dog_house_style,$yellow_dog_house_style,$dificultate,$justify_content_property_shelter,$flex_direction_property_shelter,$align_items_property_shelter){

        $this->id = $id;
        $this->cerinta = $cerinta;
        $this->raspuns = $raspuns;
        $this->background_style = $background_style;
        $this->blue_dog_style = $blue_dog_style;
        $this->yellow_dog_style = $yellow_dog_style;
        $this->blue_dog_house_style=$blue_dog_house_style;
        $this->yellow_dog_house_style=$yellow_dog_house_style;
        $this->dificultate = $dificultate;
        $this->justify_content_property_shelter= $justify_content_property_shelter;
        $this->flex_direction_property_shelter= $flex_direction_property_shelter;
        $this->align_items_property_shelter = $align_items_property_shelter;
    }

}