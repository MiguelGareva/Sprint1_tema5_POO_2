<?php 
declare(strict_types=1);
class Pigeon extends Animal{

    public string $sound = "Grruuu, grruuu";

    public function makeSound(): string {
        return $this->name . "it's a pigeon and makes the sound: " . $this->sound;
    }
}
?>