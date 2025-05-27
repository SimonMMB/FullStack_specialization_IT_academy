<?php
declare(strict_types = 1);
//Sprint 1, topic 5: POO 2

//Exercise 1
require_once 'Animal.php';
class Dog extends Animal {
    public function makeSound() : string {
        return "¡Guau guau! \n";
    }
}
$dog1 = new Dog("Manchita");
echo $dog1->getName() . " dice " . $dog1->makeSound();
?>