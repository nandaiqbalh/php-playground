<?php

require_once __DIR__. '/vendor/autoload.php';

use NandaIqbalH\Data\People;

$people = new People("Nanda");

echo $people->sayHello("Iqbal") . PHP_EOL;