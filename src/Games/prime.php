<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function BrainGames\Engine\gameCourse;
use function BrainGames\Cli\greet;

function isPrime(int $number)
{
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0 || $number < 2) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $dataForGame = [];
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber = random_int(1, 99);
        $answer = isPrime($randomNumber) ? 'yes' : 'no';
        $dataForGame[] = [(string)$randomNumber, $answer];
    }
    gameCourse($question, $dataForGame);
}
