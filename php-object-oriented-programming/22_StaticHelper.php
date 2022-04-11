<?php

require_once "../php-playground/php-object-oriented-programming/helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// akan error karena static gabisa diakses lewat object
// echo $mathHelper->name;

echo MathHelper::$name . PHP_EOL;

// karena dia properti, jadi bisa aja kalau mau diubah
MathHelper::$name = "Nanda Iqbal Hanafi";
echo MathHelper::$name . PHP_EOL;
