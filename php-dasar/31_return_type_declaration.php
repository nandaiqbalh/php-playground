<?php


// ini berarti fungsi ini akan mengembalikan nilai integer
function jumlah(int $a, int $b): int
{
    return $a + $b;
}

var_dump(jumlah(5, 5));
