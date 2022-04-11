<?php

require_once "../php-playground/php-object-oriented-programming/data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->Hello("Nanda");
$person->GoodBye(null);

// implementasi 
$person->name = "Nanda";
$person->run();
