<?php
class Course{
    private $id = '';
    private $subjects = [];
    private $students = [];
    private $year = '';

    function __construct($year) {
        $this->id = uniqid('');
        $this->year = $year;
    }

    public function addSubject($subject) {
        array_push($this->subjects, $subject);
    }

    public function addStudent($student) {
        array_push($this->students, $student);
        $student->setCourse($this);
    }

    public function takeExam() {
        foreach ($this->subjects as $subject){
            foreach ($this->students as $student){
                $grade = rand(0, 10);
                $student->setGrades($subject, $grade);
            }
        }
    }

    public function subjectsNames() {
        $subjectsString = '';
        foreach ($this->subjects as $subject) {
            $subjectsString .= "• " . $subject->getName() . '<br>';
        }

        return rtrim($subjectsString, ', '); // elimino la ultima coma

    }

    public function studentsNames() {
        $studentsString = '';
        foreach ($this->students as $student) {
            $studentsString .= "• " . $student->getFullName() . '<br>';
        }

        return rtrim($studentsString, ', '); // elimino la ultima coma

    }


    public function printInfo() {
        return "<div class='course'><b>Curso:</b> " . $this->id . "<br>" . 
               "<b>Año:</b> " . $this->year . "<br>" . 
               "<b>Asignaturas:</b><br> " . $this->subjectsNames() . 
               "<b>Estudiantes:</b><br> " . $this->studentsNames() . "</div>";
    }

}

?>