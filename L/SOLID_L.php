<!-- Liskov Substitution Principle (LSP): This principle tells us that derived classes 
should be able to substitute their base classes without altering the correct behavior 
of the program. -->

<?php

// Interface for circus artists
interface CircusArtist {
    public function perform();
    public function getPerformanceDuration();
}

// Base class for all circus artists
abstract class ArtistBase implements CircusArtist {
    protected $performanceDuration;

    public function getPerformanceDuration() {
        return $this->performanceDuration;
    }
}

// Class for jugglers
class Juggler extends ArtistBase {
    public function __construct($performanceDuration) {
        $this->performanceDuration = $performanceDuration;
    }

    public function perform() {
        echo "The juggler is juggling for {$this->performanceDuration} minutes" . "<br>";
    }
}

// Class for tightrope walkers
class TightropeWalker extends ArtistBase {
    public function __construct($performanceDuration) {
        $this->performanceDuration = $performanceDuration;
    }

    public function perform() {
        echo "The tightrope walker is performing their balancing act for {$this->performanceDuration} minutes" . "<br>";
    }
}

// Class for clowns
class Clown extends ArtistBase {
    public function __construct($performanceDuration) {
        $this->performanceDuration = $performanceDuration;
    }

    public function perform() {
        echo "The clown is making the audience laugh for {$this->performanceDuration} minutes" . "<br>";
    }
}

// Function to calculate the total duration of performances
function calculateTotalPerformanceDuration($artists) {
    $totalDuration = 0;
    foreach ($artists as $artist) {
        $totalDuration += $artist->getPerformanceDuration();
    }
    return $totalDuration;
}

// Using the code
$juggler = new Juggler(10);
$tightropeWalker = new TightropeWalker(15);
$clown = new Clown(20);

$artists = [$juggler, $tightropeWalker, $clown];

foreach ($artists as $artist) {
    $artist->perform();
}

$totalDuration = calculateTotalPerformanceDuration($artists);
echo "The total duration of performances is: {$totalDuration} minutes" . "<br>";



// A clearer example to understand the Liskov Substitution Principle (LSP):

// Let's imagine you have a base class called CircusArtist which has a method
// perform() that is expected to be implemented by all circus artists. Additionally,
// you have a derived class called Clown which inherits from CircusArtist and adds
// an additional method called doTricks().

// interface CircusArtist {
//     public function perform();
// }

// class Clown implements CircusArtist {
//     public function perform() {
//         echo "The clown is making the audience laugh.\n";
//     }

//     public function doTricks() {
//         echo "The clown is performing funny tricks.\n";
//     }
// }

// Now, let's suppose you have a function in your main code
// that expects an object of the CircusArtist class and only calls the perform() method:

// function presentArtist(CircusArtist $artist) {
//     $artist->perform();
// }

// The Liskov Substitution Principle (LSP) tells us that we should be able
// to pass an object of the derived class Clown to this method without changing
// the expected behavior. However, if we try to do this in the previous example:

// $clown = new Clown();
// presentArtist($clown); // Error: Fatal error: Uncaught Error: Call to undefined method Clown::perform()

// We would get an error because the Clown class has not implemented the perform()
// method, which is expected in all classes implementing the CircusArtist interface.
// This violates the Liskov Substitution Principle because the derived class Clown
// is not fully substitutable for the base class CircusArtist in all situations.

// To correct this and follow the LSP, we could make the Clown class implement
// the perform() method:

// class Clown implements CircusArtist {
//     public function perform() {
//         echo "The clown is making the audience laugh.\n";
//     }

//     public function doTricks() {
//         echo "The clown is performing funny tricks.\n";
//     }
// }

// This way, the Clown class is now fully substitutable for the base class
// CircusArtist and the code expecting an object of the CircusArtist class
// will still work correctly even when passed an object of the Clown class.
// This complies with the Liskov Substitution Principle and ensures that
// the code is more flexible and maintainable.

?>
