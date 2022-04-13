<?php

class Product
{

    public function __construct(
        public string $id,
        public string $name,
        public int $price = 0,
        public int $quantity = 0
    ) {
    }
}

// menginstansiasi menjadi objek
$product = new Product(id: "1", name: "Baju");
var_dump($product);
