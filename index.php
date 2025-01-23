
<?php
    require_once('Animal.php');

    $cat1 = new Gato("Pepe");
    print_r($cat1);
    echo PHP_EOL."<br>";
    echo $cat1 -> makeSound();
    echo  PHP_EOL."<br>";
    
    $dog1 = new Perro("Julio");
    print_r($dog1);
    echo PHP_EOL."<br>";
    echo $dog1 -> makeSound();

?>