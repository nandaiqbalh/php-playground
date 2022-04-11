<?php

class Person
{

    const AUTHOR = "Nanda Iqbal Hanafi";
    var string $name;
    var ?string $address = null; // address ini boleh null
    var string $country = "Indonesia"; // default value

    // constructor
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // destructor
    public function __destruct()
    {
        echo "Object person {$this->name} is destroyed" . PHP_EOL;
    }

    function info()
    {
        // pemanggilan secara biasa
        echo "Author  : " . Person::AUTHOR . " dengan pemanggilan biasa" . PHP_EOL;

        // pemanggilan dengan self keyword
        echo "Author  : " . self::AUTHOR . " dengan pemanggilan self keyword" . PHP_EOL;
    }



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
