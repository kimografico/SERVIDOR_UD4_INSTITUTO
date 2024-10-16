<?php
class Person{
    private $name = '';
    private $surname = '';
    private $email = '';
    // private $image;

    function __construct($name, $surname) {
        $this->name =  $name;
        $this->surname =  $surname;
        $this->email = strtolower($name . '.' . $surname) . '@hogwarts.com';
        // $this->image =  "img/".$surname.$name.".png";
    }

    public function __toString() {
        return ('<b>Nombre:</b> ' . $this->name . ' ' . $this->surname . '<br><b>Email:</b> ' . $this->email . '<br>');
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }

}

?>