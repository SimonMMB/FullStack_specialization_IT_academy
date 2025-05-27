<?php
require_once 'Shape2.php';

class Circle implements Shape2 
{
    private float $radius;

    public function __construct(float $radius) 
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float 
    {
        $area = M_PI * ($this->radius ** 2);
        return $area;
    }
}
?>