<?php
require_once "../php-playground/php-object-oriented-programming/data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("Nanda");
var_dump($company);

// perubahan programmer ke bentuk backend
$company->programmer = new BackendProgrammer("Iqbal");
var_dump($company);

// perubahan bentuk programmer ke frontend
$company->programmer = new FrontendProgrammer("Hanafi");
var_dump($company);
