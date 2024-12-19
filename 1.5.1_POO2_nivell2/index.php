<?php 
declare(strict_types=1);

require_once "Rectangle.php"; 
require_once "Triangle.php";

$rectangle1 = new Rectangle(5, 10);
echo $rectangle1->calcularArea() . "<br>";

$triangle1 = new Triangle(8, 4);
echo $triangle1->calcularArea() . "<br>";
?>