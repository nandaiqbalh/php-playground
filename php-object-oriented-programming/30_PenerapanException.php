<?php

require_once "../php-playground/php-object-oriented-programming/helper/Validation.php";
require_once "../php-playground/php-object-oriented-programming/data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "nandaiqbalh";
$loginRequest->password = "qwertyyy";

validationLoginRequest($loginRequest);

echo "Valid" . PHP_EOL;
