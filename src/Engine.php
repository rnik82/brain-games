<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function gameCourse(array $data)
{
    [$rightReply, $expression] = $data;
    line("Question: %s", $expression);
    $reply = prompt('Your answer');
    if ($reply !== $rightReply) {
        line("%s is wrong answer ;(. Correct answer was %s.", $reply, $rightReply);
        return true;
    }
    line("Correct!");
}
