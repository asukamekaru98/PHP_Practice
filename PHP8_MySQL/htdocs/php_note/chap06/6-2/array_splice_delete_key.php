<?php
$myArray = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50];
$removed = array_splice($myArray, 1, 2);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo "<br>";
echo '戻り：$removed', "<br>";
print_r($removed);
