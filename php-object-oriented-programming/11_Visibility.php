<?php
require_once "../php-playground/php-object-oriented-programming/data/Product.php";

$apel = new Product("Apel", 10000);

// pengaksesan akan error jika langsung akses ke properti private di class product
// kita harus akses lewat function public
echo "Nama: {$apel->getName()} ";
