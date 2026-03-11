<?php
namespace MyProject\FlowerSpecies;

use MyProject\Types\Rose;

class BlackRose extends Rose {
    public function bloom() {
        echo "<p>It blooms with deep black petals.</p>";
    }
    public function grow() {
        echo "<p>It slowly grows under the moonlight.</p>";
    }
    public function fragrance() {
        echo "<p>Its fragrance spreads gently in the air</p>";
    }
}