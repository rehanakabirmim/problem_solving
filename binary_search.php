<!-- Given a sorted array, find target value. -->
 <?php

function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($arr[$mid] == $target) {
            return $mid;
        } elseif ($arr[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}

// Test
$arr = [1, 3, 5, 7, 9];
echo binarySearch($arr, 5); // Output: 2

// Time Complexity

// O(log n) (very fast)