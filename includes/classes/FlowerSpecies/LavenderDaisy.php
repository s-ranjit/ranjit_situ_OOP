<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Daisy;

class LavenderDaisy extends Daisy {
    public function bloom() {
        echo "<p>It blooms with soft purple petals.</p>";
    }
    public function grow() {
        echo "<p>It grows well in sunny gardens.</p>";
    }
    public function fragrance() {
        echo "<p>It has a light and pleasant fragrance,</p>";
    }
}