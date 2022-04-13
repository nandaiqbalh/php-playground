<?php

function sayHello(string $first, string $midle, string $last): void
{
    echo "Hello, $first, $midle, $last" . PHP_EOL;
}


// without named argument
sayHello("Nanda", "Iqbal", "Hanafi");

// with named argument
sayHello(last: "Hanafi", midle: "Iqbal", first: "Nanda");
