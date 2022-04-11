<?php

require_once "../php-playground/php-object-oriented-programming/data/Person.php";

$person1 = new Person();
$person1->name = "Nanda";

// akses function
$person1->sayHello("Iqbal");

$person1->info();
