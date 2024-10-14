<?php
$number = 12351;

$str = (string)$number;


$reversedStr = strrev($str);

if ($str === $reversedStr) {
    echo "$number is a palindrome.\n";
} else {
    echo "$number is not a palindrome.\n";
}
?>