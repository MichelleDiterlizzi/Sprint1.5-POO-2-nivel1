<?php

abstract class Animal {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

}

class Gato extends Animal{

    public function makeSound(){
        $sound = "Miaao!";
        echo $sound;
    }

}

class Perro extends Animal{

    public function makeSound(){
        $sound = "Woof woof!";
        echo $sound;
    }
}

?>