<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Lily;

class TigerLily extends Lily {
   public function bloom() {
        echo "<p>It blooms in the summer with bright orange petals.</p>";
    }
    public function grow() {
        echo "<p>It grows in warm, sunny places.</p>";
    }
    public function fragrance() {
        echo "<p>It has a light and pleasant fragrance.</p>";
    }
}