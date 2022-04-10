<?php

require_once "../php-playground/php-object-oriented-programming/data/Person.php";

$person1 = new Person();

$person1->name = "Nanda";
$person1->address = "Daerah Istimewa Yogyakarta";
$person1->country = "Indonesia";

echo "Nama      : {$person1->name}" . PHP_EOL;
echo "Address   : {$person1->address}" . PHP_EOL;
echo "Country   : {$person1->country}" . PHP_EOL;
