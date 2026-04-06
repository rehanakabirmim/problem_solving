<!-- Given an array of coins [1,2,5] and a target amount 11,
find the minimum number of coins needed to make the amount. -->
<?php

function coinChange($coins, $amount) {
    $dp = array_fill(0, $amount + 1, INF);
    $dp[0] = 0;

    for ($i = 1; $i <= $amount; $i++) {
        foreach ($coins as $coin) {
            if ($i - $coin >= 0) {
                $dp[$i] = min($dp[$i], $dp[$i - $coin] + 1);
            }
        }
    }

    return $dp[$amount] == INF ? -1 : $dp[$amount];
}

// Test
echo coinChange([1,2,5], 11); // Output: 3 (5+5+1)