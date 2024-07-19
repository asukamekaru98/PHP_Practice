<?php
$myArray = ["a", "b", "c", "d", "e", "f"];
$slice1 = array_slice($myArray, 0, 3);
$slice2 = array_slice($myArray, 3, 2);
$slice3 = array_slice($myArray, -3);

print_r($slice1);
print_r($slice2);
print_r($slice3);
