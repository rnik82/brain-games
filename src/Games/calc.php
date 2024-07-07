<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\gameCourse;

function calc($operand1, $operand2, $operator)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        default:
            return null;
    }
}


function brainCalc()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What is the result of the expression?');
    $operators = ['+', '-', '*'];
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $operator = $operators[random_int(0, 2)];
        $randomNumber1 = random_int(1, 25);
        $randomNumber2 = random_int(1, 10);
        $rightReply = calc($randomNumber1, $randomNumber2, $operator);
        $isWrongReply = gameCourse($rightReply, $randomNumber1, $randomNumber2, $operator);
        if ($isWrongReply) {
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
