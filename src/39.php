<?php
// Define a function to calculate the area of a rectangle
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

// Calculate the area of a square with side length 5
$areaOfSquare = calculateRectangleArea(5, 5);
echo "The area of the square is: " . $areaOfSquare;
?>
