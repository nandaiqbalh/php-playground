<?php

function validate(string $name){

  if (trim($name) == "") {
    throw new \Exception("Invalid name");
  }
}

try {
  validate("    ");
} catch (\Exception) {

  echo "Invalid name" . PHP_EOL;

}

 ?>
