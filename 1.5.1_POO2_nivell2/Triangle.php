<?php
declare(strict_types=1);

class Triangle extends Shape{

    public function calcularArea(): float{
        return ($this->base * $this->altura) / 2;
    }
}
?>