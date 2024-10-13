<?php
class Student extends Person{
    private $email = ''; // por qué no está en la clase padre?
    private $course = '';
    private $grades = '';

    function __construct($name, $surname) {
        parent::__construct($name, $surname);
    }

    public function printInfo() {
        return "Nombre: " . $this->name . "<br>" . 
               "Apellidos: " . $this->surname . "<br>" . 
               "eMail: " . $this->email . "<br>" . 
               "Curso: " . $this->course . "<br>" . 
               "Notas: " . $this->grades . "<br>";

    }
    
    public function setGrades() {
        // Pone la nota para una asignatura en concreto
    }

}

?>