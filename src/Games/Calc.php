<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

function calc(int $operand1, int $operand2, string $operator)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
        default:
            throw new \Exception("Unknown operator: '{$operator}'!");
    }
}


function run()
{
    $question = 'What is the result of the expression?';
    $operators = ['+', '-', '*'];
    $data = [];
    for ($roundCount = 0; $roundCount < 3; $roundCount++) {
        $operator = $operators[random_int(0, 2)];
        $randomNumber1 = random_int(1, 25);
        $randomNumber2 = random_int(1, 10);
        $expression = "{$randomNumber1} {$operator} {$randomNumber2}";
        $answer = (string)calc($randomNumber1, $randomNumber2, $operator);
        $data[] = [$expression, $answer];
    }
    play($question, $data);
}
