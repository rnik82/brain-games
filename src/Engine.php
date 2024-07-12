<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greet;

function play(string $question, array $rounds)
{
    $name = greet();
    line($question);
    foreach ($rounds as [$expression, $answer]) {
        line("Question: %s", $expression);
        $userReply = prompt('Your answer');
        if ($userReply !== $answer) {
            line("%s is wrong answer ;(. Correct answer was %s.", $userReply, $answer);
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}
