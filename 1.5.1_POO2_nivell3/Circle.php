<?php 
declare(strict_types=1);
require_once "Shape.php";

class Circle extends Shape{

    public float $radio;
    const PI = 3.1416;

    public function __construct(float $radio){
        $this->radio = $radio;
    }

    public function calcularArea(): float{
        $area = self::PI * pow($this->radio,2);
        return $area;
    }
    
        
}
?>