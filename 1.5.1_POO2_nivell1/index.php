<?php 

require_once("Animal.php");
require_once("Pigeon.php");
require_once("Turtle.php");

$pigeon = new Pigeon("Paloma");
echo $pigeon->makeSound();

$tutle = new Tultle("Squirtle");
echo $tutle->makeSound();
?>