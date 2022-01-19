<?php
include_once "Stack.php";
//$stack = new Stack();
//$stack->push(1);
//$stack->push(3);
//$stack->push(4);
//$stack->push(5);
//echo $stack->top();
//print_r($stack->stacks);


function reverse()
{
    $stack = new Stack();
    $stack->push(1);
    $stack->push(3);
    $stack->push(4);
    $stack->push(5);
    $count = count($stack->stacks);
    $reverseStack = [];
    for($i = 0; $i <$count; $i++)
    {
        $reverseStack[]= $stack->top();

    }
    return $reverseStack;

}

print_r(reverse());