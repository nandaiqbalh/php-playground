<?php

function getConnection(): PDO{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port; dbname=$database", $username, $password);
}

$connection = getConnection();

// multiline string
$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ("nandaiqbalh", "Nanda Iqbal Hanafi", "nanda@test.com");

SQL;

$connection->exec($sql);

echo "Sukses eksekusi " . PHP_EOL;

$connection = null;
