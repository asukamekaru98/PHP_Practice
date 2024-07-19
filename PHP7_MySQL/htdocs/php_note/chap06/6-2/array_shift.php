<?php
$myArray = ["a", "b", "c", "d"];
$removed = array_shift($myArray);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo '戻り：$removed', "<br>";
print_r($removed);
