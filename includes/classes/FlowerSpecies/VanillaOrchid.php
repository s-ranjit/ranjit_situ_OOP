<?php
namespace MyProject\FlowerSpecies;

use MyProject\Orchid;

class VanillaOrchid extends Orchid {
    public function bloom() {
        echo "<p>It blooms with greenish-white flowers.</p>";
    }
    public function grow() {
        echo "<p>It grows in warm, tropical places.</p>";
    }
    public function fragrance() {
        echo "<p>It has a sweet and pleasant fragrance.</p>";
    }
}