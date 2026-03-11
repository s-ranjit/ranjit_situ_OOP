<?php

namespace MyProject\Types;

use MyProject\Flower;

class Lily extends Flower {

    public function fragrance() {
        echo "<p>It gives sweet fragrance.</p>";
    }

    public function grow() {
        echo "<p>It is growing taller every day.</p>";
    }
}