<?php
function twice(int $var)
{
    $var *= 2;
    return $var;
}
$num = 10.8;
$result = twice($num);  //この引数は、勝手にint型に変換される
echo "{$num}の2倍は", $result;
