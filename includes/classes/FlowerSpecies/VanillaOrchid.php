<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Orchid;
/**
 * class VanillaOrchid represents a species of Orchid and it extends the child class Rose and overwrites the changing behaviors
 */
class VanillaOrchid extends Orchid {
    /**
     * gives output with a message saying how this flower blooms
     * 
     * @return void
     */
    public function bloom() {
        echo "<p>It blooms with greenish-white flowers.</p>";
    }
    /**
     * gives output with a message saying how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It grows in warm, tropical places.</p>";
    }
    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>It has a sweet and pleasant fragrance.</p>";
    }
}