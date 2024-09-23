<?php

$number = 18;

if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
} elseif ($number == 0 || $number == 1) {
    $factorial = 1; 
} else {
    
    $factorial = 1;
    for ($i = 2; $i <= $number; $i++) {
        $factorial *= $i;
    }
}

echo "The factorial of " . $number . " is: " . $factorial;
?>