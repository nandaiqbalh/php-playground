<?php

trait A
{

    function doA()
    {
        echo "A di A" . PHP_EOL;
    }

    function doB()
    {
        echo "B di A" . PHP_EOL;
    }
}

trait B
{
    function doA()
    {
        echo "A di B" . PHP_EOL;
    }

    function doB()
    {
        echo "B di B" . PHP_EOL;
    }
}

class Sample
{
    use A, B {
        // gunakan A daripada B
        A::doA insteadof B;
        // gunakan B dari pada A
        B::doB insteadof A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();
