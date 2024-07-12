<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

function isPrime(int $number)
{
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0 || $number < 2) {
            return false;
        }
    }
    return true;
}

function run()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber = random_int(1, 99);
        $answer = isPrime($randomNumber) ? 'yes' : 'no';
        $data[] = [(string)$randomNumber, $answer];
    }
    play($question, $data);
}
