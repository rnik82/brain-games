<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

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
    $roundCount = 0;
    while ($roundCount < 3) {
        $randomNumber = random_int(1, 99);
        line("Question: , %s!", $randomNumber);
        $reply = prompt('Your answer: ');
        $rightReply = isEven($randomNumber) ? 'yes' : 'no';
        if ($reply !== $rightReply) {
            line("%s is wrong answer ;(. Correct answer was %s.", $reply, $rightReply);
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
        $roundCount++;
    }
    line("Congratulations, %s!", $name);
}
