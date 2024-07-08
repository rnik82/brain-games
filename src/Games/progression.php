<?php

namespace BrainGames\Progression;

use function cli\line;
use function BrainGames\Engine\gameCourse;
use function BrainGames\Cli\greet;

function getProgression(int $start, int $step)
{
    $progression = [];
    for ($i = 0, $j = $start; $i < 10; $i++, $j += $step) {
        $progression[] = $j;
    }
    return $progression;
}


function brainProgression()
{
    $name = greet();
    line('What number is missing in the progression?');
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $step = random_int(1, 10);
        $start = random_int(1, 30);
        $progression = getProgression($start, $step);
        $randomIndex = random_int(0, 9);
        [$rightReply] = array_splice($progression, $randomIndex, 1, '..');
        $isWrongReply = gameCourse((string)$rightReply, implode(' ', $progression));
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
