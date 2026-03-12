<?php

namespace MyProject\Types;

use MyProject\Flower;
/**
 * class Hibiscus extends the parent class flower and overwrites the changing behaviors
 */
class Hibiscus extends Flower {
     /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>It smells nice and fresh.</p>";
    }

    /** 
     * gives output with a message showing how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It is growing so nicely.</p>";
    }
}