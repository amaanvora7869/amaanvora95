<?php
$number = 12321;

$str = (string)$number;


$reversedStr = strrev($str);

if ($str === $reversedStr) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>
