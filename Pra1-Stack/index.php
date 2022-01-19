<?php
include_once "Stack.php";

$stack = new Stack(5);
$stack->push(1);
$stack->push(3);
$stack->push(5);
$stack->push(7);
$stack->push(9);
$stack->push(100);

//echo "<pre>";
//print_r($stack->getStack()) ;
//echo $stack->top();
//print_r($stack->pop());