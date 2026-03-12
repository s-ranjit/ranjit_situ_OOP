<?php

namespace MyProject\Types;

use MyProject\Flower;
/**
 * class Marigold extends the parent class flower and overwrites the changing behaviors
 */
class Marigold extends Flower {
    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
     public function fragrance() {
        echo "<p>It smells kinda strong.</p>";
    }
    /** 
     * gives output with a message showing how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It is growing fast in the sun.</p>";
    }
}