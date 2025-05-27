<?php
require_once 'Shape1.php';

class Rectangle extends Shape1 
{
    public function calculateArea(): float 
    {
        $area = $this->height * $this->width;
        return $area;
    }
}
?>