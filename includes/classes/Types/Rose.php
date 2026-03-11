<?php

namespace MyProject\Types;

use MyProject\Flower;

class Rose extends Flower {
    public function fragrance() {
        echo "<p>It smells amazing.</p>";
    }

    public function grow() {
        echo "<p>It is growing beautifully.</p>";
    }
}