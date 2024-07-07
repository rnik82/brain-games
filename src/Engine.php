<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function gameCourse(...$data)
{
    [$rightReply, $argument1] = $data;
    $argument2 = $data[2] ?? '';
    $operator = $data[3] ?? '';
    line("Question: %s %s %s", $argument1, $operator, $argument2);
    $reply = prompt('Your answer');
    if ($reply !== (string)$rightReply) {
        line("%s is wrong answer ;(. Correct answer was %s.", $reply, $rightReply);
        return true;
    }
    line("Correct!");
}
