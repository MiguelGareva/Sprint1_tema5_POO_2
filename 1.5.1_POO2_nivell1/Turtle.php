<?php 
declare(strict_types=1);

class Tultle extends Animal{

    public string $sound = "Vamo a calmarno.";

    public function makeSound():string{
        return $this->name . " it's a turtle and makes the sound: " . $this->sound . "<br>";
    }
}
?>