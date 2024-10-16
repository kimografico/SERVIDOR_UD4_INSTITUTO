<?php
class Subject{
    private $subject = '';
    private $class = '';
    private $teacher = '';

    function __construct($subject, $class, $teacher) {
        $this->subject = $subject;
        $this->class = $class;
        $this->teacher = $teacher;
        $teacher->addSubject($this);
    }

    public function getName (){
        return $this->subject;
    }

    public function getClass (){
        return $this->class;
    }

    public function getTeacher (){
        return $this->teacher;
    }

}

?>