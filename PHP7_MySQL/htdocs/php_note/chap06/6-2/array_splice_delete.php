<?php
$myArray = ["a", "b", "c", "d", "e"];
$removed = array_splice($myArray, 1, 2);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo '戻り：$removed', "<br>";
print_r($removed);
