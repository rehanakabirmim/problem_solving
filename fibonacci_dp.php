<!-- Write a function to find the nth Fibonacci number using Dynamic Programming. -->
 <!-- (Tabulation) -->
<?php

function fib($n) {
    if ($n <= 1) return $n;

    $dp = [0, 1];

    for ($i = 2; $i <= $n; $i++) {
        $dp[$i] = $dp[$i-1] + $dp[$i-2];
    }

    return $dp[$n];
}

// Test
echo fib(5); // Output: 5