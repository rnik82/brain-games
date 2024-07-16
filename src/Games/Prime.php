<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];
    $roundsCount = ROUNDS;
    for ($i = 1; $i <= $roundsCount; $i++) {
        $randomNumber = random_int(1, 99);
        $answer = isPrime($randomNumber) ? 'yes' : 'no';
        $data[] = [(string)$randomNumber, $answer];
    }
    play($question, $data);
}
