<?php 

class Ball {
    public $color;

    public $circumference;

    public $material;

    public function __construct($color, $circumference, $material){
        $this->color = $color;
        $this->circumference = $circumference;
        $this->material = $material;
    }

    public function changeColor($color){
        $this->color = $color;
    }

    public function ShowColor(){
        echo "The color of the ball is $this->color";
    }
}