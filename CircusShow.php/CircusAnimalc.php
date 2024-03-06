<?php

/* Para que se aplique el principio separamos las responsabilidades */

/* Cada clase tiene una única responsabilidad */

class Animal {
    public $name;
    public $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }
}

class AnimalPrinter {
    public function printDetails(Animal $animal) {
        echo "Nombre: {$animal->name}, Sonido: {$animal->sound}\n";
    }
}

$animal = new Animal("León", "Rugido");
$animalPrinter = new AnimalPrinter();
$animalPrinter->printDetails($animal);
?>