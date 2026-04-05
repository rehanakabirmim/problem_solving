//Quick Sort (Fast in practice)
<?php

function quickSort($arr) {
    if (count($arr) < 2) return $arr;

    $pivot = $arr[0];
    $left = $right = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] <= $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(
        quickSort($left),
        [$pivot],
        quickSort($right)
    );
}

// Test
$arr = [5, 3, 8, 4];
print_r(quickSort($arr)); // [3,4,5,8]
// Time Complexity

// Average: O(n log n) Worst: O(n²)