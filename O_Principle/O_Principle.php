<?php
echo "<h1>Open/Closed Principle (OCP):</h1>";
echo "<h4>Performances and acts can be easily extended or modified without the need to alter the entire show.</h4><br>";

interface Performable {
    public function perform();
}

class JugglingAct implements Performable {
    public function perform() {
        echo "<h3>Performing the juggling act</h3><br>";
    }
}

class TrapezeAct implements Performable {
    public function perform() {
        echo "<h3>Performing the trapeze act</h3><br>";
    }
}

// Execute the acts
function executeAct(Performable $performable) {
    $performable->perform();
}

// Create instances of acts and execute them
$jugglingAct = new JugglingAct();
$trapezeAct = new TrapezeAct();

executeAct($jugglingAct);
executeAct($trapezeAct);

?>