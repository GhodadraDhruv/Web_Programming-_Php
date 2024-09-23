<?php

function calculate($length, $width)
{
    return $length * $width;
}


$length = 18; 
$width = 18;   

$area = calculate($length, $width);
echo "The area of the rectangle is: " . $area;