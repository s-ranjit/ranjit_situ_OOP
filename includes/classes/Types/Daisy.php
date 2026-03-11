<?php

namespace MyProject\Types;

use MyProject\Flower;

class Daisy extends Flower {

     public function fragrance() {
        echo "<p>It smells so good.</p>";
    }

    public function grow() {
        echo "<p>It is growing nicely in the garden.</p>";
    }
   


}