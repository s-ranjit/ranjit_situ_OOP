<?php
namespace MyProject;

class Flower {
    public $name;
    public $color;
    public $petals;


    public function __construct(string $name, string $color, int $petals) {
        $this->name = $name;
        $this->color = $color;
        $this->petals = $petals;
    }

     public function bloom() {
        echo "<p>The {$this->name} with {$this->petals} {$this->color} petals is blooming beautifully.</p>";
    }

    public function fragrance() {
        echo "<p>The {$this->name} smells wonderful.</p>";
    }

    public function grow() {
        echo "<p>The {$this->name} is growing gracefully.</p>";
    }
}