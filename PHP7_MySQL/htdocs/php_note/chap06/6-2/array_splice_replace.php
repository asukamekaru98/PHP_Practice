<?php
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo '戻り：$removed', "<br>";
print_r($removed);

$myArray = ["a", "b"];                      //YZが追加される
$replace = ["X", "Y", "Z"];                 //
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo '戻り：$removed', "<br>";
print_r($removed);

$myArray = ["a", "b", "c", "d", "e"];       //cとdが削除される
$replace = ["X"];                           //
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後：$myArray', "<br>";
print_r($myArray);
echo '戻り：$removed', "<br>";
print_r($removed);
