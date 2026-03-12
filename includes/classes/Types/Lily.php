<?php

namespace MyProject\Types;

use MyProject\Flower;
/**
 * class Lily extends the parent class flower and overwrites the changing behaviors
 */
class Lily extends Flower {

    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>It gives sweet fragrance.</p>";
    }

    /** 
     * gives output with a message showing how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It is growing taller every day.</p>";
    }
}