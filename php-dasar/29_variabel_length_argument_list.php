
<?php

function sumAll(...$values)
{
    $total = 0;

    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

// pemanggilan dengan integer values
sumAll(1, 2, 3, 4, 5);

// pemanggilan dengan array yang sudah dibuat
$arrayValue = [1, 2, 3, 4, 5];
sumAll(...$arrayValue);

?>
