<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $fourth = "Fourth";

    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth
        ]);
    }
}

$data = new Data();
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
