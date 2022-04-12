<?php
require_once "../php-playground/php-object-oriented-programming/data/Animal.php";
require_once "../php-playground/php-object-oriented-programming/data/AnimalShelter.php";

$catShelter = new Data\CatShelter();
// balikannya sudah berupa Cat (kasus nyata: tempat adopsi kucing ya keluarnya kucing 
// doang, bukan keluarannya semua Animal)
$cat = $catShelter->adopt("Nana");

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Nina");
