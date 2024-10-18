<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function create(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }
}
