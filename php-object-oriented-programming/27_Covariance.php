<?php

use Data\AnimalFood;

require_once "../php-playground/php-object-oriented-programming/data/Animal.php";
require_once "../php-playground/php-object-oriented-programming/data/AnimalShelter.php";
require_once "../php-playground/php-object-oriented-programming/data/Food.php";


$catShelter = new Data\CatShelter();
// balikannya sudah berupa Cat (kasus nyata: tempat adopsi kucing ya keluarnya kucing 
// doang, bukan keluarannya semua Animal)
$cat = $catShelter->adopt("Nana");
$cat->eat(new Data\AnimalFood);

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Nina");
// implementasi dog makan bukan hanya animal food
$dog->eat(new Data\Food);
