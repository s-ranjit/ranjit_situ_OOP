<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Rose;
/**
 * class BlackRose represents a species of Rose and it extends the child class Rose and overwrites the changing behaviors
 */
class BlackRose extends Rose {
    /**
     * gives output with a message saying how this flower blooms
     * 
     * @return void
     */
    public function bloom() {
        echo "<p>It blooms with deep black petals.</p>";
    }
    /**
     * gives output with a message saying how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It slowly grows under the moonlight.</p>";
    }
    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>Its fragrance spreads gently in the air</p>";
    }
}