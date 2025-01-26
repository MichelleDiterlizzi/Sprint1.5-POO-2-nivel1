
<?php
    require_once('Animal.php');


    $name1 = readline ("Introduzca el nombre del animal: ");
    $cat1 = new Gato($name1);
    echo $cat1 -> __toString();
    echo PHP_EOL;
    

    $name2 = readline ("Introduzca el nombre del animal: ");
    $dog1 = new Perro($name2);
    echo $dog1 -> __toString();
    echo PHP_EOL;
?>