<?php

namespace NandaIqbalH\PhpComposerHello;

class Customer{

    public function __construct(string $name){

    }

    public function sayHello(string $name){
        echo "Hello, $name, My name is $this->name";
    }
}