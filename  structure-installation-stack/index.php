<?php
include_once "stack.php";

$myBooks = new Stack();

$myBooks->push('a');
$myBooks->push('b');
$myBooks->push('c');
$myBooks->push('d');
$myBooks->push('e');
$myBooks->push('f');


echo $myBooks->pop();
echo $myBooks->pop();
echo $myBooks->pop();

echo $myBooks->top();

echo $myBooks->pop();

$myBooks->push('The Armageddon Rag');
echo $myBooks->pop();

echo "<pre>";
var_dump($myBooks);