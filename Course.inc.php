<?php
class Course{
    private $id = '';
    private $subjects = '';
    private $students = '';
    private $year = '';

    function __construct($year) {
        $this->id = uniqid('');
        $this->year = $year;
    }

    public function addSubject() {
        // añade una asignatura a un curso.
    }

    public function addStudent() {
        // añade un estudiante a un curso, y el curso al estudiante.
    }

    public function takeExam() {
        // realiza el examen de una asignatura. 
        // Pondrá una nota aleatoria entre 0 y 10 a todos los alumnos del curso
        // en la asignatura proporcionada
    }

    public function printInfo() {
        return "ID: " . $this->id . "<br>" . 
               "Año: " . $this->year . "<br>" . 
               "Asignaturas: " . $this->subjects . "<br>" . 
               "Estudiantes: " . $this->students . "<br>";
    }

}

?>