<?php
declare(strict_types = 1);
//Sprint 1, topic 5: POO 2

//Exercise 1
abstract class Animal {
    private $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    abstract function makeSound();
}
?>