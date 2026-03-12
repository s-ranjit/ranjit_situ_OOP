<?php
namespace MyProject;

/**
 * Trait watering allows every flower to water. every class using trait can use method called water() to get the output
 */
trait Watering {
    /**
     * gives output with a message saying the flower is thirsty
     * 
     * @return void
     */
    public function water() {
        echo "<p> {$this->name} is thirsty, sprinkle some water.</p>";
    }

}