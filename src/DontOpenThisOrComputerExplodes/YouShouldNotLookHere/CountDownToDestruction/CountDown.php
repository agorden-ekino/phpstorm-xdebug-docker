<?php

namespace App\DontOpenThisOrComputerExplodes\YouShouldNotLookHere\CountDownToDestruction;

class CountDown {
    public function doDangerousStuff(array $detonator): string {
        if (in_array(2, $detonator)) {
            return '<iframe width="560" height="315" src="https://www.youtube.com/embed/DJS1rFQBhyU?si=sW3tbz2z3LDhj-R_?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        } else {
            return '<iframe width="560" height="315" src="https://www.youtube.com/embed/SIaFtAKnqBU?si=JbOWu36aVyp4DI1c?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        }
    }
}
