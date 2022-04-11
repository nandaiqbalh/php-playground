<?php

require_once "../php-playground/php-object-oriented-programming/data/Car.php";

use Data\Avanza;

$car = new Avanza();
$car->drive();
echo $car->getTire();
