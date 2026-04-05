<!-- Merge Sort (Divide & Conquer) -->
 <?php

function mergeSort($arr) {
    if (count($arr) <= 1) return $arr;

    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    return merge(
        mergeSort($left),
        mergeSort($right)
    );
}

function merge($left, $right) {
    $result = [];

    while (!empty($left) && !empty($right)) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

// Test
$arr = [5, 2, 9, 1];
print_r(mergeSort($arr)); // [1,2,5,9]

//Time Complexity

//O(n log n)