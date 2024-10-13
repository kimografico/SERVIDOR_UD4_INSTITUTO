<?php
class Student extends Person{
    private $email = ''; // por qué no está en la clase padre?
    private $subjects = '';

    function __construct($name, $surname) {
        parent::__construct($name, $surname);
    }

    public function printInfo() {

    }
    
    public function addSubject() {

    }

}

?>