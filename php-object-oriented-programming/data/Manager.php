<?php

class Manager
{

    // membuat properties harus diawali keyword var
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hello, $name, my name is Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hello, $name, my name is Vice President {$this->name}" . PHP_EOL;
    }
}
