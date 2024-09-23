<?php

function isEvenOdd($number)
{
    return ($number % 2 === 0) ? 'even' : 'odd';
}


$number = 18; 

$result = isEvenOdd($number);
echo "The number " . $number . " is " . $result . ".";