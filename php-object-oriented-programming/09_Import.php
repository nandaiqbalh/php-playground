<?php
require_once "../php-playground/php-object-oriented-programming/data/Conflict.php";
require_once "../php-playground/php-object-oriented-programming/data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\HELPER;

// sudah tidak error karena sudah di import dengan "use"
$conflict1 = new Conflict();
helpMe();
HELPER;
