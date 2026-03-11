<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Hibiscus;

class SpiderHibiscus extends Hibiscus {
    public function bloom() {
        echo "<p>It blooms with long, thin petals that look like spider legs.</p>";
    }
    public function grow() {
        echo "<p>It grows well in warm climates.</p>";
    }
    public function fragrance() {
        echo "<p>It has a light and pleasant fragrance.</p>";
    }
}