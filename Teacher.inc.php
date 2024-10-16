<?php
class Teacher extends Person{
    private $subjects = [];

    function __construct($name, $surname) {
        parent::__construct($name, $surname);
    }

    public function printInfo() {
        return parent::__toString() . "<b>Asignaturas:</b><br>" . $this->subjectsNames();

    }
    
    public function addSubject($subject) {
        array_push($this->subjects, $subject);
    }

    public function subjectsNames() {
        $subjectsString = '';
        foreach ($this->subjects as $subject) {
            $subjectsString .="• " . $subject->getName() . " (" . $subject->getClass() . ')<br>';
        }

        return rtrim($subjectsString, ', '); // elimino la ultima coma

    }

}

?>