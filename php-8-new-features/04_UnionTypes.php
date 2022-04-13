<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();

// boleh menggunakan apa yang sudah didefinisikan
$example->data = "Nanda";
$example->data = 12;
$example->data = true;
$example->data = [12];

function sampleFunction(string|int $data)
{
    if (is_string($data)) {
        echo "Ini String $data" . PHP_EOL;
    } else if (is_int($data)) {
        echo "Ini integer $data" . PHP_EOL;
    }
}

sampleFunction(12);
