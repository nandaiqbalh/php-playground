<?php

function sumValue(int $first, int $second)
{

    $sumValue = $first + $second;
    return $sumValue;
}

$result = sumValue(10, 10);
var_dump($result);
