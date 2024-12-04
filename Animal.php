<?php

declare(strict_types=1);

abstract class Animal{

    public string $name;

    public function __construct($name){
        $this->name = $name;
    }

    abstract protected function makeSound();
}
?>