<?php

// // GLOBAL SCOPE
// $name = "Nanda"; // global scipe

// function sayName()
// {

//     echo "Hello {$GLOBALS['name']}";
// }

// sayName();

// // LOCAL SCOPE
// function createName()
// {
//     $name = "Nanda"; // lokal scope
// }

// createName();
// echo $name; // akan error


// STATIC SCOPE
function increment()
{
    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
