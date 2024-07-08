<?php

namespace BrainGames\Prime;

use function cli\line;
use function BrainGames\Engine\gameCourse;
use function BrainGames\Cli\greet;

function isPrime(int $number)
{
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0 || $number < 2) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $name = greet();
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $randomNumber = (string)random_int(1, 99);
        $rightReply = isPrime($randomNumber) ? 'yes' : 'no';
        $isWrongReply = gameCourse($rightReply, $randomNumber);
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
