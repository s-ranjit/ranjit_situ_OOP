<?php
namespace MyProject;

trait Watering {

    public function water() {
        echo "<p> {$this->name} is thirsty, give her some water</p>";
    }

}