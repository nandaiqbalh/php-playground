<?php

$first = [
    "fisrt_name" => "Nanda"
];

$last = [
    "last_name" => "Iqbal Hanafi"
];

var_dump($first + $last);

// JIKA ADA BENTROK
$first = [
    "fisrt_name" => "Nanda"
];

$last = [
    "fisrt_name" => "Bruno",
    "last_name" => "Iqbal Hanafi"
];

var_dump($first + $last);

// Membandingkan
$a = [
    "last_name" => "Iqbal Hanafi",
    "fisrt_name" => "Nanda"

];

$b = [
    "fisrt_name" => "Nanda",
    "last_name" => "Iqbal Hanafi"
];

var_dump($a == $b);
var_dump($a === $b);
