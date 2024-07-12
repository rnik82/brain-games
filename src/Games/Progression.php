<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\play;

function getProgression(int $start, int $step)
{
    $progression = [];
    for ($i = 0, $j = $start; $i < 10; $i++, $j += $step) {
        $progression[] = $j;
    }
    return $progression;
}


function run()
{
    $question = 'What number is missing in the progression?';
    $data = [];
    $roundsCount = 3;
    for ($i = 1; $i <= $roundsCount; $i++) {
        $step = random_int(1, 10);
        $start = random_int(1, 30);
        $progression = getProgression($start, $step);
        $randomIndex = random_int(0, 9);
        [$answer] = array_splice($progression, $randomIndex, 1, '..');
        $data[] = [implode(' ', $progression), (string)$answer];
    }
    play($question, $data);
}
