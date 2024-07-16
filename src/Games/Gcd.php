<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

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

function run()
{
    $question = 'Find the greatest common divisor of given numbers.';
    $data = [];
    $roundsCount = ROUNDS;
    for ($i = 1; $i <= $roundsCount; $i++) {
        $randomNumber1 = random_int(1, 99);
        $randomNumber2 = random_int(1, 99);
        $expression = "{$randomNumber1} {$randomNumber2}";
        $answer = (string)getGcd($randomNumber1, $randomNumber2);
        $data[] = [$expression, $answer];
    }
    play($question, $data);
}
