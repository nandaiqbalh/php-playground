<?php

class Product
{
    // properties private
    private string $name;
    private int $price;

    // constructor
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // public function
    public function getName(): string
    {
        return $this->name;
    }
}
