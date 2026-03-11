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
        <p class="col-span-full m-col-start-2 m-col-end-13 l-col-span-full">This project demonstrates Object-Oriented Programming (OOP) in PHP using different flower classes.</p>
        </section>

       <?php
       
        $rose = new MyProject\Rose("Rose", "Red", 10);
        $lily = new MyProject\Lily("Lily", "White", 6);
        $daisy = new MyProject\Daisy("Daisy", "Yellow", 7);
        $hibiscus = new MyProject\Hibiscus("Hibiscus", "Pink", 5);
        $orchid = new MyProject\Orchid("Orchid", "Purple", 4);
        $marigold = new MyProject\Marigold("Marigold", "Orange", 18);

        $childrenflowers = [$rose, $lily, $daisy, $hibiscus, $orchid, $marigold];

        foreach ($childrenflowers as $flower) {
            var_dump($flower);
            echo "<h3 class='flower-name'>{$flower->name}</h3>";
            $flower->bloom();
            $flower->grow();
            $flower->fragrance();
        }
        
        
        ?>
</main>
</body>
</html>