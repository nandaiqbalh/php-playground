<?php

require_once "../php-playground/php-object-oriented-programming/data/Person.php";

$person1 = new Person();

$person1->name = "Nanda";
$person1->address = "Daerah Istimewa Yogyakarta";
$person1->country = "Indonesia";

// akses function
$person1->sayHello("Nanda Iqbal Hanafi");
