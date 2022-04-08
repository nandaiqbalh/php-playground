<?php

function sumNumber(int $a, int $b)
{

    $hasil = $a + $b;
    echo "Hasil $a + $b = $hasil" . PHP_EOL;
}

sumNumber("100", "100");
sumNumber(100, 100);
// sumNumber([], [];)
