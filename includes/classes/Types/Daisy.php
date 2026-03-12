<?php

namespace MyProject\Types;


use MyProject\Flower;
/**
 * class Daisy extends the parent class flower and overwrites the changing behaviors
 */
class Daisy extends Flower {

    /**
     * gives output with a message saying how this flower smells
     * 
     * @return void
     */
     public function fragrance() {
        echo "<p>It smells so good.</p>";
    }

    /** 
     * gives output with a message showing how this flower grows
     * 
     * @return void
     */
    public function grow() {
        echo "<p>It is growing nicely in the garden.</p>";
    }
   


}