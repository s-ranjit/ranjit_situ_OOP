<?php

namespace MyProject\Types;

use MyProject\Flower;

class Marigold extends Flower {
     public function fragrance() {
        echo "<p>It smells kinda strong.</p>";
    }

    public function grow() {
        echo "<p>It is growing fast in the sun.</p>";
    }
}