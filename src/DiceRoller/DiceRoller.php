<?php

namespace App\DiceRoller;

class DiceRoller
{
    public function rollTheDice(int $number): int
    {
        $arr = [3, 2, 4, 10, 1, 9, 12, 11, 6, 5, 8];
        $one = array_rand($arr);
        return in_array($one, [2, 3, 5, 7, 11]) ? $one : $number;
    }
}
