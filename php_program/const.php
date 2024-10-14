<?php
// Function to calculate the area of a circle
function calculateCircleArea($radius) {
    $pi = 3.14159265359; // Approximation of Pi
    $area = $pi * pow($radius, 2);
    return $area;
}

// Example usage
$radius = 5; // Example radius
$area = calculateCircleArea($radius);

echo "The area of a circle with radius $radius is: " . $area;
?>
