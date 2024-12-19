<?php 

declare(strict_types=1);

class Rectangle extends Shape{
    
    public function calcularArea(): float{
        return $this->base * $this->altura;
    }
}

?>