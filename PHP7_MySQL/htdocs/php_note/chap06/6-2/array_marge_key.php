<?php
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["d" => 40, "e" => 50];
$c = ["f" => 60, "g" => 80];
$result = array_merge($a, ($b + $c));
print_r($result);
