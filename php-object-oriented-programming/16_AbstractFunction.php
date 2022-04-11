<?php
require_once "../php-playground/php-object-oriented-programming/data/Animal.php";

use Data\{Animal, Cat};

$cat = new Cat();
$cat->name = "Nana";
$cat->run();

$cat->sayAnimal("Cat");
