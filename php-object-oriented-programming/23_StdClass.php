<?php

$array = [
    "firstName" => "Nanda",
    "midleName" => "Iqbal",
    "lastName" => "Hanafi",

];

// konversi dari array ke bentuk object
$object = (object) $array;
// mengecek tipe $object
// var_dump($object);

// pemanggilan dengan cara pemanggilan object
echo $object->firstName . PHP_EOL;
echo $object->midleName . PHP_EOL;
echo $object->lastName . PHP_EOL;

// kembalikan ke bentuk array
$arrayLagi = (array) $object;
var_dump($array);
