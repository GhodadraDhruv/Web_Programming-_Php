<?php

function celsiusFahrenheit($celsius)
{
    return ($celsius * 9 / 5) + 32;
}

$celsius = 18; 

$fahrenheit = celsiusFahrenheit($celsius);
echo $celsius . " Degrees Celsius And " . $fahrenheit . " Degrees Fahrenheit.";