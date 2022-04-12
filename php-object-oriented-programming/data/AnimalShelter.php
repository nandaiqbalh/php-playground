<?php

namespace Data;

require_once "../php-playground/php-object-oriented-programming/data/Animal.php";

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{

    // function ini secara default akan mengembalikan kembalian seperti parent (ANIMAL)
    // kita bisa menjadikannya lebih spesifik menjadi kembalian Cat
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{

    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
