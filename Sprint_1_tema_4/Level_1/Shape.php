<?php
declare(strict_types = 1);
//Exercise 2
class Shape {
    private float $height;
    private float $width;
    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }
    public function getHeight() : float {
        return $this->height;
    }    
    public function getWidth() : float {
        return $this->width;
    }
}
?>