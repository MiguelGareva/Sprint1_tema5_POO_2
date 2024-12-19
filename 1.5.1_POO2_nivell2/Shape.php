<?php
declare(strict_types=1);

abstract class Shape {
    public float $base;
    public float $altura;

    public function __construct(float $base, float $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    public abstract function calcularArea();
}

?>