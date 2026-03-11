<?php
spl_autoload_register(function ($class) {
    // var_dump($class);

$class = str_replace('MyProject\\', '', $class);
// var_dump($class);
$class = str_replace ("\\", DIRECTORY_SEPARATOR, $class);
// var_dump($class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath);
    // var_dump($filepath);
    require_once $filepath;

    });
    // filepath for trait 
    require_once __DIR__ . '/includes/classes/trait/Watering.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers OOP</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
     <!-- Link to google fonts for "Raleway" Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <h1>Welcome to the World of Flowers</h1>
<div>
        <section class="full-width-grid-con">
            <h2 class="hidden">Main Navigation</h2>
            <header id="main-header" class="full-width-grid-con">
                <div id="logo" class="col-start-1 col-end-2">
                <a href="index.php"> <img src="images/flowers.svg" alt="Logo">
               </a>    </div>
                <input type="checkbox" id="hamburger">
                <label for="hamburger" id="ham-burger">
                    <img src="images/ham-burger-menu.svg" alt="Menu">
                </label>
                <div id="main-nav" class="m-col-start-5 m-col-end-13 l-col-end-12">
                    <nav class="burger-con">
                        <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Usage</a></li>
                            <li><a href="#">Examples</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </section>
    </div>
    <main> 
        <section class="grid-con overview" id="overview">
        <h2 class="col-span-full m-col-start-2 m-col-end-4 l-col-span-full">Overview</h2>
        <p class="col-span-full m-col-start-2 m-col-end-13 l-col-span-full">This project demonstrates Object-Oriented Programming (OOP)
             in PHP by creating a hierarchy of flowers. It includes parent class, a child classes for
              flower types, and grandchild classes for flower species.</p>
        </section>

       <?php
       
        // types of flowers
        $rose = new MyProject\Types\Rose("Rose", "Red", 10);
        $lily = new MyProject\Types\Lily("Lily", "White", 6);
        $daisy = new MyProject\Types\Daisy("Daisy", "Yellow", 7);
        $hibiscus = new MyProject\Types\Hibiscus("Hibiscus", "Pink", 5);
        $orchid = new MyProject\Types\Orchid("Orchid", "Purple", 4);
        $marigold = new MyProject\Types\Marigold("Marigold", "Orange", 18);

        $flowertypes = [$rose, $lily, $daisy, $hibiscus, $orchid, $marigold];

        foreach ($flowertypes as $flower) {
            // var_dump($flower);
            echo "<h3 class='flower-name'>{$flower->name}</h3>";
            $flower->bloom();
            $flower->grow();
            $flower->fragrance();
            $flower->water();
        }
        
        // Species of flowers
        $blackRose = new MyProject\FlowerSpecies\BlackRose("BlackRose", "Black", 15);
        $tigerLily = new MyProject\FlowerSpecies\TigerLily("TigerLily", "Orange", 12);
        $lavenderDaisy = new MyProject\FlowerSpecies\LavenderDaisy("LavenderDaisy", "Lavender", 18);
        $spiderHibiscus = new MyProject\FlowerSpecies\SpiderHibiscus("SpiderHibiscus", "Orange", 6);
        $vanillaOrchid = new MyProject\FlowerSpecies\VanillaOrchid("VanillaOrchid", "White", 9);

        $flowerspecies = [$blackRose, $tigerLily, $lavenderDaisy, $spiderHibiscus, $vanillaOrchid];

        foreach ($flowerspecies as $flower) {
            // var_dump($flower);
            echo "<h3 class='flower-name'>{$flower->name}</h3>";
            $flower->bloom();
            $flower->grow();
            $flower->fragrance();
            $flower->water();
        }
        
        ?>
</main>
</body>
</html>