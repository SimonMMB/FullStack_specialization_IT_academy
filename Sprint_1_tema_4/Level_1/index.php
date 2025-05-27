<?php
declare(strict_types = 1);
//Exercise 1
require_once 'Employee.php';
$employee1 = Employee::initialize("Juan Perez", 1800);
echo $employee1->print();
$employee2 = Employee::initialize("Ana Lopez", 7000);
echo $employee2->print();
//Exercise 2
require_once 'Rectangle.php';
require_once 'Triangle.php';
$newRectangle = new Rectangle(10, 4);
echo "Area rectangle = " . $newRectangle->areaRectangle() . " cm2 \n";
$newTriangle = new Triangle(10, 4);
echo "Area triangle = " . $newTriangle->areaTriangle() . " cm2 \n";
?>