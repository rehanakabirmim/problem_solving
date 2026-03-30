<!-- Given an array of numbers and a target, find two numbers whose sum equals the target and return their indices in the array. -->

<?php
function twoSumIndices($nums, $target) {
    $numMap = []; // number => index

    foreach ($nums as $i => $num) {
        $different = $target - $num;

        if (isset($numMap[$different])) {
            // found pair → return their indices
            return [$numMap[$different], $i];
        }

        // store current number with its index
        $numMap[$num] = $i;
    }

    return [];
}

// Test
$nums = [2, 11, 7, 15];
$target = 9;

$result = twoSumIndices($nums, $target);

// Only indices print
echo implode(", ", $result); // Output: 0, 2
?>


<!-- Given an array of numbers and a target, find two numbers whose sum equals the target and return the numbers themselves. -->
 <?php
function twoSumNumbers($nums, $target) {
    $numMap = []; // number => true (mark seen)

    foreach ($nums as $num) {
        $different = $target - $num;

        if (isset($numMap[$different])) {
            // found pair → return numbers
            return [$different, $num];
        }

        $numMap[$num] = true; // mark as seen
    }

    return [];
}

// Test
$nums = [1, 3, 5, 6];
$target = 6;

$result = twoSumNumbers($nums, $target);

// Only numbers print
echo implode(", ", $result); // Output: 1, 5
?>