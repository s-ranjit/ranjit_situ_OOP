<?php

namespace MyProject\Types;

use MyProject\Flower;

class Orchid extends Flower {
    public function fragrance() {
        echo "<p>It smells really soft and sweet.</p>";
    }

    public function grow() {
        echo "<p>It is growing slowly but looking fancy.</p>";
    }
}