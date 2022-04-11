<?php

class Zero
{

    private array $properties = [];

    public function __get($name)
    {
        echo "Access property $name" . PHP_EOL;
        return "CONTOH";
    }

    public function __set($name, $value)
    {
        echo "Set property $name with value $value" . PHP_EOL;
    }
}

$zero = new Zero();

// set 
$zero->firstName = "Nanda";
