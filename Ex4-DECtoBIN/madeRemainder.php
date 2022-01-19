<?php
include_once "Remainder.php";
function madeRemainder($number){
    $remainders = new Remainder();
    $quotient = $number%2;
    $remainder = $number-$quotient*2;
    if($quotient ==0){
        $remainders [] = $remainder;
    }else{
        while($quotient>0){
            $remainders[] = $remainder;
            $number = $remainder;
            $quotient = $number%2;
        }
    }
    return $remainders;
}
print_r(madeRemainder(10));
