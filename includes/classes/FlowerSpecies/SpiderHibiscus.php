<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Hibiscus;
/**
 * class SpiderHibiscus represents a species of Hibiscus and it extends the child class Rose and overwrites the changing behaviors
 */

class SpiderHibiscus extends Hibiscus {
    /**
     * gives output with a message saying how this flower blooms
     * 
     * @return void
     */
    public function bloom() {
        echo "<p>It blooms with long, thin petals that look like spider legs.</p>";
    }
    /**
     * gives output with a message saying how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It grows well in warm climates.</p>";
    }
    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>It has a light and pleasant fragrance.</p>";
    }
}