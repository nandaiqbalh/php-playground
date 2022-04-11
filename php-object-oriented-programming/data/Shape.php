<?php

namespace Data;

class Shape
{

    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{

    // jika pake getCorner langsung, maka akan override dan yang diakses adalah
    // field dari kelas child
    public function getCorner()
    {
        return 4;
    }

    // untuk mendapatkan field yang ada di parent class, kita bisa menggunakan
    // keyword parent
    public function getParentCorner()
    {
        return parent::getCorner();
    }
}
