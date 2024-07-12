<?php
function twice(float $var): int //floatで受け取り、intで返す。
{
    $var *= 2;
    return $var;
}
$num = 10.8;
$result = twice($num);
echo "{$num}の2倍は", $result;
