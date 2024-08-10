<?php
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo "<br>";
echo '戻り：$removed', "<br>";
print_r($removed);
