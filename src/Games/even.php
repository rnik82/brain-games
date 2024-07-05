<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameCourse;

function isEven($number)
{
    return $number % 2 === 0;
}

function brainEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber = random_int(1, 99);
        $rightReply = isEven($randomNumber) ? 'yes' : 'no';
        $isWrongReply = gameCourse([$rightReply, $randomNumber]);
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
