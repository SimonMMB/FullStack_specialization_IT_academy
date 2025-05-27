<?php
//FUNCTIONS
function calculateStudentAvGrade(array $array) : array {
    $studentAvGrade = [];
    $averageGrade = 0;
    foreach ($array as $name => $grades) {
        $averageGrade = array_sum($grades) / 5;
        $studentAvGrade[$name] = $averageGrade;
    }
    return $studentAvGrade;
}
function calculateTotalAvGrade(array $array) : float {
    $totalAvGrade = 0;
    $sumOfGrades = 0;
    $totalGrades = 0;
    foreach ($array as $name => $grades) {
        $sumOfGrades += array_sum($grades);
        $totalGrades += count($grades);
    }
    $totalAvGrade = $sumOfGrades / $totalGrades;
    return $totalAvGrade;
}
function showAverages(array $array) : string {
    $studentAvGrade = calculateStudentAvGrade($array);
    $totalAvGrade = calculateTotalAvGrade($array);
    $message1 = '';
    $message2 = '';
    $message3 = '';
    foreach ($studentAvGrade as $name => $average) {
        $message1 .= 'Name: ' . $name . ' | Average grade: ' . $average . PHP_EOL;
    } 
    $message2 = 'Class average grade: ' . $totalAvGrade . PHP_EOL;
    $message3 = 'Avergare grade of each student: ' . PHP_EOL
                . $message1 . PHP_EOL
                . $message2;
    return $message3;
}
//PROGRAM (CONSOLE INTERACTION)
echo 'Put number of students: ' . PHP_EOL;
$num = fgets(STDIN);
$num = trim($num);
$studentsGrades = [];
for ($i = 1; $i <= $num; $i++) {
    echo 'Put the name of student ' . $i . ': ' . PHP_EOL;
    $name = fgets(STDIN);
    $name = trim($name);
    echo 'Put grade 1: ' . PHP_EOL;
    $grade1 = fgets(STDIN);
    $grade1 = trim($grade1);
    echo 'Put grade 2: ' . PHP_EOL;
    $grade2 = fgets(STDIN);
    $grade2 = trim($grade2);
    echo 'Put grade 3: ' . PHP_EOL;
    $grade3 = fgets(STDIN);
    $grade3 = trim($grade3);
    echo 'Put grade 4: ' . PHP_EOL;
    $grade4 = fgets(STDIN);
    $grade4 = trim($grade4);
    echo 'Put grade 5: ' . PHP_EOL;
    $grade5 = fgets(STDIN);
    $grade5 = trim($grade5);
    $studentsGrades[$name] = [$grade1, $grade2, $grade3, $grade4, $grade5];
}
echo showAverages($studentsGrades);
?>