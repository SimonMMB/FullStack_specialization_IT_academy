<?php
require_once 'Shape2.php';
require_once 'Shape3.php';

class Triangle extends Shape2 implements Shape3 
{
    public function calculateArea() : float 
    {
        $area = parent::$height * parent::$width / 2;
        return $area;
    }
}
?>