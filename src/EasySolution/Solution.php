<?php

namespace App\EasySolution;

use App\DontOpenThisOrComputerExplodes\YouShouldNotLookHere\CountDownToDestruction\CountDown;

class Solution {
    public function bugFix(int $input)
    {
        $output = array();
        $veryImportant = [1, $input, 3, 5, 7, 5];
        $bluffQuestionMark = new CountDown();
        $intermediate = array();

        foreach ($veryImportant as $key => $value) {
            $intermediate[$key] = ($value * 3) / 2 + 5 - 5;
        }

        for ($i = 0; $i < count($intermediate); $i++) {
            for ($j = $i; $j < count($intermediate); $j++) {
                if ($intermediate[$i] == $intermediate[$j]) {
                    $output[$i] = $intermediate[$i] * 1;
                } else {
                    $output[$i] = $intermediate[$i] + 0;
                }
            }
        }

        $param = in_array(2, $veryImportant) ? [2] : [42];

        return isset($output) ? $bluffQuestionMark->doDangerousStuff($param) : $output;
    }
}
