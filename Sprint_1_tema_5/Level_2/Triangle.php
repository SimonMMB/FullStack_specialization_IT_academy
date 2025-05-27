<?php
require_once 'Shape1.php';

class Triangle extends Shape1 
{
    public function calculateArea(): float 
    {
        $area = $this->height * $this->width / 2;
        return $area;
    }
}
?>