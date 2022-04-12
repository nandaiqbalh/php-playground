<?php

// kelas bawaan dari PHP
$date = new DateTime();
$date->setTimezone(new DateTimeZone("Europe/Berlin"));
echo $date->format("Y-m-d H:i:s") . PHP_EOL;

$date->setDate(2001, 12, 31);
$date->setTime(10, 10, 10);

// // menambah interval
// $date->add(new DateInterval("P1Y"));
// var_dump($date);
