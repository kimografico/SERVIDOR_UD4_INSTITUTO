<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php

        include_once('Person.inc.php');
        include_once('Student.inc.php');
        include_once('Teacher.inc.php');
        include_once('Course.inc.php');
        include_once('Subject.inc.php');

        $harryPotter = new Student('Harry', 'Potter');
        $hermioneGranger = new Student('Hermione', 'Granger');
        $ronWeasley = new Student('Ron', 'Weasley');

        $severusSnape = new Teacher('Severus', 'Snape');

        $potions = new Subject('Pociones', 'Calabozo', $severusSnape);
        $defensa = new Subject('Defensa contra las artes oscuras', 'Sala de duelos', $severusSnape);

        $course1997 = new Course(1997);
        $course1997->addSubject($potions);
        $course1997->addSubject($defensa);
        $course1997->addStudent($harryPotter);
        $course1997->addStudent($hermioneGranger);
        $course1997->addStudent($ronWeasley);

        $course1997->takeExam($potions);
        $course1997->takeExam($defensa);
        echo str_replace('\n', '<br>', $course1997->printInfo()).'<br><br>';
        echo str_replace('\n', '<br>', '<div class="teacher">' . $severusSnape->printInfo()).'</div><br>';
        echo str_replace('\n', '<br>', '<div class="student">' . $harryPotter->printInfo()).'</div><br>';
        echo str_replace('\n', '<br>', '<div class="student">' . $hermioneGranger->printInfo()).'</div><br>';
        echo str_replace('\n', '<br>', '<div class="student">' . $ronWeasley->printInfo()).'</div><br>';
        
    ?>
</body>
</html>