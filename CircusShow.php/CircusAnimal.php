<?php

/* --No cumple el principio S: Principio de responsabilidad única-- */

/* clase: animal que almacena información sobre un animal y también se encarga de imprimir detalles por pantalla */
class Animal {
    public $name;
    public $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function printDetails() {
        echo "Nombre: {$this->name}, Sonido: {$this->sound}\n";
    }
}

$animal = new Animal("León", "Rugido");
$animal->printDetails();

?>