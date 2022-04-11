<?php

require_once "../php-playground/php-object-oriented-programming/data/Manager.php";

$manager = new Manager();
$manager->name = "Nanda";
$manager->sayHello("Bruno");

$vicepresd = new VicePresident();
$vicepresd->name = "Iqbal";
$vicepresd->sayHello("David");
