<?php
function twice(float $var): int //<----戻り値の型
{
    $var *= 2;
    return $var;
}

$num = 10.8;
$result = twice($num);
echo "{$num}の2倍は、", $result;
