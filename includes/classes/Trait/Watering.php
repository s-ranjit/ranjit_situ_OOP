<?php
namespace MyProject;

trait Watering {

    public function water() {
        echo "<p> {$this->name} is thirsty, sprinkle some water.</p>";
    }

}