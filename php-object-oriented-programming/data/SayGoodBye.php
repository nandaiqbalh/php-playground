<?php

namespace Data\Traits;

trait SayGoodBye
{

    public function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye, ya!" . PHP_EOL;
        } else {
            echo "Good bye, $name" . PHP_EOL;
        }
    }
}

trait SayHello
{

    public string $name;

    public function Hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello, ya!" . PHP_EOL;
        } else {
            echo "Hello, $name" . PHP_EOL;
        }
    }
}

trait HasName
{

    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}

class Person
{
    use SayGoodBye, SayHello, HasName, CanRun;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
