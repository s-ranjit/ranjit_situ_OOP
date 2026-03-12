<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Daisy;
/**
 * class LavenderDaisy represents a species of Daisy and it extends the child class Rose and overwrites the changing behaviors
 */
class LavenderDaisy extends Daisy {
    /**
     * gives output with a message saying how this flower blooms
     * 
     * @return void
     */
    public function bloom() {
        echo "<p>It blooms with soft purple petals.</p>";
    }
    /**
     * gives output with a message saying how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It grows well in sunny gardens.</p>";
    }
    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>It has a light and pleasant fragrance,</p>";
    }
}