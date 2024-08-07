<?php
$num1 = round(1.5, 0, PHP_ROUND_HALF_UP);
$num2 = round(1.5, 0, PHP_ROUND_HALF_DOWN);
$num3 = round(2.5, 0, PHP_ROUND_HALF_EVEN);
$num4 = round(2.5, 0, PHP_ROUND_HALF_ODD);

var_dump($num1);
var_dump($num2);
var_dump($num3);
var_dump($num4);
