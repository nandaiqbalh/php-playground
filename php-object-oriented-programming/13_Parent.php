<?php

require_once "../php-playground/php-object-oriented-programming/data/Shape.php";

use Data\{Shape, Rectangle};

$shapeParent = new Shape();
echo $shapeParent->getCorner() . PHP_EOL;

$shapeChild = new Rectangle();
echo $shapeChild->getCorner() . PHP_EOL;
echo $shapeChild->getParentCorner() . PHP_EOL;
