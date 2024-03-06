<?php
echo "<h1>Dependency Inversion Principle (DIP):</h1>";
echo "<h4>High-level modules should not depend on low-level modules, but rather on abstractions.</h4><br>";

// Definición de la interfaz Performable
interface Performable {
    public function perform();
}

// Clase PerformanceCoordinator que coordina las ejecuciones de actuaciones
class PerformanceCoordinator {
    private $performables = [];

    // Método para agregar una actuación al coordinador
    public function addPerformable(Performable $performable) {
        $this->performables[] = $performable;
        echo "<p>Added a performable to the coordinator.</p>";
    }

    // Método para ejecutar todas las actuaciones agregadas
    public function executePerformances() {
        echo "<p>Executing performances:</p>";
        foreach ($this->performables as $performable) {
            $performable->perform();
        }
    }
}

// Instancia de PerformanceCoordinator
$coordinator = new PerformanceCoordinator();

// Agregar actuaciones al coordinador
$coordinator->addPerformable(new JugglingAct());
$coordinator->addPerformable(new TrapezeAct());

// Ejecutar las actuaciones
$coordinator->executePerformances();

// Definición de la clase JugglingAct que implementa Performable
class JugglingAct implements Performable {
    public function perform() {
        echo "<p>Performing the juggling act</p>";
    }
}

// Definición de la clase TrapezeAct que implementa Performable
class TrapezeAct implements Performable {
    public function perform() {
        echo "<p>Performing the trapeze act</p>";
    }
}

?>