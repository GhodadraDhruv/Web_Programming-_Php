<?php
$number = 18781;
$numberStr = (string)$number;
$reversedStr = strrev($numberStr);
if ($numberStr === $reversedStr) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>