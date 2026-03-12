<?php

namespace MyProject\Types;

use MyProject\Flower;
/**
 * class Orchid extends the parent class flower and overwrites the changing behaviors
 */
class Orchid extends Flower {
    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
    public function fragrance() {
        echo "<p>It smells really soft and sweet.</p>";
    }

    /** 
     * gives output with a message showing how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It is growing slowly but looking fancy.</p>";
    }
}