<?php

class Person
{
    var string $name;

    // address ini boleh null
    var ?string $address = null;

    // default value
    var string $country = "Indonesia";

    // function nullable
    function sayHello(?string $name)
    {
        // mengecek apakah namanya null atau tidak
        if (is_null($name)) {
            // this akan mengakses apa yang ada di object saat ini (person1)
            echo "Helo, my name is $this->name" . PHP_EOL;
        } else {
            // this akan mengakses apa yang ada di object saat ini (person1)
            // $name yang awal akan mengakses parameter masukan
            echo "Helo $name, my name is $this->name" . PHP_EOL;
        }
    }
}
