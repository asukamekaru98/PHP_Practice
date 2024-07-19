<?php
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50];
$result = array_merge_recursive($a, $b);
print_r($result);
