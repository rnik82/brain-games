<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function BrainGames\Engine\gameCourse;
use function BrainGames\Cli\greet;

function getGcd(int $num1, int $num2)
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
    $question = 'Find the greatest common divisor of given numbers.';
    $dataForGame = [];
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber1 = random_int(1, 99);
        $randomNumber2 = random_int(1, 99);
        $expression = "{$randomNumber1} {$randomNumber2}";
        $answer = (string)getGcd($randomNumber1, $randomNumber2);
        $dataForGame[] = [$expression, $answer];
    }
    gameCourse($question, $dataForGame);
}
