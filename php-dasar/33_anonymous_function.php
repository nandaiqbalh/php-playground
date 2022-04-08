<?php

// $sayHello = function (string $name) {
//     echo "Hello $name" . PHP_EOL;
// };

// $sayHello("Nanda");

// // sebagai parameter
// function sayGoodBye(string $name, $filter)
// {
//     $finalName = $filter($name);

//     echo "GoodBye {$finalName} " . PHP_EOL;
// }

// sayGoodBye("Nanda", function (string $name) {
//     return strtoupper($name);
// });


// mengakses variabel di luar closure
$firstName = "Nanda";
$lastName = "Iqbal Hanafi";

$sayHelloNanda = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloNanda();
