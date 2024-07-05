<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function gameCourse($data)
{
    [$rightReply, $randomNumber1] = $data;
    $operator = $data[2] ?? '';
    $randomNumber2 = $data[3] ?? '';
    line("Question: %s %s %s", $randomNumber1, $operator, $randomNumber2);
    $reply = prompt('Your answer');
    if ($reply !== (string)$rightReply) {
        line("%s is wrong answer ;(. Correct answer was %s.", $reply, $rightReply);
        return true;
    }
    line("Correct!");
}
