<?php

$nums = [4,5,6,7,0,1,2];
$target = 0;

function searchRotated($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($nums[$mid] == $target) return $mid;

        // left sorted
        if ($nums[$left] <= $nums[$mid]) {
            if ($target >= $nums[$left] && $target < $nums[$mid]) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        } 
        // right sorted
        else {
            if ($target > $nums[$mid] && $target <= $nums[$right]) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
    }

    return -1;
}

echo searchRotated($nums, $target); // Output: 4
// Time Complexity	
// 	O(log n)