<?php

interface HelloWorld
{
    function SayHello(): void;
}

$helloWorld = new class("Nanda") implements HelloWorld
{

    public string $name;

    // constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function SayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->SayHello();
