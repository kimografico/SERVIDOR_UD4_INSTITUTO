<?php
class Persona{
    private $name ='';
    private $surname ='';
    // private $image;

    function __construct($name, $surname) {
        $this->name =  $name;
        $this->surname =  $surname;
        // $this->image =  "img/".$surname.$name.".png";
    }

    public function __toString() {
        return ($this->name . ' ' . $this->surname);
    }

}

?>