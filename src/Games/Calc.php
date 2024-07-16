<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\play;

use const BrainGames\Engine\ROUNDS;

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
    $roundsCount = ROUNDS;
    for ($i = 1; $i <= $roundsCount; $i++) {
        $operator = $operators[array_rand($operators)];
        $randomNumber1 = random_int(1, 25);
        $randomNumber2 = random_int(1, 10);
        $expression = "{$randomNumber1} {$operator} {$randomNumber2}";
        $answer = (string)calc($randomNumber1, $randomNumber2, $operator);
        $data[] = [$expression, $answer];
    }
    play($question, $data);
}
