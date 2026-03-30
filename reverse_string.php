<?php
// Program: Reverse a String
// Input: "HelloWorld"
// Output: "dlroWolleH"

function reverseString($str) {
    $reversed = ""; // empty string to store reversed
    // loop from last character to first
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; // append current character
    }
    return $reversed;
}

// Test the function
$input = "HelloWorld";
$output = reverseString($input);

echo "Original String: $input\n";
echo "Reversed String: $output\n";


