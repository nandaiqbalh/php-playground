<?php

namespace Data;

require_once "../php-playground/php-object-oriented-programming/data/Food.php";

abstract class Animal
{

    public string $name;

    abstract public function run(): void;

    // function 
    abstract public function eat(AnimalFood $animalFood): void;

    function sayAnimal($name)
    {
        echo "This is $name" . PHP_EOL;
    }
}

class Cat extends Animal
{

    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    // misalnya untuk cat, dia tetap makan dari animal food
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{

    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    // makanannya jadi parent (Food)
    public function eat(Food $animalFood): void
    {
        echo "Dog makan apa saja ye" . PHP_EOL;
    }
}
