<?php
abstract class Shape1 
{
    protected float $height;
    protected float $width;
    
    public function __construct(float $height, float $width) 
    {
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function calculateArea(): float;
}
?>