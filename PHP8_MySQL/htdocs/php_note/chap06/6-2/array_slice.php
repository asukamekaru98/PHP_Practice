<?php
$myArray = ["a", "b", "c", "d", "e", "f"];

// Top3
$slice1 = array_slice($myArray, 0, 3);

// 4番、5番
$slice2 = array_slice($myArray, 3, 2);

// ラスト3、マイナスを付ける
$slice3 = array_slice($myArray, -3);

print_r($slice1);
echo "<br>";
print_r($slice2);
echo "<br>";
print_r($slice3);
