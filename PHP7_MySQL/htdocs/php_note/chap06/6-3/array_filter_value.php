<?php
function isPlus($value)
{
    return $value > 0;
}

$valueList = ["a" => 3, "b" => 0, "c" => 5, "d" => -2, "e" => 4];
$filtered = array_filter($valueList, "isPlus");
print_r($filtered);
