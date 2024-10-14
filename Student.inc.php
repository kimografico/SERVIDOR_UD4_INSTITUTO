<?php
class Student extends Person{
    private $email = ''; // por qué no está en la clase padre?
    private $course = '';
    private $grades = '';

    function __construct($name, $surname) {
        parent::__construct($name, $surname);
        $this->email = $this->name.$this->surname.'@hogwarts.com';
    }

    public function printInfo() {
        return "Nombre: " . $this->name . $this->surname . "<br>" . 
               "eMail: " . $this->email . "<br>" . 
               "Curso: " . $this->course . "<br>" . 
               "Notas: " . $this->grades . "<br>";

    }
    
    public function setGrades() {
        // Pone la nota para una asignatura en concreto
    }

}

?>