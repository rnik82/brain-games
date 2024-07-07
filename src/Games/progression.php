<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameCourse;

function getProgression($start, $step)
{
    $progression = [];
    for($i = 0, $j = $start; $i < 10; $i++, $j += $step) {
        $progression[] = $j;
    }
    return $progression;
}


function brainProgression()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $step = random_int(1, 10);
        $start = random_int(1, 30);
        $progression = getProgression($start, $step);
        $randomIndex = array_rand($progression);
        [$rightReply] = array_splice($progression, $randomIndex, 1, '..');
        $isWrongReply = gameCourse((string)$rightReply, implode(' ', $progression));
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
