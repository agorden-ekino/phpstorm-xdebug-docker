<?php

namespace App\Calculator;

use App\DiceRoller\DiceRoller;

class AdditionCalculator
{
    public function addTwo(int $number): int
    {
        $coconut = new DiceRoller();
        $number = $coconut->rollTheDice($number);
        return $number === 2 ? $number + 2 : $number;
    }
}
