<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Lily;
/**
 * class TigerLily represents a species of Lily and it extends the child class Rose and overwrites the changing behaviors
 */
class TigerLily extends Lily {
    /**
     * gives output with a message saying how this flower blooms
     * 
     * @return void
     */
   public function bloom() {
        echo "<p>It blooms in the summer with bright orange petals.</p>";
    }
    /**
     * gives output with a message saying how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It grows in warm, sunny places.</p>";
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