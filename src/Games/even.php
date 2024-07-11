<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function BrainGames\Engine\gameCourse;
use function BrainGames\Cli\greet;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function brainEven()
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $dataForGame = [];
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber = random_int(1, 100);
        $answer = isEven($randomNumber) ? 'yes' : 'no';
        $dataForGame[] = [(string)$randomNumber, $answer];
    }
    gameCourse($question, $dataForGame);
}
