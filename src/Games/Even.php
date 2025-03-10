<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function run()
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $data = [];
    $roundsCount = ROUNDS;
    for ($i = 1; $i <= $roundsCount; $i++) {
        $randomNumber = random_int(1, 100);
        $answer = isEven($randomNumber) ? 'yes' : 'no';
        $data[] = [(string)$randomNumber, $answer];
    }
    play($question, $data);
}
