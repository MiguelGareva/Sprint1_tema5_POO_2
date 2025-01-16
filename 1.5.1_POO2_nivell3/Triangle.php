<?php
declare(strict_types=1);
require_once "Shape.php";


class Triangle extends Shape{
    public float $base;
    public float $altura;

    public function __construct(float $base, float $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea(): float{
        return ($this->base * $this->altura) / 2;
    }
}
?>