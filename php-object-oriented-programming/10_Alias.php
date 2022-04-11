<?php
require_once "../php-playground/php-object-oriented-programming/data/Conflict.php";
require_once "../php-playground/php-object-oriented-programming/data/Helper.php";

use Data\One\Conflict as Conflict1;
use function Helper\helpMe as help;
use const Helper\HELPER as HELP;

// nama pemanggilan disesuaikan dengan nama alias
$conflict1 = new Conflict1();
help();
HELP;
