<?php
spl_autoload_register(function ($class) {
    var_dump($class);

$class = str_replace('MyProject\\', '', $class);
var_dump($class);
$class = str_replace ("\\", DIRECTORY_SEPARATOR, $class);
var_dump($class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath);
    var_dump($filepath);
    require_once $filepath;

    });
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers OOP</title>
</head>
<body>
    <h1>Welcome to the World of Flowers</h1>

      <?php
   

    $rose = new MyProject\rose();
    var_dump($rose);   
    
    $bird = new MyProject\lily();
    var_dump($lily); 
    ?>

</body>
</html>