<?php

function concatenateString($string1, $string2)
{
    return $string1 . $string2;
}


$string1 = "Dhruv ,";
$string2 = "Ghodadra";

$combinedString = concatenateString($string1, $string2);
echo "The combined string is: " . $combinedString;