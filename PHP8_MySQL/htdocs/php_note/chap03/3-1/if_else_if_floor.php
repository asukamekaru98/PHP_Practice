<?php
$age = 15.7;
$age = floor($age); //端数切り捨て

if ($age < 13) {
    $price = 0;
} else if ($age <= 15) {
    $price = 500;
} else if ($age <= 19) {
    $price = 1000;
} else {
    $price = 2000;
}

echo "{$age}なので{$price}";
