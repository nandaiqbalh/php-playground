<?php
require_once "../php-playground/php-object-oriented-programming/data/Person.php";

// constant yang kita pelajari pada materi dasar
define("APPLICATION", "Nonton Movie");

// constant keyword (ada sejak PHP 7.4)
const VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo VERSION . PHP_EOL;

echo PERSON::AUTHOR . PHP_EOL;
