<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Nanda", "strtoupper");
sayHello("Nanda", "strtolower");

// memanggil dengan anonymous
sayHello("Nanda", function (string $name): string {
    return strtoupper($name);
});

// memanggil dengan arrow
sayHello("Nanda", fn ($name) => strtolower($name));
