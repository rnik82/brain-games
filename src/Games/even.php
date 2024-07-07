<?php

namespace BrainGames\Even;

use function cli\line;
use function BrainGames\Engine\gameCourse;
use function BrainGames\Cli\greeting;

function isEven($number)
{
    return $number % 2 === 0;
}

function brainEven()
{
    $name = greeting();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber = random_int(1, 99);
        $rightReply = isEven($randomNumber) ? 'yes' : 'no';
        $isWrongReply = gameCourse($rightReply, $randomNumber);
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
