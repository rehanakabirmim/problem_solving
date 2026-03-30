<!-- Maximum Subarray Sum

Given:

An integer array nums of length n.

Task:

Find the sum of the contiguous subarray (of at least one element) which has the largest sum.
Return that maximum sum. -->
<?php
function maxSubArraySum($nums) {
    // initial
    $maxSoFar = $nums[0];      // overall maximum sum
    $maxEndingHere = $nums[0]; // maximum sum ending at current index

    // loop from 1 to end
    for ($i = 1; $i < count($nums); $i++) {
        // decide: start new subarray at current number or continue previous
        $maxEndingHere = max($nums[$i], $maxEndingHere + $nums[$i]);

        // update overall max if current subarray sum is bigger
        $maxSoFar = max($maxSoFar, $maxEndingHere);
    }

    return $maxSoFar;
}

// Test
$nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
$result = maxSubArraySum($nums);
echo "Maximum subarray sum: " . $result; // Output: 6
?>