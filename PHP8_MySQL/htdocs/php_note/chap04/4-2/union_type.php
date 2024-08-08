<?php
function twice(string | float $var): float //<----戻り値の型
{
    $var *= 2;
    return $var;
}

$num1 = "1.9cm";
$num2 = 2.6;
$result1 = twice($num1);
$result2 = twice($num2);
echo "{$num1}の2倍は、", $result1, "<br>", PHP_EOL;
echo "{$num2}の2倍は、", $result2;
