<?php
$stack = new SplStack();

$stack->push('1');
$stack->push('2');
$stack->push('3');
$stack->push('4');
$stack->push('5');
$stack->push('6');

$reverse = [];

$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();
$reverse[] = $stack->pop();

echo "<pre>";
var_dump($reverse);