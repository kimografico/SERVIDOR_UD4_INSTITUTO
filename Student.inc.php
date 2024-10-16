<?php
class Student extends Person{
    private $course = '';
    private $grades = [];

    function __construct($name, $surname) {
        parent::__construct($name, $surname);
    }

    public function printInfo() {
        return parent::__toString() . "<b>Notas:</b> " . $this->getReportCard() . "<br>";

    }
    
    public function setGrades($subject, $grade) {
        $this->grades["• " . $subject->getTeacher()->getFullName() . " - " . $subject->getName()] = "<b> " . $grade . "</b>";  //array asociativo (HashMap en Java)
    }
    
    public function setCourse($course) {
        $this->course = $course;
    }
    
    public function getReportCard() {
        $reportCard = '';
        foreach ($this->grades as $subject => $grade) {  // en un Array asociativo, se usa => para acceder a los dos valores, indice y valor ($subject es el indice y $grade el valor)
            // $reportCard .= "<br>$subject: $grade"; // Las comillas dobles permiten a PHP interpretar variables dentro del codigo HTML
            $reportCard .= "<br>". $subject . ":" . $grade; 
        }
        return $reportCard;
    }

}

?>