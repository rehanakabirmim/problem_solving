<!-- Given two strings s1 and s2,
find the length of the Longest Common Subsequence (LCS). -->
<?php

function LCS($s1, $s2) {
    $m = strlen($s1);
    $n = strlen($s2);

    // dp table create
    $dp = array_fill(0, $m+1, array_fill(0, $n+1, 0));

    for ($i = 1; $i <= $m; $i++) {
        for ($j = 1; $j <= $n; $j++) {

            // match
            if ($s1[$i-1] == $s2[$j-1]) {
                $dp[$i][$j] = 1 + $dp[$i-1][$j-1];
            } 
            // not match
            else {
                $dp[$i][$j] = max($dp[$i-1][$j], $dp[$i][$j-1]);
            }
        }
    }

    return $dp[$m][$n];
}

// Test
echo LCS("abcde", "ace"); // Output: 3