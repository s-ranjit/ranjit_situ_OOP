<?php

namespace MyProject\Types;

use MyProject\Flower;

class Marigold extends Flower {
     public function fragrance() {
        echo "<p>Marigold smells kinda strong.</p>";
    }

    public function grow() {
        echo "<p>Marigold is growing fast in the sun.</p>";
    }
}