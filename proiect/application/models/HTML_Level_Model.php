<?php

class HTML_Level_Model{

    public $id;
    public $cerinta;
    public $raspuns;
    public $teorie;
    public $exemplu;
    public function _construct(){
        echo "AM AJUNS IN MODEL!";
    }
    public function setAllVariables($id,$cerinta,$raspuns,$teorie,$exemplu){
        $this->id = $id;
        $this->cerinta = $cerinta;
        $this->raspuns = $raspuns;
        $this->teorie = $teorie;
        $this->exemplu = $exemplu;
    }

}