<?php
$nums = [3, 4, -2, 1, -3, 9, 0, 5];
usort(
    $nums,
    function ($a, $b) {
        return abs($a) <=> abs($b);
    }
);
print_r($nums);
