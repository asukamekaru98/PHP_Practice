<?php
$a = ["green", "red", "blue"];
$b = ["blue", "pink", "yellow"];
$c = ["pink", "white"];

$all = array_merge($a, $b, $c);
$unique = array_unique($all);

print_r($all);
echo "<br>";
print_r($unique);
