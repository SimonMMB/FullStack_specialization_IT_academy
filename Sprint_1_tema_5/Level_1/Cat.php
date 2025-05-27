<?php
declare(strict_types = 1);
//Sprint 1, topic 5: POO 2

//Exercise 1
require_once 'Animal.php';
class Cat extends Animal {
    public function makeSound() : string {
        return "¡Guau guau! \n";
    }
}
$cat1 = new Cat("Pompón");
echo $cat1->getName() . " dice " . $cat1->makeSound();
?>