<?php

require_once "src/Mentor.php";
require_once 'src/Moodle.php';

//1- Declaration of people that are mentors
$people = ['Ruben', 'Amalia', 'Alicia', 'Oriol', 'Arnau', 'Mireia', 'Laia', 'Pere'];
$mentors = [];
foreach ($people as $person) {
    $mentors[] = new Mentor($person);
}

//2- Declaration of Moodle
$moodle = New Moodle();

//3- Registration of mentors into Moodle
foreach ($mentors as $mentor) {
    $moodle->addObserver($mentor);
}

//4- Declaration of new
$new = 'You are all going to get a salary rise!' . PHP_EOL;

//5- Communication of new to mentors
$moodle->newNews($new);

?>