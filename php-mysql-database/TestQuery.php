<?php

require_once "../php-playground/php-mysql-database/GetConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";
$result = $connection->query($sql);

foreach ($result as $row) {
    var_dump($row);
}

$connection = null;
