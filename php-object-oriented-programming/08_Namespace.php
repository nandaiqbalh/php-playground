<?php
require_once "../php-playground/php-object-oriented-programming/data/Conflict.php";
require_once "../php-playground/php-object-oriented-programming/data/Helper.php";

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

echo "Ini dari namespace helper" . PHP_EOL;
$constantHelp = Helper\HELPER;
echo "$constantHelp" . PHP_EOL;

Helper\helpMe();
