<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameCourse;

function getGcd($num1, $num2)
{
    while ($num1 > 0 && $num2 > 0) {
        if ($num1 > $num2) {
            $num1 = $num1 % $num2;
        } else {
            $num2 = $num2 % $num1;
        }
    }
    return $num1 === 0 ? $num2 : $num1;
}

function brainGcd()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber1 = random_int(1, 99);
        $randomNumber2 = random_int(1, 99);
        $rightReply = getGcd($randomNumber1, $randomNumber2);
        $isWrongReply = gameCourse($rightReply, $randomNumber1, $randomNumber2);
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
