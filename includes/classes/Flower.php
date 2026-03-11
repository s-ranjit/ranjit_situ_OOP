<?php
namespace MyProject;

class Flower {
    public $name;
    public $color;
    public $petals;

    use Watering; 

    public function __construct(string $name, string $color, int $petals) {
        $this->name = $name;
        $this->color = $color;
        $this->petals = $petals;
    }

     public function bloom() {
        echo "<p> {$this->name} with {$this->petals} {$this->color} petals is blooming beautifully.</p>";
    }

    public function fragrance() {
        echo "<p> {$this->name} smells wonderful.</p>";
    }

    public function grow() {
        echo "<p> {$this->name} is growing gracefully.</p>";
    }
}