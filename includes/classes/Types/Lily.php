<?php

namespace MyProject\Types;

use MyProject\Flower;

class Lily extends Flower {

    public function fragrance() {
        echo "<p>Lily gives sweet fragrance.</p>";
    }

    public function grow() {
        echo "<p>Lily is growing taller every day.</p>";
    }
}