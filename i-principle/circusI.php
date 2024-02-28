<?php
// Interfaz para artistas malabaristas
interface Juggler {
    public function juggle();
}

// Interfaz para equilibristas
interface TightropeWalker {
    public function balance();
}

// Interfaz para artistas payasos
interface Clown {
    public function makePeopleLaugh();
}

// Implementación de un malabarista
class ProfessionalJuggler implements Juggler {
    public function juggle() {
        return "The juggler is juggling.";
    }
}

// Implementación de un equilibrista
class ProfessionalTightropeWalker implements TightropeWalker {
    public function balance() {
        return "The tightrope walker is balancing on the tightrope.";
    }
}

// Implementación de un payaso
class ProfessionalClown implements Clown {
    public function makePeopleLaugh() {
        return "The clown is making the audience laugh.";
    }
}

// Cliente que interactúa con los artistas
class Client {
    public function interactWithJuggler(Juggler $juggler) {
        return $juggler->juggle();
    }

    public function interactWithTightropeWalker(TightropeWalker $tightropeWalker) {
        return $tightropeWalker->balance();
    }

    public function interactWithClown(Clown $clown) {
        return $clown->makePeopleLaugh();
    }
}

// Uso del cliente con los diferentes tipos de artistas
$client = new Client();
$juggler = new ProfessionalJuggler();
$tightropeWalker = new ProfessionalTightropeWalker();
$clown = new ProfessionalClown();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circus</title>
</head>
<body>
    <h1>Welcome to the Circus!</h1>
    <h2>Performances:</h2>
    <p><?php echo $client->interactWithJuggler($juggler); ?></p>
    <p><?php echo $client->interactWithTightropeWalker($tightropeWalker); ?></p>
    <p><?php echo $client->interactWithClown($clown); ?></p>
</body>
</html>

