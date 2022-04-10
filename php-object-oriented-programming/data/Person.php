<?php

class Person
{
    var string $name;

    // address ini boleh null
    var ?string $address = null;

    // default value
    var string $country = "Indonesia";

    // function
    function sayHello(string $name)
    {
        echo "Hello, $name" . PHP_EOL;
    }
}
