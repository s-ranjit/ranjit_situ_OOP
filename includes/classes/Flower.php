<?php
namespace MyProject;

/**
 * This class represents different types of flowers with their own name, color and number of petals
 * It describes each methods like bloom, fragrance and grow.
 * Every flower also uses water using the shared trait
 */


class Flower {
    /**
     * this stores name of each flowers
     * 
     * @var string
     */
    public $name;
     /**
     * this stores colors of flower petals
     * 
     * @var string
     */
    public $color;
    /**
     * this stores the number of petals each flower has
     * 
     * @var int
     */
    public $petals;

    // include watering trait for shared functionality
    use Watering; 


    /**
     * used constructor to create a new flower
     * 
     * @param string $name Name of the flower
     * @param string $color Color of the flower
     * @param int $petals Number of petals
     */
    public function __construct(string $name, string $color, int $petals) {
        $this->name = $name;
        $this->color = $color;
        $this->petals = $petals;
    }

    /**
     * gives output with a message of flower blooming
     */
     public function bloom() {
        echo "<p> {$this->name} with {$this->petals} {$this->color} petals is blooming beautifully.</p>";
    }
    /**
     * gives output with a message of flower's fragrance
     */
    public function fragrance() {
        echo "<p> {$this->name} smells wonderful.</p>";
    }

    /**
     * gives output with a message of flower growing
     */
    public function grow() {
        echo "<p> {$this->name} is growing gracefully.</p>";
    }
}