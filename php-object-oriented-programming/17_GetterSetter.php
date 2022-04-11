<?php

require_once "../php-playground/php-object-oriented-programming/data/Category.php";

// membuat object
$sepakbola = new Category();

// setter
$sepakbola->setName("Sepak Bola");
$sepakbola->setExpensive(true);

// cek validasi
$sepakbola->setName("");

// getter
echo "Category: {$sepakbola->getName()}" . PHP_EOL;
echo "Apakah mahal? {$sepakbola->getExpensive()}" . PHP_EOL;
