<?php

final class Tigger 
{
    private static ?Tigger $tigger = null;
    private static int $counter = 0; //Le pongo static pero en este caso da igual, hay solo una instancia posible

    private function __construct() 
    {
            echo "Building character..." . PHP_EOL;
    }

    private function __clone()
    {

    }

    public static function getInstance(): Tigger
    {
        if (self::$tigger === null) {
            self::$tigger = new Tigger();
        }
        return self::$tigger;
    }

    public function roar() 
    {
            echo "Grrr!" . PHP_EOL;
            self::$counter++;
    }

    public function getCounter()
    {
        return self::$counter;
    }
}

?>